<?php get_header(); ?>
<div class='main-content'>

        <?php query_posts('category_name=index&showposts=3'); ?>

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

        



        <a href="<?php the_permalink(); ?>">

                <h3><?php the_title(); ?></h3></a>

         

                <?php the_post_thumbnail(); ?>

                <?php the_excerpt(); ?> 

 
<?php endwhile; ?>

<?php endif; ?>
</div>

<?php 
    $sidebar = get_post_meta($post->ID, "sidebar", true);
    get_sidebar($sidebar);
?>

<?php get_footer(); ?>