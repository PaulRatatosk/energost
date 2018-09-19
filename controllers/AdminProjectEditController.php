<?php

class AdminProjectEditController
{
    public function actionProjectEdit($id)
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();
        $projectItem = Project::getProjectItemByID($id);
        $imgList = array();
        //если таблица существует, показать список фото:
        if (ProjectEdit::existTable($id)){
            $imgList = ProjectEdit::select_img($id);
        }





        //РЕДАКТИРОВАНИЕ ЗАГОЛОВКА И ОПИСАНИЯ ПРОЕКТА
        if (!empty($_POST['project_edit_submit'])) {
            // Получаем данные из формы редактирования
            $options['header_project_edit'] = $_POST['header_project_edit'];
            $options['specification_project_edit'] = $_POST['specification_project_edit'];
            $result_edit_project = ProjectEdit::edit_project($id, $options);
        }


        //ЗАГРУЗКА НОВОЙ ГЛАВНОЙ ФОТО ПРОЕКТА
        if (isset($_POST['save_general_new_img']) && is_uploaded_file($_FILES["general_new_img"]["tmp_name"])){
            unlink(ROOT."/upload/general_img_project/".$projectItem['path']);
            // Если загружалось, переместим его в нужную папку, дадим новое имя
            $img_path = $_FILES["general_new_img"]["name"];
            move_uploaded_file($_FILES["general_new_img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/general_img_project/". $img_path);
            $result = ProjectEdit::upload_general_img($id, $img_path);
        }


        //ЗАГРУЗКА НОВОЙ ДОПОЛНИТЕЛЬНОЙ ФОТО ПРОЕКТА
        if (isset($_POST['save_new_img']) && is_uploaded_file($_FILES["new_img"]["tmp_name"])){
            // Если загружалось, переместим его в нужную папку, дадим новое имя
            $img_path = $_FILES["new_img"]["name"];
            move_uploaded_file($_FILES["new_img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/img_project/". $img_path);
            $result = ProjectEdit::upload_img($id, $img_path);
        }





        require_once(ROOT . '/site/admin/project-edit-admin.php');
        return true;
    }
}