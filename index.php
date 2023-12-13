<?php


if(!empty($_GET)) {
    $specie = htmlspecialchars(array_keys($_GET)[0]);
    switch(array_keys($_GET)[0]) {
        case ('toucans'): 
            $title = 'Туканы';
            $animalDescTitle = "Тука́новые (лат. Ramphastidae)";
            $animalDesc = "Cемейство птиц отряда дятлообразные. У туканов несоразмерно большой, сжатый с боков, ярко окрашенный клюв. Однако сам клюв, несмотря на свои размеры, сравнительно лёгок, из-за его пористой структуры. Самые крупные представители отряда дятлообразных. Насчитывают около 40 видов птиц, объединяемых в 6 родов.<br><br>

            Тукановые населяют равнинные и горные (до 3000 м) тропические леса Америки от южной Мексики до северной Аргентины. Гнездятся в естественных или выдолбленных дятлами дуплах.<br><br>
            
            Своё название эти птицы получили из-за того, что представители одного из их видов кричат «токано!» в разных тонах.";
            $wikiLink = "https://ru.wikipedia.org/wiki/%D0%A2%D1%83%D0%BA%D0%B0%D0%BD%D0%BE%D0%B2%D1%8B%D0%B5";
            require 'views/category_view.php';
            break;
        case ('orangutans'): 
            $title = 'Орангутаны';
            $animalDescTitle = "Орангута́ны (орангута́нги, малайск. orang utan — лесной человек, лат. Pongo)";
            $animalDesc = "Род древесных человекообразных обезьян, один из наиболее близких к человеку по гомологии ДНК.<br><br>

            Орангутаны — единственный современный род в подсемействе Понгины, к вымершим родам которого относятся гигантопитеки (Gigantopithecus) и сивапитеки (Sivapithecus). Ранее орангутаны обитали по всей Юго-Восточной Азии, а в наши дни только на Калимантане и Суматре.<br><br>
            
            По некоторым данным орангутан считается самым умным животным после человека.";
            $wikiLink = "https://ru.wikipedia.org/wiki/%D0%9E%D1%80%D0%B0%D0%BD%D0%B3%D1%83%D1%82%D0%B0%D0%BD%D1%8B";
            require 'views/category_view.php';
            break;
        case ('iguanas'): 
            $title = 'Игуаны';
            $animalDescTitle = "Обыкнове́нная игуана, или зелёная игуа́на (лат. Iguana iguana)";
            $animalDesc = "Крупная растительноядная ящерица семейства игуановых, ведущая дневной древесный образ жизни. Обитает в Центральной и Южной Америке. Первоначальный природный ареал охватывает значительную территорию от Мексики на юг до южной Бразилии и Парагвая, а также острова Карибского моря. Кроме того, несколько популяций, предками которых были домашние питомцы, образовались в некоторых районах США: на юге Флориды (включая острова Флорида-Кис), на Гавайских островах и в долине реки Рио-Гранде в Техасе. <br><br>

            Длина тела от носа до кончика хвоста у взрослых особей обычно не превышает 1,5 м, хотя в истории известны отдельные особи длиной более 2 м и весом свыше 8 кг. Благодаря яркой расцветке, спокойному нраву и уживчивости, обыкновенных игуан часто разводят и содержат в помещениях как домашних животных. Тем не менее их содержание требует правильного и тщательного ухода, среди требований — специально оборудованный террариум с изобилием пространства, поддержание приемлемых влажности, температуры и освещённости.";
            $wikiLink = "https://ru.wikipedia.org/wiki/%D0%9E%D0%B1%D1%8B%D0%BA%D0%BD%D0%BE%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F_%D0%B8%D0%B3%D1%83%D0%B0%D0%BD%D0%B0";
            require 'views/category_view.php';
            break;
        case ('parrots'): 
            $title = 'Попугаи';
            $animalDescTitle = "Попугаеобра́зные (лат. Psittaciformes)";
            $animalDesc = "Отряд птиц из инфракласса новонёбных. Отряд состоит примерно из 398 видов, принадлежащих к 92 родам. Известны с миоцена.";
            $wikiLink = "https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BF%D1%83%D0%B3%D0%B0%D0%B5%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BD%D1%8B%D0%B5";
            require 'views/category_view.php';
            break;
        case ('bats'): 
            $title = 'Летучие мыши';
            $animalDescTitle = "Лету́чие мы́ши (лат. Microchiroptera)";
            $animalDesc = "Обобщающее название для представителей отряда рукокрылых за исключением крыланов. Летучих мышей долго рассматривали как подотряд, пока по кариологическим и молекулярно-генетическим данным не было показано, что эта группа парафилетична: представители надсемейства Rhinolophoidea более родственны крыланам, чем прочим летучим мышам. Тем не менее в русскоязычной научной и научно-популярной литературе название продолжают использовать в прежнем значении. Фактически под это название попадают представители 6 семейств, относящихся к Rhinolophoidea, и 14 семейств, ныне объединяемых в подотряд Yangochiroptera; также летучими мышами называют представителей ископаемых семейств отряда, некоторые из которых, по-видимому, древнее, чем разделение ныне живущих групп, включая крыланов.";
            $wikiLink = "https://ru.wikipedia.org/wiki/%D0%9B%D0%B5%D1%82%D1%83%D1%87%D0%B8%D0%B5_%D0%BC%D1%8B%D1%88%D0%B8";
            require 'views/category_view.php';
            break;
        case ('favourite'): 
            $title = 'Избранное';
            $animalDescTitle = "Избранные изображения";
            $animalDesc = "";
            $wikiLink = "";
            $wikiText = "";
            require 'views/category_view.php';
            break;
        case ('log-in'):
            $title = 'Вход';
            require 'models/Users.php';
            require 'core/SignIn.php';

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                // 1. получаем данные, проверяем
                list($errors, $input) = SignIn::validateForm();
                // DBConnect::d($errors);
                // DBConnect::d($input);

                if($errors){
                    // 2. если ошибки есть, показываем форму и отображаем ошибки и ранее введенные данные
                    require 'views/log-in_view.php';
                } else {
                    // 3. если всё ок, то записываем данные в БД
                    SignIn::processForm($input);
                }
            } else {
                require 'views/log-in_view.php';
            }
            break;
        case ('reset-password'):
            $title = 'Восстановление пароля';
            require 'models/Users.php';
            require 'core/SignIn.php';

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                // 1. получаем данные, проверяем
                list($errors, $input) = SignIn::validateResetForm($_POST['email']);
                // DBConnect::d($errors);
                // DBConnect::d($input);

                if($errors){
                    // 2. если ошибки есть, показываем форму и отображаем ошибки и ранее введенные данные
                    require 'views/reset-password_view.php';
                } else {
                    // 3. если всё ок, то записываем данные в БД
                    SignIn::processResetForm($input);
                    DBConnect::d($_POST);
                    require 'views/new-password_view.php';
                }
            } else {
                require 'views/reset-password_view.php';
            }
            break;
        case ('registration'):
            $title = 'Регистрация';

            require 'models/Users.php';
            require_once 'core/SignUp.php';

            // если отправлена форма регистрации
            if($_SERVER['REQUEST_METHOD'] === "POST"){

                // 1. получаем данные, проверяем
                list($errors, $input) = SignUp::validateForm();
                // DBConnect::d($errors);
                // DBConnect::d($input);

                if($errors){
                    // 2. если ошибки есть, показываем форму и отображаем ошибки и ранее введенные данные
                    require 'views/registration_view.php';
                } else {
                    // 3. если всё ок, то записываем данные в БД
                    SignUp::processForm($input);
                }
            } else {
                require 'views/registration_view.php';
            }
            break;
        case ('cabinet'):
            $title = 'Личный кабинет';
            require 'models/Users.php';
            session_start();
            // получение инфы о клиенте
            $userInfo = Users::getUserInfo($_SESSION['login']);

            require 'views/cabinet_view.php';
            
            break;
        case ('exit'):
            session_start();
            session_unset();
            header('Location: /');
            break;
        default:
            $title = 'Здесь пусто!';
            require 'views/empty_view.php';
    }
} else {
    $title = 'Главная страница';
    require 'views/index_view.php';
}