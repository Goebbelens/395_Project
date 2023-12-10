<?php
    $logo = rand(1, 3);
    $logoPath = "img/logos/$logo.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? D-Gallery?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class = "header">
        <div class="logo-header">
            <img src="<?=$logoPath?>" alt="<?=$logo?>" class="logo-img">
            <p class="logo-name">D-Gallery</p>
        </div>
        <nav class = "nav-menu">
            <a href="/" class = "nav-par">Главная</a>
            <a href="/?toucans" class = "nav-par">Туканы</a>
            <a href="/?orangutans" class = "nav-par">Орангутаны</a>
            <a href="#" class = "nav-par">Игуаны</a>
            <a href="#" class = "nav-par">Попугаи</a>
            <a href="#" class = "nav-par">Летучие мыши</a>
        </nav>
    </header>