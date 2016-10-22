<?php get_header(); ?>

<div class="page_contentWrapper">
    <div class="page_content">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <header class="page_content_header">
            <?php if( has_post_thumbnail() ) : ?>
            <div class="content_header_thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <hr />
        </header>
        <article class="page_content_article"><?php the_content(); ?></article>
        <?php wp_link_pages( array(
            'before' => '<p class="page_content_pagination">Pages: ',
            'after' => '</p>'
        ) ); ?>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>