<?php get_header(); ?>

<div class="single_content">
    <div class="single_content_post">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <header class="content_post_header">
            <?php if( has_post_thumbnail() ) : ?>
            <div class="post_header_thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <hr />
            <p class="post_header_date"><i class="fa fa-clock-o"></i> <?php the_time('F j, Y') ?></p>
        </header>
        <article class="content_post_article"><?php the_content(); ?></article>
        <?php wp_link_pages( array(
            'before' => '<p class="content_post_pagination">Pages: ',
            'after' => '</p>'
        ) ); ?>
        <hr />
        <aside class="content_post_meta">
            <p><i class="fa fa-folder"></i> <?php the_category(', '); ?></p>
            <p><i class="fa fa-tags"></i> <?php if(has_tag()) : ?>
                <?php the_tags('', ', ', ''); ?>
            <?php else : ?>
                No tags for this post
            <?php endif; ?>
            </p>
        </aside>
        <div class="content_post_pagination">
            <div class="post_pagination_prev"><?php previous_post_link(); ?></div>
            <div class="post_pagination_next"><?php next_post_link(); ?></div>
        </div>
        <?php endwhile; endif; ?>
    </div>

    <div class="single_content_sidebarWrapper"><?php get_sidebar(); ?></div>
</div>

<?php get_footer(); ?>