<?php get_header(); ?>
<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" 
width="<?php echo get_custom_header()->width ?>" alt="">
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                <h1>Blog</h1>
                    <section class="home-blog">
                        <div class="container">
                            <div class="blog-items">
                                <?php
                                if( have_posts() ):
                                    while( have_posts() ): the_post();
                                        get_template_part( 'parts/content', get_post_format() );
                                        ?>
                                        <?php
                                    endwhile;
                                    ?>
                                       <div class="wpdevs-pagination">
                                           <div class="pages new">
                                            <?php previous_posts_link( '<< Previous Post' ); ?>
                                           </div>

                                           <div class="pages old">
                                            <?php next_posts_link( 'Next Post >>' ); ?>
                                           </div>
                                       </div>
                                    <?php
                                else: ?>
                                    <p>Nothing to be displayed!</p>          
                                <?php endif; ?>
                            </div>
                            <?php get_sidebar(); ?>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>