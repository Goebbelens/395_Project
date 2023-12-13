<?php
    require 'components/header.php';
?>

<div class="main-content">
    <div class="registration-page">

        <h3 class="registration-title">Восстановление пароля по email</h3>
        <form class="auth-form" method = "POST">

            <!-- Логин -->
            <div class="input-form">
                <label>Введите указанный ранее email:</label>
                <input type="email" name="email" placeholder = "example@test.ru" value = "<?=$input['email'] ?? ''?>">
                <span class = "input-error"><?=$errors['email'] ?? ''?></span>
            </div>

            <!-- Кнопка отправки -->
            <div class="input-form">
                <input class="input-form-submit" type="submit" value="Восстановить пароль">
            </div>
            
        </form>

    </div>
</div>

<?php
    require 'components/footer.php';
?>