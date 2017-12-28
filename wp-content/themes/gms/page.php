<?php

get_header(); ?>

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

        $product_categories = get_terms( 'product_cat', $cat_args );

        if( !empty($product_categories) ){


            foreach ($product_categories as $key => $category) {
                echo $category->name;


            }
        }

        wc_get_template( 'single-product/title.php' );

?>
</main>

<?php get_footer(); ?>
