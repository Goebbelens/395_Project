<?php
    require 'components/header.php';
?>

<div class="main-content">
    <div class="registration-page">

        <h3 class="registration-title">Новый пароль!</h3>
        <div class="new-password-page">
            <h5>Для вас был создан новый пароль</h5>
            <h2 class="new-pass"><?= $_POST['newPassword'] ?></h2>
            <h5>Не забудьте его поменять</h5>
        </div>

    </div>
</div>

<?php
    require 'components/footer.php';
?>