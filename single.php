<?php get_header(); ?>

 <!-- Container -->
  <div class="container">

    <div class="row-fluid">

      <!-- Posts -->
      <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">

        <h1>Post único</h1>

        <?php get_template_part('includes/post', 'unico'); ?>

      </div>
      <!-- Posts -->

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>