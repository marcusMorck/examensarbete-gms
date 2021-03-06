<?php
/*
Template Name: varukorg-template
 */
get_header();
?>
<main>
    <div class="main-content">
        <div class="content">
                <?php while (have_posts()) : the_post(); ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->
        <?php endwhile; // End of the loop. .?>
        <?php

        //while ( have_posts() ) : the_post();
        //endwhile;
        $orderby = 'name';
        $order = 'asc';
        $hide_empty = false;
        $cat_args = array(
            'orderby' => $orderby,
            'order' => $order,
            'hide_empty' => $hide_empty,
        );
        ?>

        <?php
        $product_categories = get_terms('product_cat', $cat_args);

        if (!empty($product_categories)) {
            ?>
            <?php
            foreach ($product_categories as $key => $category) {
                echo $category->name;

            }
        }

        ?>

    </div>

</div>

</main>
<?php
get_footer();?>