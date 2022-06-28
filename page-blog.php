<?php
/*
Template Name: Блог
*/
?>

<?php
  get_header();
?>

<main class="main">
  <section class="blog">
    <h1 class="visually-hidden"><?php the_title(); ?></h1>
    <div class="blog__img">
      <picture>
        <!-- <source srcset="/" data-srcset="img/photo-bg-2.webp" type="image/webp"> -->
        <?php 
          $image = get_field('blog-img');
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
    <div class="container">
      <div class="blog__inner">
        <section class="pre-blog  pre-blog--blog">
          <div class="container">
            <h2 class="pre-blog__title"><span class="pre-blog__title--blue"><?php the_field('blog-title-blue') ?></span> <?php the_field('blog-title') ?></h2>
            <div class="pre-blog__inner">
              <div class="pre-blog__list">
                <?php 
                  // параметры по умолчанию
                  $posts = get_posts( array(
                    'numberposts' => 4,
                    'category_name'    => 'post',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                  ) );

                  foreach( $posts as $post ){
                    setup_postdata($post);
                      ?>
                        <article class="pre-blog__post  pre-blog-post">
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
              <a href="<?php echo home_url(); ?>" class="btn">Back to home</a>
            </div>
          </div>
        </section>
        <aside class="callback-form  callback-form--blog">
          <div class="callback-form__header">
            <h2 class="callback-form__title"><?php the_field('form-title', 2) ?></h2>
            <p class="callback-form__desc"><?php the_field('form-desc', 2) ?></p>
          </div>
          <?php echo do_shortcode('[contact-form-7 class="callback-form__content" id="179" title="Обратный звонок"]') ?>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php
  get_footer();
?>