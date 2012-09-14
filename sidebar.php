<div class="sidebar">
	<?php
      $catposts = get_posts('numberposts=5&category_name=Services');
      foreach($catposts as $post) :
   ?>
<section class="side-container">
   <h4>
   	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h4>
   <?php the_post_thumbnail(); ?>
	<?php the_excerpt(); ?>
	<div class="more">
	<a href="<?php the_permalink(); ?>">Find Out More...</a></div>

</section>
   <?php endforeach; ?>
</div>
