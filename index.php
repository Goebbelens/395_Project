<?php


if(!empty($_GET)) {
    switch(array_keys($_GET)[0]) {
        case ('toucans'): 
            $title = 'Туканы | D-Gallery';
            $specie = htmlspecialchars(array_keys($_GET)[0]);
            require 'views/toucans_view.php';
            break;
        case ('orangutans'): 
            $title = 'Орангутаны | D-Gallery';
            $specie = htmlspecialchars(array_keys($_GET)[0]);
            require 'views/orangutans_view.php';
            break;
    }
    // if(array_keys($_GET)[0] === 'toucans'){
    //     $title = 'Туканы | D-Gallery';
    //     $specie = array_keys($_GET)[0];
    //     require 'views/toucans_view.php';
    // } else {

    // }
} else {
    $title = 'Главная страница | D-Gallery';
    require 'views/index_view.php';
}