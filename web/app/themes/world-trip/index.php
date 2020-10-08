<?php get_header(); ?>

<div><?php get_template_part('parts/menu-categories', 'menu') ?></div>

<div class="container ">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
 
    <div class="card-deck">
      <div class="card col-12 mb-2">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('square'); ?></a>
        <div class="card-body">
          <h5 class="card-title"><?php the_title(); ?></h5>
          <p class="card-text"><?php the_excerpt(); ?></p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <a href="<?php the_permalink(); ?>" class="post__link">Read more...</a>
        </div>
      </div>
      
      
    </div>
    
    <?php endwhile; endif; ?>
    <?php posts_nav_link(); // Après la boucle ?>
</div>

<?php get_footer(); ?>