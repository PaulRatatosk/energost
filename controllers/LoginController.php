<?php

class LoginController{
    public function actionIndex()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();



        // Переменные для формы
        $login = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit_login'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $login = htmlspecialchars($_POST['admin_login']);
            $password = md5(htmlspecialchars($_POST['admin_password'])) ;

            // Флаг ошибок
            $errors = false;

            // Проверяем существует ли пользователь
            $Login = Login::checkAdminData($login, $password);

            if ($Login == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Перенаправляем пользователя в закрытую часть - кабинет
                $_SESSION['user'] = 1;
                if (isset($_SESSION['user'])){
                    header("Location: /admin");
                }
                else{
                    header("Location: /");
                }
            }
        }



        require_once(ROOT . '/site/public_html/login.php');
        return true;
    }
}
