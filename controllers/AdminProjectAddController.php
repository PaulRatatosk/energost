<?php


class AdminProjectAddController
{
    public function actionProjectAdd()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();


        // Обработка формы
        if (isset($_POST['project_add_submit'])){
            // Если форма отправлена
            // Получаем данные из формы
            // Проверим, загружалось ли через форму изображение
            if (is_uploaded_file($_FILES["general_img_project"]["tmp_name"])) {
                // Если загружалось, переместим его в нужную папку, дадим новое имя
                $img_path = $_FILES["general_img_project"]["name"];
                move_uploaded_file($_FILES["general_img_project"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/general_img_project/". $img_path);
                $options['img_path'] = $img_path;
            }else{
                $options['img_path'] = "no_photo2.gif";
            }

            $options['short_content_project_add'] = $_POST['short_content_project_add'];
            $options['specification_project_add'] = $_POST['specification_project_add'];
            


            // Флаг ошибок в форме
            $errors_project_add = false;
            if (strlen($options['short_content_project_add']) > 125) {
                $errors_project_add[] = 'Заголовок должен быть не более 125 символов';
            }
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['short_content_project_add'])) {
                $errors_project_add[] = 'Заполните поля';
            }

            if ($errors_project_add == false) {
                // Если ошибок нет
                $id = ProjectAdd::createProject($options);
            }
        }



        require_once(ROOT . '/site/admin/project-add-admin.php');
        return true;
    }
}