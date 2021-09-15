<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!--Font-->
    <title><?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper" style="
        background-image: url(<?php the_field('background') ?>);
        background-position-x: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;">

        <header class="header">
            <div class="header__container container">

                <div class="header__menu menu">
                    <div class="menu__icon icon-menu" id="menu__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="menu__body" id="menu__body">
                        <ul class="menu__list">
                            <li><a href="#" class="menu__link">Главная</a></li>
                            <li><a href="#" class="menu__link">Наши проекты</a></li>
                            <li><a href="#" class="menu__link">Услуги</a></li>
                            <li><a href="#" class="menu__link">Новости</a></li>
                            <li><a href="#" class="menu__link">Контакты</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>