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

  <ul>

      <!-- the loop -->
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li>
          <section>
            <h2><?php the_title(); ?></h2>
            <div class="project_content">
              <?php the_content(); ?>
            </div>
          </section>
        </li>
      <?php endwhile; ?>
      <!-- end of the loop -->

  </ul>

      <?php wp_reset_postdata(); ?>

  <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
