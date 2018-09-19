<?php

    class GeneralController{
        public function actionIndex()
        {
            $generalItem = array();
            $generalItem = General::getGeneralItem();
            $projectList = array();
            $projectList = Project::getProjectList();
            require_once(ROOT . '/site/general/index.php');
            return true;
        }




    }
