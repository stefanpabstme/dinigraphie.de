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
  ?>
  <?php if ( $wpb_all_query->have_posts() ) : ?>
  <!-- the loop -->
  <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
  <section>
    <h2><?php the_title(); ?></h2>
    <div class="project_content">
      <?php the_content(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <!-- end of the loop -->
  <?php wp_reset_postdata(); ?>
  <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</section>

<h2>Carousel Example</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="la.jpg" alt="Los Angeles" style="width:100%;">
    </div>

    <div class="item">
      <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      Lalala <br />
      Lalala <br />
      Lalala <br />
      Lalala <br />
      Lalala <br />
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New york" style="width:100%;">
    </div>
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
