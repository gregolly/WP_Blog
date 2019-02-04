<footer class="rodape well">
    <div class="container">
      <div class="col-md-6 col-sm-4">
        <div class="container-facebook">
          <div class="fb-like-box" data-href="https://www.facebook.com/TreinaWeb"  data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Cursos</h4>
        <ol class="list-unstyled">
          <li><a href="#">Título do curso</a></li>
          <li><a href="#">Título do curso</a></li>
          <li><a href="#">Título do curso</a></li>
          <li><a href="#">Título do curso</a></li>
          <li><a href="#">Título do curso</a></li>
          <li><a href="#">Título do curso</a></li>
        </ol>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Menu</h4>

        <?php wp_nav_menu([
							'theme_location' => 'twmenu-rodape',
							'container' => 'ul',
							'menu_class' => 'list-unstyled'
						]); ?>
      </div>
        <div class="rodape-copyright text-center">
        <hr>
            <p>&copy; TreinaWeb Cursos 2015</p>
            <img src="images/android.png" alt="">
        </div>
    </div>
</footer>
	
<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script> -->
<div id="fb-root"></div>
         <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <?php wp_footer(); ?>
</body>
</html>  
