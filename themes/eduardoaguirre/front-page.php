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
            $news_posts = inhabitent_get_latest_posts('post', 1);
            if (!empty($news_posts)) :
            ?>

                <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
                    <div class="about">
                        <img class="profile-pic" src="<?php echo get_template_directory_uri() ?>/assets/profile-pic.png" />
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