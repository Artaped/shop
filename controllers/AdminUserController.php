<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 26.04.2018
 * Time: 13:53
 */
class AdminUserController extends AdminBase
{
    public function actionIndex()
    {
        //Проверка доступа
        self::checkAdmin();

        //получаем список всех пользователей
        $users = User::getUsersListAdmin();

        require_once(ROOT . '/views/admin_user/index.php');
        return true;
    }
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $user = User::getUserById($id);
        require_once(ROOT . '/views/admin_user/edit.php');
        return true;

    }
}