<?php

if (! is_active_sidebar('tw-sidebar')) {
	return;
}

?>


<!-- sidebar -->
<aside class="col-sm-3 col-xs-12 blog-sidebar well">

<ul class="list-unstyled">
  <?php dynamic_sidebar('tw-sidebar'); ?>
</ul>
</aside>
<!--/sidebar -->