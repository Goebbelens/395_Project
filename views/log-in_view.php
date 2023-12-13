<?php
    require 'components/header.php';
?>

<div class="main-content">
    <div class="registration-page">
        <h3 class="registration-title">Регистрация</h3>
        <form class="auth-form" method = "POST">

            <!-- Логин -->
            <div class="input-form">
                <label>Введите логин:</label>
                <input type="text" name="login" placeholder = "Не менее 3 символов латиницы и цифр" value = "<?=$input['login'] ?? ''?>">
                <span class = "input-error"><?=$errors['login'] ?? ''?></span>
            </div>

            <!-- Пароль -->
            <div class="input-form">
                <label>Введите пароль:</label>
                <input type="password" name="password" placeholder = "Не менее 8 символов">
                <span class = "input-error"><?=$errors['password'] ?? ''?></span>
                <a class = 'reset-password-link' href="/?reset-password">Восстановить пароль</a>
            </div>

            <!-- Кнопка отправки -->
            <div class="input-form">
                <input class="input-form-submit" type="submit" value="Войти">
            </div>
            
        </form>
    </div>
</div>

<?php
    require 'components/footer.php';
?>