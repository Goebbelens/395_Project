<?php
// вспомогательный класс для проверки данных при регистрации, сохранение данных

class SignUp
{
    /**
     * метод для проверки имени
     */
    private static function validateFirstName($first_name){
        $regExp = "/^[а-яё]{2,}$/iu";
        
        if(strlen($first_name) === 0) { // если строка пуста
            return 'Введите имя';
        } else if(!preg_match($regExp, $first_name)){// если строка НЕ соответствует РВ (рег. выражению)
            return 'Имя должно быть не короче двух символов кириллицы';
        }
    }

    /**
     * метод для проверки фамилии
     */
    private static function validateLastName($last_name){
        $regExp = "/^[а-яё]{2,}$/iu";
        
        if(strlen($last_name) === 0) { // если строка пуста
            return 'Введите фамилию';
        } else if(!preg_match($regExp, $last_name)){// если строка НЕ соотвуетствует РВ (рег. выражению)
            return 'Фамилия должна быть не короче двух символов кириллицы';
        }
    }

    /**
     * метод для проверки логина
     */
    private static function validateLogin($login){
        $regExp = "/^[a-z][a-z0-9]{2,}$/i";
        if(strlen($login) === 0) { // если строка пуста
            return 'Введите логин';
        } else if(!preg_match($regExp, $login)){ // если строка НЕ соотвуетствует РВ (рег. выражению)
            return 'От трех символов латиницы и цифр, первый - буква';
        }

        // проверка на уникальность по БД
        $rows = Users::checkLoginUnique($login);
        if($rows){
            return 'Извините, такой логин уже занят';
        }
    }
    
    /**
     * метод для проверки емейла
     */
    private static function validateEmail($email) {
        $regExp = "/^.+@.+\..+$/i";
        if(strlen($email) === 0) { // если строка пуста
            return 'Введите адрес электронной почты';
        } else if(!preg_match($regExp, $email)){ // если строка НЕ соотвуетствует РВ (рег. выражению)
            return 'Адрес электронной почты введен в неверном формате';
        }

        // проверка на уникальность
        $rows = Users::checkEmailUnique($email);
        if($rows){
            return 'Извините, такой емейл уже зарегистрирован';
        }
    }

    /**
     * метод для проверки пароля
     */
    private static function validatePassword($password){
        $regExp = "/^.{8,}$/iu";

        if(strlen($password) === 0) { // если строка пуста
            return 'Введите пароль';
        } elseif(!preg_match($regExp, $password)){ // если строка НЕ соотвуетствует РВ (рег. выражению)
            return 'Не менее 8 произвольных символов';
        }
    }

    /**
     * метод для проверки данных, полученных при регистрации
     */
    public static function validateForm(){
        // создаем массивы для ошибок и для введеных клиентом данных
        $errors = [];
        $input = [];

        // получаем данные из глобальных массивов и обрабатываем
        $input['first_name'] = htmlspecialchars(trim($_POST['first_name']));
        $input['last_name'] = htmlspecialchars(trim($_POST['last_name']));
        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['email'] = htmlspecialchars(trim($_POST['email']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));

        /**
         * проверка имени
         */
        $firstNameError = self::validateFirstName($input['first_name']);
        if($firstNameError){// если ошибка есть
            $errors['first_name'] = $firstNameError;
        }
        /**
         * проверка фамилии
         */
        $lastNameError = self::validateLastName($input['last_name']);
        if($lastNameError){
            $errors['last_name'] = $lastNameError;
        }
        /**
         * проверка логина
         */
        $loginError = self::validateLogin($input['login']);
        if($loginError){
            $errors['login'] = $loginError;
        }
        /**
         * проверка емейла
         */
        $emailError = self::validateEmail($input['email']);
        if($emailError){
            $errors['email'] = $emailError;
        }
        /**
         * проверка пароля
         */
        $passwordError = self::validatePassword($input['password']);
        if($passwordError){
            $errors['password'] = $passwordError;
        }

        // возвращаем массивы с ошибками и данными клиентов
        return [$errors, $input];
    } // validateForm()

    /**
     * метод для сохранения данных в БД, запись данных в сессию
     */
    public static function processForm($input){

        // шифрование пароля
        $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);

        // сохранение данных в БД
        $input['userId'] = Users::addNewUser($input);

        // запись данных сохраненного пользователя в сессию
        session_start();
        $_SESSION['userId'] = $input['userId'];
        $_SESSION['login'] = $input['login'];
        $_SESSION['firstName'] = $input['first_name'];

        // перенаправляем на главную
        header("Location: /");
    }
} // SignUp