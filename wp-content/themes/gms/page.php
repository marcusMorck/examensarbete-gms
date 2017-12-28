<?php

get_header(); ?>

<main>
<?php

    //while ( have_posts() ) : the_post();

   echo "hi";
        $prod_cat_args = array(
            'taxonomy'     => 'product_cat', //woocommerce
            'orderby'      => 'name',
            'empty'        => 0
        );

        $woo_categories = get_categories( $prod_cat_args );

        foreach ( $woo_categories as $woo_cat ) {
            $woo_cat_id = $woo_cat->term_id; //category ID
            $woo_cat_name = $woo_cat->name; //category name
            $woo_cat_slug = $woo_cat->slug; //category slug

            echo 'prodname' . $woo_cat_name;
            // $return .= '<a href="' . get_term_link( $woo_cat_slug, 'product_cat' ) . '">' . $woo_cat_name . '</a>';
        }
    //endwhile;
?>
</main>

<?php get_footer(); ?>
