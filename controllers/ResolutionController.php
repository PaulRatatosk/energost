<?php

class ResolutionController
{
    public function actionIndex()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();
        $getResolutionImg = array();
        $getResolutionImg = Resolution::getResolutionImg();
        require_once(ROOT . '/site/public_html/resolution.php');
        return true;
    }
}