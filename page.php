<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="inner-banner background-lazy" data-src="<?= assets('images/banner-bg2.webp') ?>">
            <div class="container h-100 d-flex align-items-center">
                <div class="inner-banner__text">
                    <h1><?php the_title(''); ?></h1>
                </div>
            </div>
        </div>

        <div class="container pt-3 pb-3">
            <?php the_content(''); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>