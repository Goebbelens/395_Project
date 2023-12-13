<?php
    require 'components/header.php';
    require 'models/Images.php';

    $images = Images::getImages($specie);
?>

<div class="main-content">
    <div class="animal-desc-container">
        <h3 class = "animal-desc-head"><?=$animalDescTitle ?? 'Заглавие описания отсутствует' ?></h3>
        <p class = "animal-desc-par"><?=$animalDesc ?? 'Описание еще не добавлено' ?></p>
        <a href="<?=$wikiLink ?? 'https://www.google.ru/'?>" class = "animal-desc-link"><?=$wikiText ?? 'Википедия'?></a>
    </div>
    <div class="gallery">

        <?php foreach($images as $image): ?>

        <div class = "gallery-img-container">
            <img src="<?=$image['image_path']?>" alt="<?=$specie?>" class="gallery-img">
        </div>
        
        <?php endforeach; ?>

    </div>
</div>

<?php
    require 'components/footer.php';
?>