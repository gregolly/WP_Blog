
<?php while(have_posts()) : the_post(); ?>
<!-- post -->
<article class="row-fluid posts" role="article">
          <h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="muted">
            <span>Publicado em</span>
            <a rel="bookmark" title="" href=""><span class="entry-date" itemprop="datePublished"><?php the_time('d/m/y'); ?></span></a>
          </p>
          <p><?php the_content(); ?></p>
          <p class="muted">
            <span>Categoria</span>
            <?php the_category(', '); ?>
          </p>
</article>

        <!--/post -->

<div>
  <a href="<?php comments_link(); ?>" target="_blank" rel="noopener noreferrer">
    <?php comments_number('Sem comentários', 'Um comentário', '% comentários'); ?>
  </a>
  <?php comments_template(); ?>
</div>

<?php endwhile; ?>