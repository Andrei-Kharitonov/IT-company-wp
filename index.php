<?php get_header(); ?>
        <main class="page">

            <div class="first-screen">
                <div class="first-screen__container container">
                    <span class="first-screen__subtitle"><?php the_field('first-screen__subtitle') ?></span>
                    <h1 class="first-screen__title title"><?php the_field('first-screen__title') ?></h1>
                    <a href="#" class="first-screen__btn btn">Наши проекты</a>
                </div>
            </div>

            <section class="services">
                <div class="services__container container">
                    <div class="services__header">
                        <h2 class="services__title title"><?php the_field('services__title') ?></h2>
                        <p class="services__text text"><?php the_field('services__text') ?></p>
                    </div>
                    <div class="services__item-container">
                        <div class="services__item services-item">
                            <div class="services-item__img">
                                <img src="<?php the_field('services-item__img_1') ?>" alt="">
                            </div>
                            <div class="services-item__content">
                                <h3 class="services-item__title"><?php the_field('services-item__title_1') ?></h3>
                                <p class="services-item__text text"><?php the_field('services-item__text_1') ?></p>
                            </div>
                        </div>
                        <div class="services__item services-item">
                            <div class="services-item__img">
                                <img src="<?php the_field('services-item__img_2') ?>" alt="">
                            </div>
                            <div class="services-item__content">
                                <h3 class="services-item__title"><?php the_field('services-item__title_2') ?></h3>
                                <p class="services-item__text text"><?php the_field('services-item__text_2') ?></p>
                            </div>
                        </div>
                        <div class="services__item services-item">
                            <div class="services-item__img">
                                <img src="<?php the_field('services-item__img_3') ?>" alt="">
                            </div>
                            <div class="services-item__content">
                                <h3 class="services-item__title"><?php the_field('services-item__title_3') ?></h3>
                                <p class="services-item__text text"><?php the_field('services-item__text_3') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="services__btn">
                        <a href="#" class="btn">Все услуги</a>
                    </div>
                </div>
            </section>

            <section class="about-us">
                <div class="about-us__container container">
                    <div class="about-us__inner">
                        <div class="about-us__content">
                            <h2 class="about-us__title title"><?php the_field('about-us__title') ?></h2>
                            <p class="about-us__text text"><?php the_field('about-us__text') ?></p>
                            <a href="#" class="about-us__link link">Подробнее о компании</a>
                        </div>
                        <div class="about-us__img">
                            <img src="<?php the_field('about-us__img') ?>" alt="">
                        </div>
                    </div>
                    <hr>
                    <div class="about-us__item-container">
                        <div class="about-us__item">
                            <div class="about-us__item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/about-us-icon.webp" alt="">
                            </div>
                            <span class="about-us__item-num">125</span>
                            <p class="about-us__item-text text">Our projects</p>
                        </div>
                        <div class="about-us__item">
                            <div class="about-us__item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/about-us-icon.webp" alt="">
                            </div>
                            <span class="about-us__item-num">125</span>
                            <p class="about-us__item-text text">Our projects</p>
                        </div>
                        <div class="about-us__item">
                            <div class="about-us__item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/about-us-icon.webp" alt="">
                            </div>
                            <span class="about-us__item-num">125</span>
                            <p class="about-us__item-text text">Our projects</p>
                        </div>
                        <div class="about-us__item">
                            <div class="about-us__item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/about-us-icon.webp" alt="">
                            </div>
                            <span class="about-us__item-num">125</span>
                            <p class="about-us__item-text text">Our projects</p>
                        </div>
                        <div class="about-us__item">
                            <div class="about-us__item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/about-us-icon.webp" alt="">
                            </div>
                            <span class="about-us__item-num">125</span>
                            <p class="about-us__item-text text">Our projects</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="all-services">
                <div class="all-services__container">
                    <div class="all-services__header container">
                        <h2 class="all-services__title title"><?php the_field('all-services__title') ?></h2>
                        <a href="#" class="all-services__btn btn">Все услуги</a>
                    </div>
                    <div class="all-services__item-container container">
                        <div class="all-services__item all-services-item">
                            <div class="all-services-item__img">
                                <img src="<?php the_field('all-services-item__img_1') ?>" alt="">
                            </div>
                            <h4 class="all-services-item__title"><span>01. </span><?php the_field('all-services-item__title_1') ?></h4>
                            <p class="all-services-item__text text"><?php the_field('all-services-item__text_1') ?></p>
                            <a href="<?php the_field('all-services-item__link_1') ?>" class="all-services-item__link link">Подробнее</a>
                        </div>
                        <div class="all-services__item all-services-item">
                            <div class="all-services-item__img">
                                <img src="<?php the_field('all-services-item__img_2') ?>" alt="">
                            </div>
                            <h4 class="all-services-item__title"><span>02. </span><?php the_field('all-services-item__title_2') ?></h4>
                            <p class="all-services-item__text text"><?php the_field('all-services-item__text_2') ?></p>
                            <a href="<?php the_field('all-services-item__link_2') ?>" class="all-services-item__link link">Подробнее</a>
                        </div>
                        <div class="all-services__item all-services-item">
                            <div class="all-services-item__img">
                                <img src="<?php the_field('all-services-item__img_3') ?>" alt="">
                            </div>
                            <h4 class="all-services-item__title"><span>03. </span><?php the_field('all-services-item__title_3') ?></h4>
                            <p class="all-services-item__text text"><?php the_field('all-services-item__text_3') ?></p>
                            <a href="<?php the_field('all-services-item__link_3') ?>" class="all-services-item__link link">Подробнее</a>
                        </div>
                    </div>
                    <div class="container">
                        <hr>
                    </div>
                </div>
            </section>

            <section class="projects">
                <div class="projects__container container">
                    <div class="projects__header">
                        <h2 class="projects__title title"><?php the_field('projects__title') ?></h2>
                        <p class="projects__text text"><?php the_field('projects__text') ?></p>
                    </div>
                    <div class="projects__gallery gallery">

                    <?php
                    $featured_posts = get_field('gallery__img'); 
                    if( $featured_posts ): ?> 
                        
                        <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
                            <div class="gallery__img">
                                <img src="<?php the_field('project__img') ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                        
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    </div>
                    <a href="#" class="projects__btn btn">Все проекты</a>
                </div>
            </section>

            <section class="video">
                <div class="video__container container">
                    <div class="video__header">
                        <h2 class="video__title title"><?php the_field('video__title') ?></h2>
                        <p class="video__text text"><?php the_field('video__text') ?></p>
                    </div>
                    <div class="video__window" style="background-image: url(<?php the_field('video__window') ?>);
                                                        background-position: center;                                                       
                                                        background-repeat: no-repeat;">
                        <a href="<?php the_field('video__btn') ?>" class="video__btn">
                            <div class="btn__play">
                                <div class="btn__icon"></div>
                            </div>
                            <p>Смотреть видео</p>
                        </a>
                    </div>
                    <hr>
                </div>
            </section>

            <section class="subcribe">
                <div class="subcribe__container container">
                    <div class="subcribe__header">
                        <h3 class="subcribe__title">Подпишитесь на нашу рассылку</h3>
                        <p class="subcribe__text text">Полезные статьи, акции, новости - получите все это сейчас!</p>
                    </div>
                    <form action="" class="subcribe__form sub-form">
                        <input type="email" class="sub-form__input" placeholder="Ваш e-mail">
                        <button type="submit" class="sub-form__btn">Подписаться</button>
                    </form>
                    <p class="subcribe__description">Мы не шлем спам, и передаем никому ваши данные.</p>
                </div>
            </section>

        </main>
<?php get_footer(); ?>