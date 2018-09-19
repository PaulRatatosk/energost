<?php


class ProjectEdit
{
    public static function edit_project($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE projects
            SET 
                short_content = :header_project_edit, 
                specification = :specification_project_edit 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':header_project_edit', $options['header_project_edit'], PDO::PARAM_STR);
        $result->bindParam(':specification_project_edit', $options['specification_project_edit'], PDO::PARAM_STR);
        return $result->execute();
    }





    public static function upload_general_img($id, $path)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE projects
            SET 
                path = :path
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':path', $path, PDO::PARAM_STR);
        return $result->execute();
    }







    /*ДОПОЛНИТЕЛЬНЫЕ ФОТО*/
    public static function upload_img($id, $img_path)
    {
        // Соединение с БД
        $db = Db::getConnection();
        $sql = "CREATE TABLE `host1577950_2648`.`img_project{$id}` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `path` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
        $db->query($sql);
        $sql = "INSERT INTO `host1577950_2648`.`img_project{$id}` (`id`, `path`) VALUES (NULL, '$img_path')";
        $result = $db->query($sql);
        return $result;
    }



    //СУЩЕСТВУЕТ ЛИ ТАБЛИЦА
    public static function existTable($id){
        $db = Db::getConnection();
        $sql = "SELECT * FROM `img_project{$id}`";
        $result = $db->query($sql);
        return $result;
    }


    //ЕСЛИ СУЩЕСТВУЕТ ТАБЛИЦА ПРОИСХОДИТ ВЫБОРКА
    public static function select_img($id){
        $db = Db::getConnection();
        $selectImg = array();
        $sql = "SELECT * FROM `img_project{$id}`";
        $result = $db->query($sql);
        if (isset($result)){
            $i = 0;
            while ($row = $result->fetch()) {
                $selectImg[$i]['id'] = $row['id'];
                $selectImg[$i]['path'] = $row['path'];
                $i++;

            }
        }
        return $selectImg;
    }




    public static function delete_img($id_project, $id_button){
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "DELETE FROM `img_project{$id_project}` WHERE id = $id_button";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->query($sql);
        return $result;
    }




}