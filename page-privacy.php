<?php
/*
Template Name: Политика конфиденциальности
*/
?>

<?php
  get_header();
?>

<main class="main">
  <section class="page">
    <h1 class="visually-hidden"><?php the_title(); ?></h1>
    <div class="page__img">
      <picture>
        <!-- <source srcset="/" data-srcset="img/photo-bg-3.webp" type="image/webp"> -->
        <?php 
          $image = get_field('privacy-img');
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
      <article class="page-content">
          <h2 class="page__title"><span><?php the_field('privacy-title-blue') ?></span> <?php the_field('privacy-title') ?></h2>
          <div class="page-content__inner">
            <?php the_content(); ?>
          </div>
          <a href="<?php echo home_url(); ?>" class="btn">Back to home</a>
      </article>
    </div>
  </section>
</main>

<?php
  get_footer();
?>