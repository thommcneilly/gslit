<?php get_header(); ?>

<div class="holder_content">
        
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        
<section class="top-posts">
        <a href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2></a>
         
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt(); ?> 
 
                
                <?php edit_post_link('Edit',''); ?>
                
 </section>
<?php endwhile; ?>

</div>



<div class="holder_content1">
 <section class="group4">
   <h3>How to...?</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
        Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
    <div class="pikachoose">
        <ul id="pikame" >
                <li><a href="#"><img src="img/picture1.jpg" width="#" height="#"  alt="picture"/></a><span>“Lorem ipsum dolor sit amet”</span></li>
                <li><a href="#"><img src="img/picture2.jpg" width="#" height="#" alt="picture"/></a><span>“Lorem ipsum dolor sit amet”</span></li>
                <li><a href="#"><img src="img/picture3.jpg" width="#" height="#" alt="picture"/></a><span>“Lorem ipsum dolor sit amet”</span></li>
           </ul>
       </div>

        </section>



 
<section class="group5">
        <?php query_posts('category_name=tutorials&showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h2 class="entry-title"><?php the_title(); ?></h2></a>
          <?php the_excerpt(); ?>

            
        <?php endwhile; ?>


        <?php posts_nav_link(); ?>

       


         
        <?php endif; ?>
</section>
</div>






<?php get_footer(); ?>



    









