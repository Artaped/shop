<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 17.04.2018
 * Time: 10:54
 */
include_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {
       $newsList = array();
       $newsList = News::getNewsList();
        require_once (ROOT.'/views/news/index.php');
        return true;
    }
    public function actionView($category, $id)
    {
            if($id){
                $newsItem = News::getNewsItemById($id);

                echo '<pre>';
                print_r($newsItem);
                echo '</pre>';

                echo 'actionView';
            }

        return true;
    }
}