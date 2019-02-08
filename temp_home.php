<?php
	/*
		template name: Página inicial
	*/
?>


<?php get_header('home'); ?>

<!-- Container -->
  <div class="container">

    <div class="row-fluid">

    <?php

      $postsEmDestaque = get_option('sticky_posts');

      $query = new WP_Query([
        'posts_per_pege' => 4,
        'post__in' => $postsEmDestaque
      ]);

      if(isset($postsEmDestaque[0])) :
    ?>

      <!-- Posts -->
      <div class="col-sm-12 blog-main blog-posts" itemscope itemtype="http://schema.org/Article">
        <h2 class="blog-main-title">Posts em Destaque</h2>
        <!-- post -->
        <?php while($query->have_posts()) : $query->the_post(); ?>
          <article class="row-fluid posts col-md-3" role="article">
            <h2 itemprop="name" class="posts-title"><a href="#"><?php the_title(); ?></a></h2>
            <p class="muted">
              <span>Publicado em</span>
              <a rel="bookmark" title="" href=""><span class="entry-date" itemprop="datePublished">
                  <?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>
              </span></a>
            </p>
            <p><?php the_excerpt(); ?></p>
            <p class="muted">
              <span>Categoria</span>
              <?php the_category(', ') ?>
            </p>
          </article>
        <?php endwhile; ?>
        <!--/post -->
      </div>
      <!-- Posts -->

    <?php endif; ?>

      <!-- Cursos -->
      <div class="col-sm-12 blog-main blog-cursos" itemscope itemtype="http://schema.org/Article">
        <h2 class="blog-main-title">Cursos</h2>
        <!-- post -->
        <?php 
          $cursos = new WP_Query([
            'posts_per_page' => 6,
            'post_type' => 'cursos'
          ]);

          while($cursos->have_posts()) : $cursos->the_post();
        ?>
          <article class="row-fluid cursos col-md-2 col-sm-3 text-center" role="article">
            <a href="#">
              <div class="cursos-img">
                <?php the_post_thumbnail('curso-miniatura'); ?>
              </div>
              <h2 itemprop="name" class="cursos-title"><?php the_title(); ?></h2>
            </a>
          </article>
        <?php endwhile; ?>
        <!--/post -->
      </div>
      <!-- Cursos -->
      
    </div>
  </div>

<?php get_footer(); ?>