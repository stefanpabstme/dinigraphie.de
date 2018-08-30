<?php get_header(); ?>
<section id="content" role="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry' ); ?>
  <?php endwhile; endif; ?>
  <div class="project_navi">
    <?php get_template_part( 'nav', 'below-single' ); ?>
  </div>
</section>
<?php get_footer(); ?>
