<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<section class="ic-hometop_top">

        <div class="ic-hometop_wrapper">
            <div class="ic-home_content">
                <?php if ( get_field('hp_top_title') ) { ?>
                    <h1 class="ic-home_content__big-title"> <?php echo get_field('hp_top_title'); ?> </h1>
                <?php } ?>

                <?php if ( get_field('hp_top_text') ) { ?>
                    <div class="ic-home_content__text"> <?php echo get_field('hp_top_text'); ?> </div>
                <?php } ?>

                <a href=" <?php echo get_field('hp_top_contactus_link'); ?>" alt="top image" class="ic-home_content__link">
                    <span class="ic-home_content__link-text"><?php echo get_field('hp_top_contactus_text'); ?></span>
                    <span class="ic-arrow"><img src="<?php echo get_template_directory_uri() ?>/src/assets/images/arrow-right.svg"> </span>
                </a>
            </div>
        </div>

        <div class="ic-hometop_wrapper-img">
            <?php  $link = get_field('hp_top_image');
            $url_hp_image = $link['url']; ?>
            <div class="ic-home__img">
                <img src="<?php echo $url_hp_image; ?>" alt="image" />
            </div>

            <div class="ic-home__img-block-wrapper">
            <div class="ic-home__img-block">
                <div class="ic-home__block-items">
                    <div class="ic-home_img-block__icon icon-path">
                        <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/path.svg">
                    </div>
                    <?php if ( get_field('hp_box_image_item') ) { ?>
                        <div class="ic-home_img-block_img-text">
                            <?php echo get_field('hp_box_image_item'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="ic-home__block-items">
                    <div class="ic-home_img-block__icon icon-clock">
                        <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/clock.svg">
                    </div>
                    <?php if ( get_field('hp_box_image_item2') ) { ?>
                        <div class="ic-home_img-block_img-text">
                            <?php echo get_field('hp_box_image_item2'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="ic-home__block-items">
                    <div class="ic-home_img-block__icon icon-add">
                        <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/e-add.svg">
                    </div>
                    <?php if ( get_field('hp_box_image_item3') ) { ?>
                        <div class="ic-home_img-block_img-text">
                            <?php echo get_field('hp_box_image_item3'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>

    </section>


    <section class="ic-home-service page-container-wide">
        <div class="ic-home-service_wrapper-img">
            <?php  $link = get_field('hp_service_image');
            $url_hp_simage = $link['url']; ?>
            <div class="ic-home-service__img">
                <img src="<?php echo $url_hp_simage; ?>" alt="image service" />
            </div>

            <div class="ic-home-service__img-block-wrapper">
                <div class="ic-home-service__img-block">
                    <div class="ic-home-service_img-block__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/ic-timelapse-24-px.svg">
                    </div>
                    <div class="ic-home-service__block-items">
                        <?php if ( get_field('hp_service_green_title') ) { ?>
                            <div class="ic-home-service-block_img-text">
                                <div><?php echo get_field('hp_service_green_title'); ?></div>
                                <span><?php echo get_field('hp_service_green_subtitle'); ?></span>
                            </div>
                        <?php } ?>
                        <div class="ic-home-service-block__line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ic-home-service_wrapper">
            <div class="ic-home-service_content">
                <?php if ( get_field('hp_service_small_title') ) { ?>
                    <h4 class="ic-home-service_content__small-title"> <?php echo get_field('hp_service_small_title'); ?> </h4>
                <?php } ?>

                <?php if ( get_field('hp_service_gen_text') ) { ?>
                    <div class="ic-home-service_content__text"> <?php echo get_field('hp_service_gen_text'); ?> </div>
                <?php } ?>

                <?php if ( get_field('hp_service_small_text') ) { ?>
                    <div class="ic-home-service_content__smalltext"> <?php echo get_field('hp_service_small_text'); ?> </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <section class="ic-home-doc page-container-wide">
        <div class="ic-home-doc_wrapper-text">
            <div class="ic-home-doc_content">
                <?php if ( get_field('hp_doc_title') ) { ?>
                    <h1 class="ic-home-doc_content__big-title"> <?php echo get_field('hp_doc_title'); ?> </h1>
                <?php } ?>

                <?php if ( get_field('hp_top_text') ) { ?>
                    <div class="ic-home-doc_content__text">
                        <?php echo get_field('hp_doc_text'); ?>

                        <a href=" <?php echo get_field('hp_doc_link'); ?>" alt="top image" class="ic-home-doc_content__link">
                            <span class="ic-home-doc_content__link-text"><?php echo get_field('hp_doc_text_link'); ?></span>
                            <span class="ic-arrow"><img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/arrow-right-small.svg"> </span>
                        </a>

                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="ic-home-doc_wrapper-list">

            <div class="ic-home-doc_bg-block">

                <div class="ic-home-doc__list-block">

                    <?php if ( get_field('hp_doc_title_green') ) { ?>
                        <div class="ic-home-doc__item-title">
                            <div class="ic-home-doc_item__title">
                                <?php echo get_field('hp_doc_title_green'); ?>
                            </div>
                            <div class="ic-home-doc_item__icon-more">
                                <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/more.svg" class="item-icon">
                            </div>
                        </div>
                    <?php } ?>

                    <div class="ic-home-doc__item">
                        <div class="ic-home-doc_item__icon icon-path">
                            <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/paper-2.svg" class="item-icon">
                        </div>
                        <?php if ( get_field('hp_doc_commercial_list_text1') ) { ?>
                            <div class="ic-home-doc_item__text">
                                <?php echo get_field('hp_doc_commercial_list_text1'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="ic-home-doc__item">
                        <div class="ic-home-doc_item__icon icon-path">
                            <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/property-agreement.svg" class="item-icon">
                        </div>
                        <?php if ( get_field('hp_doc_commercial_list_text2') ) { ?>
                            <div class="ic-home-doc_item__text">
                                <?php echo get_field('hp_doc_commercial_list_text2'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="ic-home-doc__item">
                        <div class="ic-home-doc_item__icon icon-path">
                            <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/blueprint.svg" class="item-icon">
                        </div>
                        <?php if ( get_field('hp_doc_commercial_list_text3') ) { ?>
                            <div class="ic-home-doc_item__text">
                                <?php echo get_field('hp_doc_commercial_list_text3'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="ic-home-trust page-container-wide">

        <div class="ic-home-trust_first-column">

            <div class="ic-home-trust_bg-block">

                <?php if ( get_field('hp_trusted_greenblock-title') ) { ?>
                    <div class="ich-trust_green-block">
                        <div class="ich-trust_green-block__dots">
                            <?php for($i=1; $i<6; $i++) { ?>
                                <span class="ich-trust_green-block__dot"></span>
                            <?php }  ?>
                        </div>
                        <div class="ich-trust_green-block__title">
                            <?php echo get_field('hp_trusted_greenblock-title'); ?>
                        </div>
                        <div class="ich-trust_green-block__text">
                            <?php echo get_field('hp_trusted_greenblock-text'); ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="ich-trust_white-block-wrapper">
                <div class="ich-trust_white-block">
                    <div class="ich-trust_white__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/handshake.svg">
                    </div>
                    <div class="ich-trust_white__content">
                        <?php if ( get_field('hp_reliability_block_text') ) { ?>
                            <div class="ich-trust_white__text">
                                <div><?php echo get_field('hp_reliability_block_text'); ?></div>
                            </div>
                        <?php } ?>
                        <div class="ich-trust__line"></div>
                    </div>
                </div>
                </div>

            </div>
        </div>


        <div class="ic-home-trust_text-column">
            <div class="ic-home-trust_wrapper-text">
                <div class="ic-home-trust_content">
                    <?php if ( get_field('hp_doc_title') ) { ?>
                        <h1 class="ich-trust_content__big-title"> <?php echo get_field('hp_trusted_title'); ?> </h1>
                    <?php } ?>

                    <?php if ( get_field('hp_trusted_text') ) { ?>
                        <div class="ich-trust_content__text">
                            <?php echo get_field('hp_trusted_text'); ?>

                            <a href=" <?php echo get_field('hp_trusted_link_url'); ?>" alt="top image" class="ich-trust_content__link">
                                <span class="ich-trust_content__link-text"><?php echo get_field('hp_trusted_link_text'); ?></span>
                                <span class="ic-arrow"><img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/arrow-right-small.svg"> </span>
                            </a>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


    </section>



    <section class="ic-home-testimonials">
        <div class="ic-home-testimonials_wrapper-bg">
        <div class="ic-home-testimonials_wrapper">
            <div class="ic-home-testimonials_aside-info">
            <?php if ( get_field('testimonials_main_title') ) {  ?>
                <div class="testimonials__big-title"><?php echo get_field('testimonials_main_title'); ?> </div>
            <?php } ?>

            <?php if ( get_field('testimonials_main_text') ) {  ?>
                <div class="testimonials__description"><?php echo get_field('testimonials_main_text'); ?> </div>
            <?php } ?>
            </div>

            <?php if( have_rows("slider_with_testimonials") ): ?>
                <div class="testimonials-slider_main-wrapper">
                    <div class="slider-arrow_wrapper">
                        <div class="slider-arrow_row">
                            <div class="slider-arrow">
                                <span class="arrow arrow-left"></span>
                                <span class="arrow-text">Drag</span>
                                <span class="arrow arrow-right"></span>
                            </div>
                        </div>
                    </div>
                <div class="testimonials-slider_wrapper">
                <div class="testimonials-slider"  data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
                    <?php while( have_rows('slider_with_testimonials') ): the_row(); ?>
                        <div class="testimonials-slide">
                            <div class="testimonials-slide__text"><?php echo get_sub_field('testimonials_slide_text'); ?></div>
                            <div class="testimonials-slide__client-info">
                                <?php  $client_img_field = get_sub_field('testimonials_slide_img');
                                $client_img = $client_img_field['url']; ?>
                                <div class="testimonials-slide__client-img">
                                    <img src="<?php echo $client_img; ?>" alt="image client" />
                                </div>
                                <div class="testimonials-slide__client">
                                    <div class="testimonials-slide__client-name"><?php echo get_sub_field('testimonials_slide_client'); ?></div>
                                    <span class="testimonials-slide__pos"><?php echo get_sub_field('testimonials_slide_client_position'); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                </div>
                </div>
            <?php endif; ?>

        </div>
        </div>
    </section>



    <section class="ic-home-guarantee">

        <div class="ic-home-guarantee_wrapper">
            <div class="ic-home-guarantee_content">
                <?php if ( get_field('hpg_small_title') ) { ?>
                    <div class="guarantee_content__small-title"> <?php echo get_field('hpg_small_title'); ?> </div>
                <?php } ?>

                <?php if ( get_field('hpg_big_title') ) { ?>
                    <h2 class="guarantee_content__big-title"> <?php echo get_field('hpg_big_title'); ?> </h2>
                <?php } ?>

                <?php if ( get_field('hpg_text') ) { ?>
                    <div class="guarantee_content__text"> <?php echo get_field('hpg_text'); ?> </div>
                <?php } ?>
            </div>
        </div>

        <div class="ic-home-guarantee_wrapper-img">
            <?php  $link = get_field('hpg_guarantee_image');
            $url_g_image = $link['url']; ?>
            <div class="ic-home-guarantee_img">
                <img src="<?php echo $url_g_image; ?>" alt="image" class="guarantee_img"/>
            </div>

            <div class="ic-home-guarantee_img-block">
                <div class="guarantee_img-block__icon">
                    <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/thumb-up.svg" class="guarantee_icon">
                </div>

                <?php if ( get_field('hpg_guarantee') ) { ?>
                    <div class="ic-home-guarantee_img-text">
                        <?php echo get_field('hpg_guarantee'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>


    <section class="ic-home-contact page-container-wide">
        <div class="ic-home-contact__column-form column-contact">
            <div class="ic-price__cf7-wrapper">
                <?php if ( get_field('hpcf_contact_form') ) {
                    $hp_shortcode = get_field('hpcf_contact_form'); ?>
                    <div class="ic-home-form__cf7form"><?php echo do_shortcode($hp_shortcode); ?></div>
                <?php } ?>
            </div>
            <?php if ( get_field('hpcf_contact_form_info') ) { ?>
            <div class="ic-home-contact__cf7-info">
                <?php echo get_field('hpcf_contact_form_info'); ?>
            </div>
            <?php } ?>
        </div>

        <div class="ic-home-contact__column-text column-contact">
            <?php if ( get_field('hpcf_contact_form_info_big') ) { ?>
            <div class="ic-home-contact__big-text">
                <?php echo get_field('hpcf_contact_form_info_big'); ?>
            </div>
            <?php } ?>
        </div>

    </section>


</div>
