<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--	--><?php //the_title( '<h1 class="page-title">', '</h1>' ); ?>

	<div class="ic-price__top">
<!--		--><?php //the_content(); ?>

        <div class="ic-price__top-wrapper">
            <div class="ic-price__top-item">
                <?php if ( get_field('pricing_top_title') ) {?>
                    <h1 class="ic-price__main-title"><?php echo get_field('pricing_top_title'); ?></h1>
                <?php } ?>
            </div>
        </div>

        <div class="ic-price__cf7-wrapper">
            <?php if ( get_field('pricing_top_form') ) {
                $p_shortcode = get_field('pricing_top_form'); ?>
                <div class="ic-form__cf7form"><?php echo do_shortcode($p_shortcode); ?></div>
            <?php } ?>
        </div>
    </div>

    <div class="ic-price-info page-container-wide">

        <ul id="tabs" class="ic-price-info__tabs">
            <li><a id="tab1"><?php echo get_field('tab_title_monthly'); ?></a></li>
            <li><a id="tab2"><?php echo get_field('tab_title_yearly'); ?></a></li>
        </ul>

        <div class="ic-price-info_container container" id="tab1C">

            <?php if( have_rows("monthly_price") ): ?>
                <?php while( have_rows('monthly_price') ): the_row(); ?>
                    <div class="ic-price-info__column">
                        <h3 class="ic-price-info__title">
                            <?php echo get_sub_field('monthly_price_title'); ?>
                        </h3>
                        <div class="ic-price-info__product-price">
                            <div class="ic-price-info__sum"><?php echo get_sub_field('monthly_price_sum1'); ?></div>
                            <div class="ic-price-info__desc"><?php echo get_sub_field('monthly_price_desc'); ?></div>
                        </div>


                        <div class="data-text-wrapper">
                            <div class="ic-btn__try-btn">
                                <?php $monthly_price_try_link = get_sub_field('monthly_price_try_link'); ?>
                                    <a href="<?php echo $monthly_price_try_link; ?>">
                                <?php echo get_sub_field('monthly_price_try'); ?>
                                </a>
                            </div>

                            <div class="ic-price-data">
                                <?php while( have_rows('mp_product_features') ): the_row(); ?>
                                    <?php if ( get_sub_field('mp_product_features_item') ) {?>
                                        <div class="ic-price__features">
                                            <?php echo get_sub_field('mp_product_features_item'); ?>
                                        </div>
                                    <?php } ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>
        <div class="ic-price-info_container container" id="tab2C">
            <?php if( have_rows("yearly_price") ): ?>
                <?php while( have_rows('yearly_price') ): the_row(); ?>
                    <div class="ic-price-info__column">
                        <h3 class="ic-price-info__title">
                            <?php echo get_sub_field('yearly_price_title'); ?>
                        </h3>
                        <div class="ic-price-info__product-price">
                            <div class="ic-price-info__sum"><?php echo get_sub_field('yearly_price_sum1'); ?></div>
                            <div class="ic-price-info__desc"><?php echo get_sub_field('yearly_price_desc'); ?></div>
                        </div>

                        <div class="data-text-wrapper">
                            <div class="ic-btn__try-btn">
                                <?php $year_price_try_link = get_sub_field('yearly_price_try-link'); ?>
                                <a href="<?php echo $year_price_try_link; ?>">
                                    <?php echo get_sub_field('yearly_price_try'); ?>
                                </a>
                            </div>

                            <div class="ic-price-data">
                                <?php while( have_rows('yearly_product_features') ): the_row(); ?>
                                    <?php if ( get_sub_field('yearly_product_features_item') ) {?>
                                        <div class="ic-price__features">
                                            <?php echo get_sub_field('yearly_product_features_item'); ?>
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

    <div class="ic-price-guarantee">

        <div class="ic-price-guarantee_wrapper">
            <div class="ic-price-guarantee_content">
                <?php if ( get_field('mb_small_title') ) { ?>
                <div class="guarantee_content__small-title"> <?php echo get_field('mb_small_title'); ?> </div>
                <?php } ?>

                <?php if ( get_field('mb_big_title') ) { ?>
                <h2 class="guarantee_content__big-title"> <?php echo get_field('mb_big_title'); ?> </h2>
                <?php } ?>

                <?php if ( get_field('mb_text') ) { ?>
                <div class="guarantee_content__text"> <?php echo get_field('mb_text'); ?> </div>
                <?php } ?>
            </div>
        </div>

        <div class="ic-price-guarantee_wrapper-img">
            <?php  $link = get_field('mb_image');
            $url_mb_image = $link['url']; ?>
            <div class="ic-price-guarantee_img">
                <img src="<?php echo $url_mb_image; ?>" alt="image" />
            </div>

            <div class="ic-price-guarantee_img-block">
                <div class="guarantee_img-block__icon">
                    <img src="<?php echo get_template_directory_uri() ?>/src/assets/icons/thumb-up.svg">
                </div>

                <?php if ( get_field('mb_ guarantee') ) { ?>
                    <div class="ic-price-guarantee_img-text">
                        <?php echo get_field('mb_ guarantee'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>


</div>
