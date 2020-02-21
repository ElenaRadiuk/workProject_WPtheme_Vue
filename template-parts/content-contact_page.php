<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--	--><?php //the_title( '<h1 class="page-title">', '</h1>' ); ?>

	<div class="ic-contact">
<!--		--><?php //the_content(); ?>

        <div class="ic-contact__top-wrapper">
            <div class="ic-contact__top-item">
                <?php if ( get_field('main_title') ) {?>
                    <h1 class="ic-contact__main-title"><?php echo get_field('main_title'); ?></h1>
                <?php } ?>
                <?php if ( get_field('main_top_text') ) {?>
                    <div class="ic-contact__main-text">
                        <?php echo get_field('main_top_text'); ?>

                    <div class="ic-arrow"><img src="<?php echo get_template_directory_uri() ?>/src/assets/images/arrow-right.svg"> </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="ic-contact__cf7-wrapper">
            <?php if ( get_field('main_top_text') ) {
                $shortcode = get_field('shortcode_for_form'); ?>
                <div class="ic-form__cf7form"><?php echo do_shortcode($shortcode); ?></div>
            <?php } ?>
        </div>
    </div>

    <div class="ic-contact-info">

        <div class="ic-contact-info__inner page-container-wide">
        <?php if( have_rows("contact_info_section1") ): ?>

        <?php while( have_rows('contact_info_section1') ): the_row(); ?>
        <div class="ic-contact-info__column">
            <h3 class="ic-contact-info__title">
                <?php echo get_sub_field('c-title'); ?>
            </h3>


            <div class="data-text-wrapper">
                <div class="ic-contact-info__text">
                    <?php echo get_sub_field('c-text'); ?>
                </div>

                <div class="ic-contact-data">
                <?php while( have_rows('c-data') ): the_row(); ?>
                    <?php if ( get_sub_field('c-data-item') ) {?>
                    <div class="ic-contact-datareg">
                        <?php echo get_sub_field('c-data-item'); ?>
                    </div>
                    <?php } ?>

                    <?php if ( get_sub_field('c-data-item_big') ) {?>
                    <div class="ic-contact-databig">
                        <?php echo get_sub_field('c-data-item_big'); ?>
                    </div>
                    <?php } ?>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>
        </div>
    </div>

    <div class="ic-contact-map  page-container-wide">
        <div class="ic-contact-map__embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2572.8126130450473!2d18.283956815709594!3d49.84597837939649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713e32110546515%3A0x520b39bbe65760cc!2zU29rb2xza8OhIHTFmS4sIDcwMiAwMCBNb3JhdnNrw6EgT3N0cmF2YSBhIFDFmcOtdm96LCBDemVjaGlh!5e0!3m2!1sen!2sua!4v1574079232249!5m2!1sen!2sua" width="976" height="555" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <div class="ic-contact-map__address">
            <div class="ic-contact-map__block">
                <?php if ( get_field('our_address_title') ) { ?>
                    <h3 class="ic-contact-map__title"><?php echo get_field('our_address_title'); ?></h3>
                <?php } ?>

                <?php if ( get_field('main_top_text') ) { ?>
                    <div class="ic-contact-map__text"><?php echo get_field('our_address_text'); ?></div>
                <?php } ?>
            </div>

        </div>

    </div>


</article>
