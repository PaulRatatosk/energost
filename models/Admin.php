<?php

class Admin
{
    public static function edit_specification($specification_edit)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE general_table 
            SET specification_site = :specification_edit";

        $result = $db->prepare($sql);
        $result->bindParam(':specification_edit', $specification_edit, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function edit_specification_contacts($specification_edit_contacts)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE general_table 
            SET specification_contacts = :specification_edit_contacts";

        $result = $db->prepare($sql);
        $result->bindParam(':specification_edit_contacts', $specification_edit_contacts, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function edit_contacts_phone($new_phone)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE general_table 
            SET telephone = :new_phone";

        $result = $db->prepare($sql);
        $result->bindParam(':new_phone', $new_phone, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function edit_contacts_email($new_email)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE general_table 
            SET e_mail = :new_email";
        $result = $db->prepare($sql);
        $result->bindParam(':new_email', $new_email, PDO::PARAM_STR);
        return $result->execute();
    }



     public static function delete_project($id){
         // Соединение с БД
         $db = Db::getConnection();

         // Текст запроса к БД

         $sql = "DROP TABLE `img_project{$id}`";
         $db->query($sql);
         $sql = 'DELETE FROM projects WHERE id = :id';

         // Получение и возврат результатов. Используется подготовленный запрос
         $result = $db->prepare($sql);
         $result->bindParam(':id', $id, PDO::PARAM_INT);
         return $result->execute();
     }



}