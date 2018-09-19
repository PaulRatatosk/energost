<?php


class ProjectAdd
{
    public static function createProject($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO projects '
            . '(short_content, specification, path)'
            . 'VALUES '
            . '(:short_content_project_add, :specification_project_add, :img_path)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':short_content_project_add', $options['short_content_project_add'], PDO::PARAM_STR);
        $result->bindParam(':specification_project_add', $options['specification_project_add'], PDO::PARAM_STR);
        $result->bindParam(':img_path', $options['img_path'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
}