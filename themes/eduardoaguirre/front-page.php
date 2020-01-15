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

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="thumbnail-wrapper">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="about">
                        <?php the_title(sprintf('<h3 class="about-title">', esc_url(get_permalink())), '</h3>'); ?>
                        <?php the_content('<p class="about-content"></p>') ?>
                    </div>


                <?php endforeach;
                wp_reset_postdata(); ?>

            <?php endif; ?>
        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>