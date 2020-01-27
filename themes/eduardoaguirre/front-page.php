<?php

/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">



        <div class="front-container">
            <?php
            $news_posts =get_posts_categories('post', 'front-page');
            if (!empty($news_posts)) :
            ?>

                <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
                    <div class="about">
                        <img class="profile-pic" alt="Eduardo Aguirre massage Whistler" src="<?php echo get_template_directory_uri() ?>/assets/eduardo_aguirre_massage_whistler.png" />
                        <?php the_title(sprintf('<h3 class="about-title">', esc_url(get_permalink())), '</h3>'); ?>
                        <div class="about-content"> <?php the_content() ?></div>

                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>

            <?php endif; ?>
        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>