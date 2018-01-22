<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head() ?>
    </head>
    <body>
        <header>
            <div class="responsive-menu">
                <div class="hamburger-menu">
                    <i class="fa fa-bars fa-1x" aria-hidden="true"></i>
                </div>
                <div class="logo">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="shopping-cart">
                    <i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                </div>
                <div class="options">
                    <i class="fa fa-ellipsis-v fa-1x" aria-hidden="true"></i>

                </div>
            </div>
        </header>



