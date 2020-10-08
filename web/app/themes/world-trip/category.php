<?php get_header(); ?>
	

    <!-- Menu CATEGORIES ------------------------------------------------------------->
    <div><?php get_template_part('parts/menu-categories', 'menu') ?></div>

        <!-- Afficher la catégorie choisie -->
        <h3>Category: 
            <?php
                $category = get_the_category();
                echo $category[0]->cat_name;
            ?>
        </h3>

        <?php the_content(); ?>
<?php get_footer(); ?>