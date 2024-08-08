<?php

function saveCategory(array $request): bool{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = $conn->prepare("INSERT INTO menu_categories (id, category) VALUES (?,?)");
        $stmt->execute([
            $request['id'],
            $request['category_name'],
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
//        throw new Exception($e->getMessage());
        return false;
    }
}

function updateCategory(array $request): bool{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = getConnection()->prepare("UPDATE menu_categories SET category = ? WHERE id = ?");
        $stmt->execute([
            $request['category'],
            $request['id'],
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
//        error_log($e->getMessage());
        return false;
    }
}

function findAllCategory(): array{

    $stmt = getConnection()->prepare("SELECT * FROM menu_categories");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function deleteCategoryById(string $id): void{

    $stmt = getConnection()->prepare("DELETE FROM menu_categories WHERE id = ?");
    $stmt->execute([$id]);

}
