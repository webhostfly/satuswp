<article id="post-<?php the_ID(); ?>" <?php post_class('summary') ?> vocab="http://schema.org/" typeof="BlogPosting">

  <header>
    <h3 property="headline">
      <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h3>
    <?php get_template_part( 'templates/post-meta' ); ?>
  </header>
  
  <div class="abstract" property="description">
    <?php if ( has_post_thumbnail()) : ?>
      <a class="<?php echo POST_THUMB_CLASSES ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('thumbnail'); ?>
      </a>
    <?php endif; ?>
    <?php satus_the_excerpt( POST_EXCERPT_LENGTH ); ?>
  </div>

</article>