<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/user">Управление пользователями</a></li>
                    <li class="active">Редактировать пользователя</li>
                </ol>
            </div>


            <h4>Редактировать категорию "<?php echo $user['name']; ?>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $user['name']; ?>">

                        <p>Порядковый номер</p>
                        <input type="text" name="email" placeholder="" value="<?php echo $user['email']; ?>">

                        <p>Статус</p>
                        <select name="role">
                            <option value="admin" <?php if ($user['role'] == 'admin') echo ' selected="selected"'; ?>>Админ</option>
                            <option value="" <?php if ($user['role'] == '') echo ' selected="selected"'; ?>>Пользователь</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

