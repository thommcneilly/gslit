<?php get_header(); ?>

 

    

		<div class="single">

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

         

        

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 

                <?php the_post_thumbnail(); ?>

                <?php the_content(); ?>

 

                <p class="button_gray">

                 <?php edit_post_link('Quick Edit',''); ?>

                </p>

 



 

<?php endwhile; ?>



 

<?php endif; ?>

</div>


<div class="sidewrap"><?php $sidebar = get_post_meta($post->ID, "sidebar", true);
get_sidebar($sidebar);
?></div>

<?php get_footer(); ?>



 

