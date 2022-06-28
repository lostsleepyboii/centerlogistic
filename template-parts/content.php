<section class="page">
    <h1 class="visually-hidden"><?php the_title(); ?></h1>
    <div class="page__img">
        <picture>
        <!-- <source srcset="/" data-srcset="img/photo-bg-3.webp" type="image/webp"> -->
            <img class="lazy" src="/" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="1300" height="350">
        </picture>
    </div>
    <div class="container">
        <article id="post-<?php the_ID(); ?>" class="page-content">
            <h2 class="page__title"><?php the_title(); ?></h2>
            <div class="page-content__inner">
            <?php
                the_content( sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mir' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ) );
            ?>
            </div>
            <a href="<?php echo home_url(); ?>" class="btn">Back to home</a>
        </article>
    </div>
</section>