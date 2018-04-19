<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 19.04.2018
 * Time: 14:17
 */
include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';
class CatalogController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(8);

        require_once (ROOT.'/views/catalog/index.php');
        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);

        require_once (ROOT.'/views/catalog/category.php');
        return true;
    }
}