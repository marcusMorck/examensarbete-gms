<?php

get_header(); ?>

<div class="content">
    <div class="sidebar">
        <div class="sidebar-title">
            Alla kategorier
        </div>
        <nav>
            <?php wp_nav_menu( array( 'product-menu' => 'product-menu' ) ); ?>
        </nav>
    </div>
    <main>
        this is main
    </main>
</div>
<!--<main>
    <article>Article</article>
    <nav>Nav</nav>
    <aside>Aside</aside>
</main>

-->


<!--
<div class="content">
<div class="sidebar">
    <nav>

        <?php wp_nav_menu( array( 'product-menu' => 'product-menu' ) ); ?>
    </nav>
</div>
<main>
    <?php

    //while ( have_posts() ) : the_post();
    //endwhile;
    $orderby = 'name';
    $order = 'asc';
    $hide_empty = false ;
    $cat_args = array(
        'orderby'    => $orderby,
        'order'      => $order,
        'hide_empty' => $hide_empty,
    );
    ?>

    <?php
    $product_categories = get_terms( 'product_cat', $cat_args );

    if( !empty($product_categories) ){
        ?>
        <?php
        foreach ($product_categories as $key => $category) {
            echo $category->name;

        }
    }

    wc_get_template( 'single-product/title.php' );

    ?>
</main>
<!--
    <div class="content">

        <main>
            <?php
/*
            //while ( have_posts() ) : the_post();
            //endwhile;
            $orderby = 'name';
            $order = 'asc';
            $hide_empty = false ;
            $cat_args = array(
                'orderby'    => $orderby,
                'order'      => $order,
                'hide_empty' => $hide_empty,
            );
            ?>

            <?php
            $product_categories = get_terms( 'product_cat', $cat_args );

            if( !empty($product_categories) ){
                ?>
                <?php
                foreach ($product_categories as $key => $category) {
                    echo $category->name;

                }
            }

            wc_get_template( 'single-product/title.php' );
*/
            ?>
        </main>
    </div>
</div>-->



<?php get_footer(); ?>
