<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 17.04.2018
 * Time: 17:18
 */

class News
{
    public static function getNewsItemById($id)
    {
        $id = intval($id);
        if($id)
        {
//            $host = 'localhost';
//            $dbname = 'blog';
//            $user = 'root';
//            $password = '';
//            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
//            if($db){echo 'Ok';}else{echo 'fail';}

            $db = Db::getConnection();

            $sql = 'SELECT * from posts WHERE id ='.$id;

            $result = $db->query($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    public static function getNewsList()
    {

        $db = Db::getConnection();
        $newsList = array();
        $sql = 'SELECT `id`,`title`,`content`,`date`
                 FROM posts
                 ORDER BY date DESC
                 LIMIT 10';

        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['content'] = $row['content'];
            $i++;
        }
        return $newsList;
    }
}