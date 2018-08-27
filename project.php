<?php /* Template Name: Project */ ?>
<?php get_header(); ?>
<div class="project_arrow left">&#8249;</div>
<div class="project_arrow right">&#8250;</div>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
  <?php
    // the query
    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); //category 3 = projects

    $carousel_indicators = '';
    $carousel_items = '';
    $count = 0;
    $active = '';

    if ( $wpb_all_query->have_posts() ) :
      while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
        if ($count === 0) {$active = 'active';}
        $carousel_indicators .= '<li data-target="#myCarousel" data-slide-to="' . $count . '" class="' . $active . '"></li>';
        $carousel_items .= '<div class="item ' . $active . '">';
        $carousel_items .= get_the_content();
        $carousel_items .= '</div>';
        $count++;
        $active = '';
      endwhile;
      wp_reset_postdata();
      else : ?>
      <p><?php _e( 'Keine passenden Posts gefunden.' ); ?></p>
  <?php endif; ?>
</section>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php echo $carousel_indicators; ?>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php echo $carousel_items; ?>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
