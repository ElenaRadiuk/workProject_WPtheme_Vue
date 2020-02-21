<?php
/**
 * WordPress Template Name: Pricing
 *
 **/
?>
<?php get_header(); ?>

    <main id="main" class="page-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'pricing_page' ); ?>

        <?php endwhile; ?>

    </main>

<?php get_footer(); ?>
