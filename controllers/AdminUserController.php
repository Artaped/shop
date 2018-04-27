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

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $role = $_POST['role'];
            $email = $_POST['email'];

            // Сохраняем изменения
            User::updateUserAdmin($id, $name, $role, $email);
           //  Перенаправляем пользователя на страницу управлениями юзерами
            header("Location: /admin/user");

        }
        require_once(ROOT . '/views/admin_user/update.php');
        return true;

    }
    /**
     * Action для страницы "Удалить юзера"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем категорию
            User::deleteUserById($id);

            //  Перенаправляем пользователя на страницу управлениями юзерами
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/delete.php');
        return true;
    }
}