<?php

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
