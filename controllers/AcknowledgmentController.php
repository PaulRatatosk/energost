<?php


class AcknowledgmentController
{
    public function actionIndex()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();
        $getAcknowledgmentImg = array();
        $getAcknowledgmentImg = Acknowledgment::getAcknowledgmentImg();
        require_once(ROOT . '/site/public_html/acknowledgment.php');
        return true;
    }
}