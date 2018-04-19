<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 19.04.2018
 * Time: 16:45
 */

class Category
{
    public static function getCategoriesList()
    {
        $db = Db::getConnection();

        $categoryList = array();

        $sql = 'SELECT id, name FROM category ORDER BY sort_order ASC';

        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
}