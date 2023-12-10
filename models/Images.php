<?php
// модель для работы с таблицей изображений

require_once 'DBConnect.php';

class Images{

    public static function getImages($category){
        $pdo = DBConnect::getConnection();
        $query = "SELECT image_path
                    FROM images, category
                    WHERE category_id = category.id
                    AND category.name = '$category';";
        return $pdo->query($query)->fetchAll();
    }

}