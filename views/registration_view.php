<?php
    require 'components/header.php';

    print_r($_POST);
?>

<div class="main-content">
    <div class="registration-page">
        <h3 class="registration-title">Регистрация</h3>
        <form class="auth-form" method = "POST">
            <!-- Емейл -->
            <div class="input-form">
                <label>Введите адрес электронной почты:</label>
                <input type="email" name="email" placeholder = "example@test.ru">
            </div>
            
            <!-- Логин -->
            <div class="input-form">
                <label>Введите логин:</label>
                <input type="text" name="login" placeholder = "Не менее 3 символов латиницы и цифр">
            </div>

            <!-- Пароль -->
            <div class="input-form">
                <label>Введите пароль:</label>
                <input type="password" name="password" placeholder = "Не менее 8 символов">
            </div>

            <!-- Имя -->
            <div class="input-form">
                <label>Введите ваше имя:</label>
                <input type="text" name="first_name" placeholder = "Не менее 2 букв, только кириллица">
            </div>

            <!-- Имя -->
            <div class="input-form">
                <label>Введите вашу фамилию:</label>
                <input type="text" name="last_name" placeholder = "Не менее 2 букв, только кириллица">
            </div>

            <!-- Кнопка отправки -->
            <div class="input-form">
                <input class="input-form-submit" type="submit" value="Зарегистрироваться">
            </div>
        </form>
    </div>
</div>

<?php
    require 'components/footer.php';
?>