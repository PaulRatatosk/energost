<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04.06.2018
 * Time: 15:33
 */

class Resolution
{
    public static function upload_img($path)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO img_resolution (path) '
            . 'VALUES (:path)';

        $result = $db->prepare($sql);
        $result->bindParam(':path', $path, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getResolutionImg()
    {

        $db = Db::getConnection();
        $listResolutionImg = array();
        $result = $db->query('SELECT * FROM img_resolution');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while($row = $result->fetch()) {
            $listResolutionImg[$i]['id'] = $row['id'];
            $listResolutionImg[$i]['path'] = $row['path'];
            $i++;
        }

        return $listResolutionImg;
    }

    public static function deleteImg($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM img_resolution WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}