<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 16.04.2018
 * Time: 12:12
 */
return array(
    'product/([0-9]+)' => 'product/view/$1',//actionView in ProductController
    'catalog' => 'catalog/index',
    'category/([0-9]+)' => 'catalog/category/$1',
    '' => 'site/index',


    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',


    'news' => 'news/index',// actionIndex in NewsController

);