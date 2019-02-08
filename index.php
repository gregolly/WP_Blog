<?php get_header(); ?>

 <!-- Container -->
  <div class="container">

    <div class="row-fluid">

      <!-- Posts -->
      <?php if (is_active_sidebar('tw-sidebar')) : ?>
        <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">
      <?php else : ?> 
        <div class="col-sm-12 blog-main" itemscope itemtype="http://schema.org/Article">
      <?php endif;?>

        <?php get_template_part('includes/loop', 'principal'); ?>

      </div>
      <!-- Posts -->

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>