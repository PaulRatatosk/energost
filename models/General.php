<?php

    class General{
        public static function getGeneralItem()
        {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM general_table');

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode(PDO::FETCH_ASSOC) ;

            $generalItem = $result->fetch();

            return $generalItem;
        }
}