<?php

function saveMenu(array $request, string $imgName): bool
{

    $conn = getConnection();

    try {
        $stmt = $conn->prepare("INSERT INTO menus (id, menu, description, image, price, stock, min_stock, cooking_time, category_id) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->execute([
            $request['id'],
            $request['name'],
            $request['description'],
            $imgName,
            $request['price'],
            $request['stock'],
            $request['min_stock'],
            $request['cooking_time'],
            $request['category_id'],
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
//        throw new Exception($e->getMessage());
        return false;
    }
}

function updateMenu(array $request, string $imageName): bool{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = getConnection()->prepare("UPDATE menus SET menu = ?, description = ?, image=?,  price = ?, stock = ?,min_stock = ?, cooking_time = ?, category_id = ? WHERE id = ?");
        $stmt->execute([
            $request['menu'],
            $request['description'],
            $imageName,
            $request['price'],
            $request['stock'],
            $request['min_stock'],
            $request['cooking_time'] ,
            $request['category_id'] ,
            $request['id'],
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
        error_log($e->getMessage());
        return false;
    }
}

function getMenuById(string $id): array{

    $stmt = getConnection()->prepare("SELECT m.*,  c.category FROM menus as m JOIN menu_categories as c ON c.id = m.category_id WHERE m.id =? ");
    $stmt->execute([$id]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getAllMenu(): array{

    $stmt = getConnection()->prepare("SELECT m.*,  c.category FROM menus as m JOIN menu_categories as c ON c.id = m.category_id ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getMenuStockInDanger(): array {

    $stmt = getConnection()->prepare("SELECT id,menu,stock,min_stock FROM menus WHERE stock < min_stock ORDER BY stock ASC");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}