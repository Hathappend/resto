<?php


function save(array $request): bool{

    try {
        $stmt = getConnection()->prepare("INSERT INTO users (id, first_name, last_name, email, password, address, address2, city, province, zip, verified, status, roles_mask) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->execute([
            $request['id'],
            $request['first_name'],
            $request['last_name'],
            $request['email'],
            $request['password'],
            $request['address'],
            $request['address2'],
            $request['city'],
            $request['state'],
            $request['zip'],
            1,
            "aktif",
            $request['roles_mask'],
        ]);

        return true;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
        return false;
    }
}

function findById(string $id): array{
    $stmt = getConnection()->prepare("SELECT first_name, last_name, email, address, address2, city, province, zip, profile_img, created_at, roles_mask, last_login FROM users WHERE id = ?");
    $stmt->execute([$id]);
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function update(array $value, ?string $imgName): bool{

    try {
        $stmt = getConnection()->prepare("UPDATE users SET first_name = ?, last_name = ?, address = ?, address2 = ?, city = ?, province = ?, zip = ?, profile_img = ? WHERE id = ?");
        $stmt->execute([
            $value['first_name'],
            $value['last_name'],
            $value['address'],
            $value['address2'],
            $value['city'],
            $value['state'] ,
            $value['zip'] ,
            $imgName,
            $value['id']
        ]);

        return true;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}

function updateInfo(array $value): bool{

    try {
        $stmt = getConnection()->prepare("UPDATE users SET first_name = ?, last_name = ?, email=?,  address = ?, address2 = ?, city = ?, province = ?, zip = ?, roles_mask = ? WHERE id = ?");
        $stmt->execute([
            $value['first_name'],
            $value['last_name'],
            $value['email'],
            $value['address'],
            $value['address2'],
            $value['city'],
            $value['state'] ,
            $value['zip'] ,
            $value['roles_mask'],
            $value['id'],
        ]);

        return true;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}

function findAll(): array{
    $stmt = getConnection()->prepare("SELECT id, first_name, last_name, email, password, address, address2, city, province, zip, profile_img, status, roles_mask FROM users");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserRoleCount(int $role): array{

    $stmt = getConnection()->prepare("SELECT COUNT(*) as total FROM users WHERE roles_mask = ?");
    $stmt->execute([$role]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
