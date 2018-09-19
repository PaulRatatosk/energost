<?php

    class ProjectController
    {
        public function actionList()
        {
            $projectList = array();
            $projectList = Project::getProjectList();
            $generalItem = array();
            $generalItem = General::getGeneralItem();
            require_once(ROOT . '/site/public_html/projects.php');
            return true;
        }

        public function actionView($id)
        {
            if ($id) {
                $generalItem = array();
                $generalItem = General::getGeneralItem();
                $projectItem = array();
                $projectItem = Project::getProjectItemByID($id);
                $imgList = array();
                //если таблица существует, показать список фото:
                if (ProjectEdit::existTable($id)){
                    $imgList = ProjectEdit::select_img($id);
                }
                require_once(ROOT . '/site/public_html/project.php');
            }
            return true;
        }
    }