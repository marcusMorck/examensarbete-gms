<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head() ?>
    </head>
    <body>
    <div class="wrapper">
        <header>
            <div class="header-content">
                <div class="logo">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="search-bar">
                    <?php get_search_form( ); ?>
                </div>
                <div class="shopping-cart">
                    shopping cart
                </div>
            </div>
        </header>


                <!--<header>
                    <div class="header-content">
                    <div class="logo">
                        <?php
                /*
                            if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            }
                        ?>
                    </div>
                    <div class="search-bar">
                        <?php get_search_form( ); */?>
            </div>
            <div class="shopping-cart">
                shopping cart
            </div>
            </div>
        </header>-->




