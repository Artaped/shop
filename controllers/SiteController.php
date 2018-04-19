<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 19.04.2018
 * Time: 14:17
 */
include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';
class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}