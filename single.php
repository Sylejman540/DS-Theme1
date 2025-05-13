<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div class="container">
            <?php
            while( have_posts() ):
                the_post();
                get_template_part( 'parts/content-single' );
                ?>
                <div class="wpdevs-pagination">
                    <div class="pages next">
                        <?php next_post_link( '&laquo; %link' ); ?>
                    </div>

                    <div class="pages previous">
                        <?php previous_post_link( '%link &raquio' ); ?>
                    </div>
                </div>
                <?php
                if(comments_open() || get_comments_number()){
                    comments_template();
                }
            endwhile;ooppo
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>