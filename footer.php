  <footer class="footer  lazy-bg">
    <div class="container">
      <div class="footer__inner">
        <a href="<?php echo get_home_url(); ?>">
          <img class="logo" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-black.svg" alt="Center Logistic">
        </a>
        <div class="footer__contacts">
          <address class="footer__address"><?php the_field('address', 2) ?></address>
          <p class="footer__text">
            Call us: <a class="footer__text  footer__text--link" href="tel:<?php the_field('phone', 2) ?>"><?php the_field('phone', 2) ?></a> or E-mail: <a class="footer__text  footer__text--link" href="mailto:<?php the_field('mail', 2) ?>"><?php the_field('mail', 2) ?></a>
          </p>
        </div>
        <div class="footer__nav">
          <?php 
            $footerMenu = array(
                'menu' => 'Footer', 
                'container' => false,
                'echo' => '',
                'items_wrap' => '%3$s',
                'depth' => 1
            );
            echo strip_tags( wp_nav_menu( $footerMenu ), '<a>' );
          ?>
        </div>
      </div>
    </div>
  </footer>
  <section class="modal" id="modal-callback">
    <div class="modal__content">
      <button class="modal-close" type="button" aria-label="Close Window"></button>
      <div class="modal__inner">
        <div class="modal__header">
          <h2 class="modal__title"><?php the_field('modal-callback-title', 2) ?></h2>
          <p class="modal__subtitle"><?php the_field('modal-callback-desc', 2) ?></p>
        </div>
        <div class="modal__form">
          <?php echo do_shortcode('[contact-form-7 id="219" title="Обратный звонок (модальное окно)"]') ?>
        </div>
        <div class="modal__footer">
          <h3 class="modal__name"><?php the_field('modal-footer-title', 2) ?></h3>
          <ul class="modal__list">
            <li class="modal__item">
              <?php the_field('address', 2) ?>
            </li>
            <li class="modal__item">
              Phone: <a class="modal__link" href="tel:<?php the_field('phone', 2) ?>"><?php the_field('phone', 2) ?></a>
            </li>
            <li class="modal__item">
              E-mail: <a class="modal__link" href="mailto:<?php the_field('mail', 2) ?>"><?php the_field('mail', 2) ?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="modal" id="modal-thanks">
    <div class="modal__content">
      <button class="modal-close" type="button" aria-label="Close Window"></button>
      <div class="modal__inner">
        <div class="modal__body">
          <?php 
            $image = get_field('modal-thanks-img', 2);
            if (!empty($image)) {
            ?>
              <img 
              class="lazy  modal__icon" 
              src="<?php echo $image['url']; ?>" 
              alt="<?php echo $image['alt']; ?>" 
              width="<?php echo $image['width']; ?>" 
              height="<?php echo $image['height']; ?>">
            <?php
            }
          ?>
          <h2 class="modal__title"><?php the_field('modal-thanks-title', 2) ?></h2>
          <p class="modal__subtitle"><?php the_field('modal-thanks-desc', 2) ?></p>
        </div>
        <div class="modal__footer">
          <h3 class="modal__name"><?php the_field('modal-footer-title', 2) ?></h3>
          <ul class="modal__list">
            <li class="modal__item">
              <?php the_field('address', 2) ?>
            </li>
            <li class="modal__item">
              Phone: <a class="modal__link" href="tel:<?php the_field('phone', 2) ?>"><?php the_field('phone', 2) ?></a>
            </li>
            <li class="modal__item">
              E-mail: <a class="modal__link" href="mailto:<?php the_field('mail', 2) ?>"><?php the_field('mail', 2) ?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php 
    wp_footer();
  ?>
</body>
</html>