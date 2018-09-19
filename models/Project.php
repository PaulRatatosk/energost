<?php


class Project
{
    public static function getProjectList() {

        $db = Db::getConnection();
        $projectList = array();
        $result = $db->query('SELECT * FROM projects ORDER BY id ASC LIMIT 30');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while($row = $result->fetch()) {
            $projectList[$i]['id'] = $row['id'];
            $projectList[$i]['short_content'] = $row['short_content'];
            $projectList[$i]['specification'] = $row['specification'];
            $projectList[$i]['path'] = $row['path'];
            $i++;
        }

        return $projectList;

    }


    public static function getProjectItemByID($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM projects WHERE id=' . $id);

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $projectItem = $result->fetch();

            return $projectItem;
        }
    }





}