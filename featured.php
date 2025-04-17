<?php
/**
 * Template Name: Single Custom
 * Template Post Type: post
 */
get_header(); 
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
    ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="featured-image">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php endif; ?>
        </header>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>

    <?php
        endwhile;
      endif;
    ?>
  </main>
</div>

<?php get_footer(); ?>
