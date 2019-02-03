<?php 
get_header();
/*
  Template Name: Sem sidebar
*/
?>

 <!-- Container -->
  <div class="container">

    <div class="row-fluid">

      <!-- Posts -->
      <div class="col-sm-12 blog-main" itemscope itemtype="http://schema.org/Article">

        <?php get_template_part('includes/pagina', 'unica'); 
        ?>

      </div>
      <!-- Posts -->

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>