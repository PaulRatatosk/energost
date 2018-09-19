<?php


class AdminProjectsEditController
{
    public function actionProjectsEdit()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();
        $projectList = array();
        $projectList = Project::getProjectList();
        require_once(ROOT . '/site/admin/projects-edit-admin.php');
        return true;
    }
}