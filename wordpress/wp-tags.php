<!--Старт цикла-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<!--Конец Цикла-->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <!--Если нет постов-->
<?php endif; ?>

<!--Имя страницы-->
<?php the_title(); ?>

<!--Контент страницы-->
<?php the_content(); ?>

<!--Цитата страницы-->
<?php the_excerpt(); ?>
