<?php
// вспомогательный класс для проверки данных при входе

class SignIn
{
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
        if($rows === 0){
            return 'Указанный логин не найден';
        }
    }

    /**
     * метод для проверки пароля
     */
    private static function validatePassword($password, $login){
        $regExp = "/^.{8,}$/iu";

        if(strlen($password) === 0) { // если строка пуста
            return 'Введите пароль';
        } elseif(!preg_match($regExp, $password)){ // если строка НЕ соотвуетствует РВ (рег. выражению)
            return 'Не менее 8 произвольных символов';
        }

        // получаем пароль пользователя по логину
        $passwordDB = Users::getPasswordByLogin($login);

        // сравниваем пароли
        if( !password_verify( $password, $passwordDB )){// если пароли НЕ совпадают
            return 'Пароль неверен';
        }
    }

    /**
     * метод для проверки данных форм
     */
    public static function validateForm(){
        // создаем массивы для ошибок и для введеных клиентом данных
        $errors = [];
        $input = [];

        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));

        /**
         * проверка логина И пароля
         */
        $loginError = self::validateLogin($input['login']);
        if($loginError) {// если логин неверен
            $errors['login'] = $loginError;
        } else {
            // если логин верен, проверяем пароль
            $passwordError = self::validatePassword($input['password'], $input['login']);
            if($passwordError){
                $errors['password'] = $passwordError;
            }
        }

        return [$errors, $input];
    }
    
    /**
     * метод при успешной проверке данных при входе
     */

    public static function processForm($input){

        // получаем данные о пользователе для записи в сессию
        $userInfo = Users::getUserInfo($input['login']);
        // DBConnect::d($userInfo);

        // запись данных в сессию
        session_start();
        $_SESSION['userId'] = $userInfo['userId'];
        $_SESSION['login'] = $userInfo['login'];
        $_SESSION['firstName'] = $userInfo['first_name'];

        // на главную
        header('Location: /');
    }

    /**
     * проверка емейла перед восстановлением пароля
     */
    public static function validateResetForm($email){
        $errors = [];
        $input = [];

        $input['email'] = htmlspecialchars(trim($_POST['email']));


        // проверка емейла
        $regExp = "/^.+@.+\..+$/i";
        if(strlen($email) === 0) { // если строка пуста
            $emailError = 'Введите адрес электронной почты';
        } else if(!preg_match($regExp, $email)){ // если строка НЕ соотвуетствует РВ (рег. выражению)
            $emailError = 'Адрес электронной почты введен в неверном формате';
        }

        // проверка на уникальность
        $rows = Users::checkEmailUnique($email);
        if($rows === 0){
            $emailError = 'Указанный емейл не найден';
        }

        if(isset($emailError)){
            $errors['email'] = $emailError;
        }

        return [$errors, $input];
    } // validateResetForm($email)

    public static function processResetForm($input){

        // получаем данные о пользователе для записи в сессию
        list($newPasswordCrypted, $newPassword) = Users::resetUserPasswordByEmail($input);

        $_POST['newPassword'] = $newPassword;
        
        // $_POST['newPassword'] = 
        // // запись данных в сессию
        // session_start();
        // $_SESSION['userId'] = $userInfo['userId'];
        // $_SESSION['login'] = $userInfo['login'];
        // $_SESSION['firstName'] = $userInfo['first_name'];

        // // на главную
        // header('Location: /?reset-password');
    }
}

?>