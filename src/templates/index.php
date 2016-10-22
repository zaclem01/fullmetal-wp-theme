<?php get_header(); ?>

<div class="blog_intro">
    <h1>Fullmetal Blog</h1>
    <p>Welcome to Fullmetal Photography's blog and guides section. See the most recent posts below.</p>
</div>

<div class="blog_content">    
    <section class="blog_content_postList">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="content_postList_post">
            <h2 class="postList_post_title"><?php the_title(); ?></h2>
            <?php if (has_post_thumbnail()) : ?>
                <div class="postList_post_thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>
            <hr />
            <h3><?php the_time('F j, Y') ?></h3>
            <p class="postList_post_excerpt"><?php the_excerpt(); ?></p>
            <a class="postList_post_readMoreBtn" href="<?php echo get_permalink(); ?>">Read on...</a>
        </div>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        <div class="content_postList_pagination">
            <?php echo paginate_links( array(
                'mid_size' => 2,
                'end_size' => 1,
                'prev_text' => '&laquo; Prev',
                'next_text' => 'Next &raquo;'
            ) ); ?>
        </div>
    </section>
    
    <div class="blog_content_sidebarWrapper"><?php get_sidebar(); ?></div>

</div>

<?php get_footer(); ?>