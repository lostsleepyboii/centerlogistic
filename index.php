<?php 
  get_header();
?>
  <main class="main">
    <section class="intro">
      <div class="intro-slider  swiper-container">
        <div class="intro-slider__list  swiper-wrapper">
          <?php 
            // параметры по умолчанию
            $posts = get_posts( array(
              'numberposts' => -1,
              'category_name' => 'slider',
              'orderby'     => 'date',
              'order'       => 'ASC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
                ?>
                  <div class="intro-slider__item  swiper-slide">
                    <picture>
                      <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/photo-bg-1.webp" type="image/webp"> -->
                      <?php 
                        $image = get_field('slider-img');
                        if (!empty($image)) {
                        ?>
                          <img 
                          class="lazy" 
                          src="/" 
                          data-src="<?php echo $image['url']; ?>" 
                          alt="<?php echo $image['alt']; ?>" 
                          width="<?php echo $image['width']; ?>" 
                          height="<?php echo $image['height']; ?>">
                        <?php
                        }
                      ?>
                    </picture>
                  </div>
                <?php
            }

            wp_reset_postdata(); // сброс
          ?>
        </div>
      </div>
      <div class="container">
        <div class="intro__inner">
          <div class="callback-form  callback-form--home">
            <div class="callback-form__header">
              <h2 class="callback-form__title"><?php the_field('form-title') ?></h2>
              <p class="callback-form__desc"><?php the_field('form-desc') ?></p>
            </div>
            <?php echo do_shortcode('[contact-form-7 class="callback-form__content" id="179" title="Обратный звонок"]') ?>
          </div>
          <div class="intro-slider__nav">
            <button class="intro-slider__btn  intro-slider__btn--prev  swiper-button-prev" aria-label="Prev"></button>
            <button class="intro-slider__btn  intro-slider__btn--next  swiper-button-next" aria-label="Next"></button>
          </div>
          <div class="intro__content">
            <span class="intro__subtitle"><?php the_field('intro-subtitle') ?></span>
            <h1 class="intro__title"><?php the_field('intro-title') ?></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="services" id="services" data-scroll="services">
      <div class="container">
        <ul class="services__list">
          <?php 
            // параметры по умолчанию
            $posts = get_posts( array(
              'numberposts' => 4,
              'category_name' => 'services',
              'orderby'     => 'date',
              'order'       => 'ASC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
                ?>
                  <li class="services-item" data-aos="fade-up" data-aos-delay="50">
                    <h3 class="services-item__title"><?php the_title(); ?></h3>
                    <?php 
                      $content = get_the_content();
                      $trimmed_content = wp_trim_words( $content, 20, '');
                    ?>
                    <p class="services-item__desc"><?php echo $trimmed_content; ?></p>
                    <a href="<?php the_permalink(); ?>" class="services-item__link">Learn more</a>
                  </li>
                <?php
            }

            wp_reset_postdata(); // сброс
          ?>
          <h2 class="services__title"><?php the_field('services-title') ?></h2>
        </ul>
      </div>
    </section>
    <section class="clients" id="clients" data-scroll="clients">
      <div class="container">
        <h2 class="clients__title"><span><?php the_field('clients-title-blue') ?></span> <?php the_field('clients-title') ?></h2>
        <div class="clients__inner">
          <ul class="clients__list  lazy-bg" data-aos="fade-up">
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/atica.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-atica');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/hex-lab.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-hexlab');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/amara.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-amara');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/muzica.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-muzica');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/solaytic.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-solaytic');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/hexa.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-hexa');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/utosia.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-utosia');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
            <li class="clients__item">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/fox-hub.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('clients-foxhub');
                  if (!empty($image)) {
                ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                <?php
                }
                ?>
              </picture>
            </li>
          </ul>
          <div class="clients__reviews  reviews  swiper-container" data-aos="fade-up" data-aos-delay="200">
            <div class="reviews__list  swiper-wrapper">
              <?php 
                // параметры по умолчанию
                $posts = get_posts( array(
                  'numberposts' => -1,
                  'category_name' => 'reviews',
                  'orderby'     => 'date',
                  'order'       => 'ASC',
                  'post_type'   => 'post',
                  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                  setup_postdata($post);
                    ?>
                      <div class="reviews__item  review-item  swiper-slide  lazy-bg">
                        <div class="review-item__header">
                          <picture>
                            <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/avatar.webp" type="image/webp"> -->
                            <?php 
                              $image = get_field('reviews-img');
                              if (!empty($image)) {
                              ?>
                                <img 
                                class="review-item__avatar  lazy" 
                                src="/" 
                                data-src="<?php echo $image['url']; ?>" 
                                alt="<?php echo $image['alt']; ?>" 
                                width="100" 
                                height="100">
                              <?php
                              }
                            ?>
                          </picture>
                          <div class="review-item__title">
                            <cite class="review-item__author"><?php the_title(); ?></cite>
                            <span class="review-item__subtitle"><?php the_field('reviews-subtitle'); ?></span>
                          </div>
                        </div>
                        <blockquote class="review-item__text">
                          <?php the_field('reviews-text'); ?>
                        </blockquote>
                      </div>
                    <?php
                }

                wp_reset_postdata(); // сброс
              ?>
            </div>
            <div class="reviews__pagination swiper-pagination"></div>
          </div>
        </div>
        <div class="clients__footer  lazy-bg" data-aos="fade-up">
          <button type="button" class="btn" data-modal="modal-callback">Become a client</button>
          <span class="clients__text">we love our clients</span>
        </div>
      </div>
    </section>
    <section class="advges" id="advges" data-scroll="advges">
      <div class="container">
        <h2 class="visually-hidden"><?php the_field('advges') ?></h2>
        <div class="advges__inner">
          <ul class="advges__list  lazy-bg">
            <li class="advges__item  advges-item" data-aos="fade-up">
              <h3 class="advges-item__title"><?php the_field('advges-title-1') ?></h3>
              <p class="advges-item__desc"><?php the_field('advges-1') ?></p>
            </li>
            <li class="advges__item  advges-item" data-aos="fade-up">
              <h3 class="advges-item__title"><?php the_field('advges-title-2') ?></h3>
              <p class="advges-item__desc"><?php the_field('advges-2') ?></p>
            </li>
            <li class="advges__item  advges-item" data-aos="fade-up">
              <h3 class="advges-item__title"><?php the_field('advges-title-3') ?></h3>
              <p class="advges-item__desc"><?php the_field('advges-3') ?></p>
            </li>
            <li class="advges__item  advges-item" data-aos="fade-up">
              <h3 class="advges-item__title"><?php the_field('advges-title-4') ?></h3>
              <p class="advges-item__desc"><?php the_field('advges-4') ?></p>
            </li>
          </ul>
          <picture data-aos="fade-up">
            <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/about.webp" type="image/webp"> -->
            <?php 
                  $image = get_field('advges-img');
                  if (!empty($image)) {
                  ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                  <?php
                }
            ?>
          </picture>
        </div>
      </div>
    </section>
    <section class="team" id="team" data-scroll="team">
      <div class="container">
        <h2 class="team__title"><span><?php the_field('team-title-blue') ?></span> <?php the_field('team-title') ?></h2>
        <ul class="team__list">
          <li class="team__item  team-item" data-aos="fade-up" data-aos-delay="50">
            <div class="team-item__img">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/team-1.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('team-photo-1');
                  if (!empty($image)) {
                  ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                  <?php
                }
            ?>
              </picture>
            </div>
            <h3 class="team-item__name"><?php the_field('team-name-1') ?></h3>
            <p class="team-item__desc"><?php the_field('team-work-1') ?></p>
            <a href="mailto:<?php the_field('team-mail-1') ?>" class="team-item__link  team-item__link--email  lazy-bg"><?php the_field('team-mail-1') ?></a>
            <a href="tel:<?php the_field('team-phone-1') ?>" class="team-item__link  team-item__link--phone  lazy-bg"><?php the_field('team-phone-1') ?></a>
          </li>
          <li class="team__item  team-item" data-aos="fade-up" data-aos-delay="150">
            <div class="team-item__img">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/team-2.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('team-photo-2');
                  if (!empty($image)) {
                  ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                  <?php
                }
            ?>
              </picture>
            </div>
            <h3 class="team-item__name"><?php the_field('team-name-2') ?></h3>
            <p class="team-item__desc"><?php the_field('team-work-2') ?></p>
            <a href="mailto:<?php the_field('team-mail-2') ?>" class="team-item__link  team-item__link--email  lazy-bg"><?php the_field('team-mail-2') ?></a>
            <a href="tel:<?php the_field('team-phone-2') ?>" class="team-item__link  team-item__link--phone  lazy-bg"><?php the_field('team-phone-2') ?></a>
          </li>
          <li class="team__item  team-item" data-aos="fade-up" data-aos-delay="250">
            <div class="team-item__img">
              <picture>
                <!-- <source srcset="/" data-srcset="<?php echo bloginfo('template_url'); ?>/assets/img/team-3.webp" type="image/webp"> -->
                <?php 
                  $image = get_field('team-photo-3');
                  if (!empty($image)) {
                  ?>
                  <img 
                  class="lazy" 
                  src="/" 
                  data-src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  width="<?php echo $image['width']; ?>" 
                  height="<?php echo $image['height']; ?>">
                  <?php
                }
            ?>
              </picture>
            </div>
            <h3 class="team-item__name"><?php the_field('team-name-3') ?></h3>
            <p class="team-item__desc"><?php the_field('team-work-3') ?></p>
            <a href="mailto:<?php the_field('team-mail-3') ?>" class="team-item__link  team-item__link--email  lazy-bg"><?php the_field('team-mail-3') ?></a>
            <a href="tel:<?php the_field('team-phone-3') ?>" class="team-item__link  team-item__link--phone  lazy-bg"><?php the_field('team-phone-3') ?></a>
          </li>
        </ul>
      </div>
    </section>
    <section class="mission" id="mission" data-scroll="mission">
      <h2 class="mission__title"><?php the_field('mission-title') ?></h2>
      <div class="container">
        <div class="mission__inner">
          <div class="mission__info">
            <p class="mission__name"><?php the_field('mission-inner-title') ?></p>
            <p class="mission__subname"><?php the_field('mission-inner-subtitle') ?></p>
          </div>
          <button type="button" class="btn" data-modal="modal-callback">Become a client</button>
        </div>
      </div>
    </section>
    <section class="pre-blog" id="pre-blog" data-scroll="pre-blog">
      <div class="container">
        <h2 class="pre-blog__title"><span><?php the_field('pre-blog-title-blue') ?></span> <?php the_field('pre-blog-title') ?></h2>
        <div class="pre-blog__inner">
          <div class="pre-blog__list  pre-blog__list--home">
            <?php 
              // параметры по умолчанию
              $posts = get_posts( array(
                'numberposts' => 2,
                'category_name'    => 'post',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts as $post ){
                setup_postdata($post);
                  ?>
                    <article class="pre-blog__post  pre-blog-post" data-aos="fade-up">
                      <a href="<?php the_permalink(); ?>"><h3 class="pre-blog-post__title"><?php the_title(); ?></h3></a>
                      <?php 
                        $content = get_the_content();
                        $trimmed_content = wp_trim_words( $content, 50, '');
                      ?>
                      <p class="pre-blog-post__desc"><?php echo $trimmed_content; ?></p>
                      <a href="<?php the_permalink(); ?>"><time class="pre-blog-post__date" datetime="<?php echo get_the_date('Y-j-n'); ?>"><?php echo get_the_date('j F, Y'); ?></time></a>
                    </article>
                  <?php  
              }

              wp_reset_postdata(); // сброс
            ?>
          </div>
          <a class="btn" href="<?php echo get_page_link(184); ?>">Visit blog</a>
        </div>
      </div>
    </section>
  </main>
<?php 
  get_footer();
?>