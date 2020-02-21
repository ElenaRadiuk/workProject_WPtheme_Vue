<?php
/**
 * WordPress Template Name: Contact
 *
 **/
?>
<?php get_header('social'); ?>

	<main id="main" class="page-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'contact_page' ); ?>

		<?php endwhile; ?>

	</main>

<?php get_footer(); ?>
