<?php
/*
Template Name: Full Width
*/
?>

<?php get_template_part( 'templates/page-header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'templates/content', 'page' ); ?>
<?php endwhile; ?>