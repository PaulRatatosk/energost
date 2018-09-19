<?php

class ContactsController
{
    public function actionIndex()
    {
        $generalItem = array();
        $generalItem = General::getGeneralItem();


        // Переменные для формы
        $userEmail = false;
        $userText = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit-message'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $userEmail = htmlspecialchars($_POST['message-email']);
            $userText = htmlspecialchars($_POST['message']);

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!Check::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Отправляем письмо администратору
                $adminEmail = 'info@energost.su';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Сообщение от посетителя сайта';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }
        require_once(ROOT . '/site/public_html/contacts.php');
        return true;
    }
}