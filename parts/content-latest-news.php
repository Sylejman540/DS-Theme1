<article class="latest-news">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a> 
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a> 
    <div class="meta-info">
        <p> by <span><?php the_author_posts_link(); ?></span></p>
        
        <?php if( has_category() ): ?>
            <p>Categories: <span><?php the_category(' '); ?></span></p>
        <?php endif; ?>

        <?php if( has_tag() ): ?>
            <p>Tags: <span><?php the_tags('', ', '); ?></span></p>
        <?php endif; ?>
        
        <p><span><?php echo get_the_date(); ?></span></p>
    </div>
    <?php the_excerpt(); ?>
</article>
