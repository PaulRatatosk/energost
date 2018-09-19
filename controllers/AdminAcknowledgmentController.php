<?php


class AdminAcknowledgmentController
{
    public function actionIndex()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();

        // Проверим, загружалось ли через форму изображение
        if (isset($_POST['submit_upload']) && is_uploaded_file($_FILES["img_upload_acknowledgments"]["tmp_name"])) {
            // Если загружалось, переместим его в нужную папку, дадим новое имя
            $img_path = $_FILES["img_upload_acknowledgments"]["name"];
            move_uploaded_file($_FILES["img_upload_acknowledgments"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/img_acknowledgments/". $img_path);
            Acknowledgment::upload_img($img_path);
        }
        $getAcknowledgmentImg = array();
        $getAcknowledgmentImg = Acknowledgment::getAcknowledgmentImg();


        require_once(ROOT . '/site/admin/acknowledgment-edit-admin.php');
        return true;
    }
}