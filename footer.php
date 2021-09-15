<footer class="footer">
  <div class="footer__container container">
    <div class="footer__item-container">

      <div class="footer__item contacts">
        <h5 class="footer__item-title">Контактная информация</h5>
        <a href="<?php the_field('e-mail') ?>" class="footer__link e-mail"><img src="<?php bloginfo('template_url'); ?>/assets/img/e-mail.webp"><?php the_field('e-mail') ?></a>
        <a href="<?php the_field('tell') ?>" class="footer__link tell"><img src="<?php bloginfo('template_url'); ?>/assets/img/call.webp"><?php the_field('tell') ?></a>
        <a href="#" class="footer__link adres"><img src="<?php bloginfo('template_url'); ?>/assets/img/placeholder.webp"><?php the_field('adres') ?></a>
      </div>

      <div class="footer__item">
        <h5 class="footer__item-title">Основные ссылки</h5>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Главная</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Наши проекты</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Наши услуги</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Контакты</a>
      </div>

      <div class="footer__item">
        <h5 class="footer__item-title">Наши проекты</h5>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">РосНано</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Сколково</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Проект "Восток"</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">ТЕЦ Калининграда</a>
      </div>

      <div class="footer__item">
        <h5 class="footer__item-title">Социальные сети</h5>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">VK.com</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Instagram</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Facebook</a>
        <a href="#" class="footer__link"><img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.webp">Twitter</a>
      </div>

    </div>

    <hr>

    <div class="copyright">
      <p>&copy; 2019 Все права защищены.</p>
    </div>

  </div>
</footer>

    </div>
    <?php wp_footer(); ?>
</body>

</html>