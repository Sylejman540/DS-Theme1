<?php get_header(); ?>

<!-- Hero Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>

            <section class="services">
                Services
            </section>

            <section class="home-blog">
                <div class="container">
                    <div class="blog-items">
                        <?php 
                        if ( have_posts()) : the_post();
                            while ( have_posts() ) : 
                                the_post();
                        ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <?php the_post_thumbnail(array(275,275)); ?>
                                <div class="meta-info">
                                    <p>Posted in by <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                    <p>Categories: <?php the_category();?></p>
                                    <p>Tags: <?php the_tags(); ?></p>
                                </div>
                                <?php the_content(); ?>
                            </article>
                        <?php 
                            endwhile;
                        endif;?>
                    </div>
                    <?php get_sidebar()?>
                </div>
            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>
