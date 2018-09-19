<?php

class AdminController
{
    public function actionIndex()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();


        //ИЗМЕНЕНИЕ ОПИСАНИЯ ГЛАВНОЙ СТРАНИЦЫ
        $result_specification_site = false;
        if (isset($_POST['specification_edit_submit'])) {
            // Получаем данные из формы редактирования
            $specification_edit = $_POST['specification_edit'];
            $result_specification_site = Admin::edit_specification($specification_edit);
        }



        //ИЗМЕНЕНИЕ ОПИСАНИЯ МЕСТОПОЛОЖЕНИЯ
        $result_specification_contacts = false;
        if (isset($_POST['specification_edit_contacts_submit'])) {
            // Получаем данные из формы редактирования
            $specification_edit_contacts = $_POST['specification_contacts_edit'];
            $result_specification_contacts = Admin::edit_specification_contacts($specification_edit_contacts);
        }

        //ИЗМЕНЕНИЕ ТЕЛЕФОНА
        $result_edit_contacts_phone = false;
        if (isset($_POST['contacts_edit_phone_submit'])) {
            // Флаг ошибок
            $errors_phone = false;
            // Получаем данные из формы редактирования
            $new_phone = $_POST['new_telephone'];
            if (!Check::checkPhone($new_phone)) {
                $errors_phone[] = 'Неправильный номер';
            }else{
                $result_edit_contacts_phone = Admin::edit_contacts_phone($new_phone);
            }
        }


        //ИЗМЕНЕНИЕ E-MAIL
        $result_edit_contacts_email = false;
        if (isset($_POST['contacts_edit_email_submit'])) {
            // Флаг ошибок
            $errors_email = false;
            // Получаем данные из формы редактирования
            $new_email = $_POST['new_email'];
            if (!Check::checkEmail($new_email)) {
                $errors_email[] = 'Неправильный email';
            }else{
                $result_edit_contacts_email = Admin::edit_contacts_email($new_email);
            }
        }

        //ИЗМЕНЕНИЕ ЛОГИНА
        $result_login = false;
        // Обработка формы
        if (isset($_POST['login_edit_submit'])) {
            // Флаг ошибок
            $errors_login = false;
            // Если форма отправлена
            // Получаем данные из формы редактирования
            $old_login = $_POST['old_login'];
            $new_login = $_POST['new_login'];
            if ($old_login != $generalItem['admin_login']){
                $errors_login[] = 'Старый логин указан неверно';
            }


            // Валидируем значения
            if (!Check::checkName($new_login)) {
                $errors_login[] = 'Логин не должен быть короче 5-ти символов';
            }
            if ($errors_login == false) {
                // Если ошибок нет, сохраняет изменения профиля
                $result_login = Login::edit_login($new_login);
            }
        }





        //ИЗМЕНЕНИЕ ПАРОЛЯ
        $result_password = false;
        if (isset($_POST['password_edit_submit'])) {
            // Флаг ошибок
            $errors_password = false;
            // Если форма отправлена
            // Получаем данные из формы редактирования
            $old_password = md5(htmlspecialchars($_POST['old_password']));
            $new_password = md5(htmlspecialchars($_POST['new_password']));
            $new2_password = md5(htmlspecialchars($_POST['new2_password']));
            if ($generalItem['admin_password'] != $old_password){
                // Если данные неправильные - показываем ошибку
                $errors_password[] = 'Старый пароль указан неверно';
            }
            if ($new_password != $new2_password){
                $errors_password[] = 'Пароль не совпадает';
            }
            // Валидируем значения
            if (!Check::checkPassword($new_password)) {
                $errors_password[] = 'Пароль должен быть не короче 6-ти символов';
            }
            if ($errors_password == false) {
                // Если ошибок нет, сохраняет изменения профиля
                $result_password = Login::edit_password($new_password);
            }
        }



        //ПОДКЛЮЧЕНИЕ СТРАНИЦЫ ОБЩЕЕ РЕДАКТИРОВАНИЕ
        if (isset($_SESSION['user'])){
            require_once(ROOT . '/site/admin/general-admin.php');
            return true;
        }
        else{
                header("Location: /");
            }
    }


    public function actionLogout()
    {
        // Стартуем сессию
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);

        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }



}