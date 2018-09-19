<?php


class AdminResolutionController
{
    public function actionIndex()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();

        // Проверим, загружалось ли через форму изображение
        if (isset($_POST['submit_upload_resolution']) && is_uploaded_file($_FILES["img_upload_resolution"]["tmp_name"])) {
            // Если загружалось, переместим его в нужную папку, дадим новое имя
            $img_path = $_FILES["img_upload_resolution"]["name"];
            move_uploaded_file($_FILES["img_upload_resolution"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/img_resolution/". $img_path);
            Resolution::upload_img($img_path);
        }
        $getResolutionImg = array();
        $getResolutionImg = Resolution::getResolutionImg();


        require_once(ROOT . '/site/admin/resolution-edit-admin.php');
        return true;
    }
}