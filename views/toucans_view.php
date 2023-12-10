<?php
    require 'components/header.php';
    require 'models/Images.php';

    $images = Images::getImages($specie);
    print_r($images);
?>

<div class="main-content">
    <div class="gallery">
        <?php foreach($images as $image): ?>
        <div class = "gallery-img-container">
            <img src="<?=$image['image_path']?>" alt="<?=$specie?>" class="gallery-img">
        </div>
        <?php endforeach; ?>
        
        <!-- <img src="/img/toucans/andres-rodriguez-lOHHRPJ0Mds-unsplash.jpg" alt="<?=$specie?>" class="gallery-img"> -->
    </div>
</div>

<?php
    require 'components/footer.php';
?>