<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 17.04.2018
 * Time: 11:03
 */


class ProductController
{
    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);
        require_once (ROOT.'/views/product/view.php');
        return true;
    }
}