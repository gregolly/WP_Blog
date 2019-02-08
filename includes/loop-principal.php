
<?php while(have_posts()) : the_post(); ?>
<!-- post -->
<?php if(get_post_format() == 'aside') : ?>
<article class="row-fluid posts" role="article" style="background-color: grey;">
<?php else : ?>
<article class="row-fluid posts" role="article" style="background-color: grey;">
<?php endif; ?>
          <h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="muted">
            <span>Publicado em</span>
            <a rel="bookmark" title="" href=""><span class="entry-date" itemprop="datePublished"><?php the_time('d/m/y'); ?></span></a>
          </p>
          <!-- <?php //if(is_single()) : ?>
            <p><?php //the_content(); ?></p>
            <?php //else :?>
            <p><?php //the_excerpt(); ?></p>
          <?php //endif; ?>  -->
          <?php the_excerpt(); ?>
          <p class="muted">
            <span>Categoria</span>
            <?php the_category(', '); ?>
          </p>
</article>


        <!--/post -->

<?php endwhile; ?>

<?php //previous_posts_link('<< Novos   Posts'); 
if (function_exists('wp_bootstrap_pagination') ) wp_bootstrap_pagination();
?> 
<!--next_posts_link('Posts Antigos >>');  -->