    <?php if(isset($_SESSION['userId'])): ?>

    <div class="auth-header">
        <div class="auth-link-container auth-exit">
            <a href="/?cabinet=<?=$_SESSION['userId']?>" class="auth-link auth-left-link"><?=$_SESSION['login']?></a>
            <a href="/?exit" class="auth-link auth-right-link">Выход</a>
        </div>
    </div>

    <?php else: ?>

    <div class="auth-header">
        <div class="auth-link-container">
            <a href="/?log-in" class="auth-link auth-left-link">Вход</a>
            <a href="/?registration" class="auth-link auth-right-link">Регистрация</a>
        </div>
    </div>

    <?php endif; ?>