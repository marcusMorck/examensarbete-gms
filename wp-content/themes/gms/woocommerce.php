<?php

get_header();

?>
    <main>
        <div class="main-content">
<div class="content">
<div class="sidebar">
    <div class="sidebar-title">
        Alla kategorier
    </div>
    <nav>
        <?php wp_nav_menu( array( 'product-menu' => 'product-menu' ) ); ?>
    </nav>
</div>

<?php
woocommerce_content();
?>
</div>
  </main>
</div>
<?php
get_footer();

?>