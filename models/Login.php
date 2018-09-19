<?php


class Login
{
    public static function checkAdminData($login, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM general_table WHERE admin_login = :login AND admin_password = :password';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        // Обращаемся к записи
        $login_result = $result->fetch();

        if ($login_result) {
            // Если запись существует, возвращаем true
            return true;
        }
        return false;
    }



    public static function edit_login($new_login)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE general_table 
            SET admin_login = :new_login";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':new_login', $new_login, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function edit_password($new_password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE general_table 
            SET admin_password = :new_password";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':new_password', $new_password, PDO::PARAM_INT);
        return $result->execute();
    }
}