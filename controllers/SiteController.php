<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 19.04.2018
 * Time: 14:17
 */

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);

        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}