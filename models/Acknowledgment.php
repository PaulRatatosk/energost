<?php


class Acknowledgment
{
    public static function upload_img($path)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO img_acknowledgment (path) '
            . 'VALUES (:path)';

        /*$products = json_encode($products);*/

        $result = $db->prepare($sql);
        $result->bindParam(':path', $path, PDO::PARAM_STR);
        return $result->execute();
    }


    public static function getAcknowledgmentImg()
    {

        $db = Db::getConnection();
        $listAcknowledgmentImg = array();
        $result = $db->query('SELECT * FROM img_acknowledgment');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while($row = $result->fetch()) {
            $listAcknowledgmentImg[$i]['id'] = $row['id'];
            $listAcknowledgmentImg[$i]['path'] = $row['path'];
            $i++;
        }

        return $listAcknowledgmentImg;
    }



    public static function deleteImg($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM img_acknowledgment WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}
