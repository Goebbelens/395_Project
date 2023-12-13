<?php
    require 'components/header.php';
?>

<div class="main-content">

    <div class="cabinet-info">
        <img class = "cabinet-image" src="img\default.png" alt="cabinet-image">
        <div class="cabinet-info-text">
            <p class = "cabinet-info-par">ID: <span><?=$userInfo['userId']?><span></p>
            <h4 class = "cabinet-info-par"><?=$userInfo['first_name']?> <?=$userInfo['last_name']?></h4>
            <p class = "cabinet-info-par">Логин: <span><?=$userInfo['login']?></span></p>
            <p class = "cabinet-info-par">Емейл: <span><?=$userInfo['email']?></span></p>
            <p class = "cabinet-info-par">Дата регистрации: <span><?=$userInfo['add_date']?></span></p>
            <a href="/?favourite" class="cabinet-info-par cabinet-favourite">Избранное</a>
        </div>
    </div>

</div>





<?php
    require 'components/footer.php';
?>