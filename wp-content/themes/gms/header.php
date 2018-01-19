<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head() ?>
    </head>
    <body>
        <header>
                <div class="logo">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="search-bar">
                    <?php get_product_search_form();?>
                </div>
                <div class="shopping-cart">
                    <?php global $woocommerce; ?>
                    <a href="<?php echo wc_get_cart_url(); ?>">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <?php echo $woocommerce->cart->get_cart_total(); ?>
                    <?php echo $woocommerce->cart->get_cart_contents_count(); ?>
                    </a>
                    <!--
                    <a href="<?php //echo wc_get_cart_url(); ?>">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <?php //echo WC()->cart->get_cart_contents_count() ?></a>-->
                </div>

        </header>



