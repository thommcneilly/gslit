<?php get_header(); ?>
 
    

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
        
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="entry">  
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
 
                <p class="postmetadata">
                 <?php edit_post_link('Edit',''); ?>
                </p>
 

 
<?php endwhile; ?>

 
<?php endif; ?>

<?php get_footer(); ?>

 
