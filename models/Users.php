<?php
// модель для работы с пользователем
require_once 'DBConnect.php';

class Users
{
    /**
     * проверка логина на уникальность
     */
    public static function checkLoginUnique($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT login
                    FROM users
                    WHERE login = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);
        return $statement->rowCount();
    }

    /**
     * проверка емейла на уникальность
     */
    public static function checkEmailUnique($email){
        $pdo = DBConnect::getConnection();

        $query = "SELECT email
                    FROM users
                    WHERE email = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);
        return $statement->rowCount();
    }

    /**
     * добавление нового пользователя
     */
    public static function addNewUser($input){
        $pdo = DBConnect::getConnection();
        $query = "INSERT INTO users(login, first_name, last_name, email, password)
                        VALUES(?, ?, ?, ?, ?);";
        $statement = $pdo->prepare($query);
        $statement->execute([$input['login'], $input['first_name'], $input['last_name'], $input['email'], $input['password']]);

        return $pdo->lastInsertId();// получаем ID добавленного в БД пользователя
    }

    /**
     * получение пароля по логину клиента
     */
    public static function getPasswordByLogin($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT password
                    FROM users
                    WHERE login = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);

        return $statement->fetch()['password'];
    }

    /**
     * получение данных о пользователе
     */
    public static function getUserInfo($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT id as userId, login, first_name, last_name, email, add_date
                    FROM users
                    WHERE login = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);

        return $statement->fetch();
    }

    /**
     * восстановление пароля пользователя по емейлу
     */
    public static function resetUserPasswordByEmail($email){
        $pdo = DBConnect::getConnection();

        $passwordToShuffle = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

        $newPassword = substr(str_shuffle($passwordToShuffle), 0, 10);

        $newPasswordCrypted = password_hash($newPassword, PASSWORD_DEFAULT);

        $query = "UPDATE users
                    SET password = ?
                    WHERE email = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([strval($newPasswordCrypted), $email]);
        return [$newPasswordCrypted, $newPassword];
    }
}