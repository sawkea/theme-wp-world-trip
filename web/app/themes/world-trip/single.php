<?php get_header(); ?>


<div class="single-item container">
    <div class="mt-5 mb-3 text-right">
        <!-- Button retour page accueil -->
        <a href="<?php echo home_url( '/' ); ?>"><span class="fas fa-chevron-circle-left"></span></a>
    </div>
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
        <div class="post">
            <h2><?php the_title(); ?></h2>
      
            <?php the_content(); ?>
        </div>
    
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>