<aside class="sidebar">
    <?php get_search_form(); ?>
    <div class="sidebar_section">
        <h3>Guides for your shoot</h3>
        <hr />
        <ul>
            <?php 
            $guide_cat = new WP_Query( array( 'category_name' => 'Guide' ) );
            if ( $guide_cat->have_posts() ) : while ( $guide_cat->have_posts() ) : $guide_cat->the_post(); 
            ?>
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; else: ?>
            <p>Guides coming soon!<p>
            <?php endif; ?>
        </ul>
    </div>
    <div class="sidebar_section">
        <h3>Recent Posts</h3>
        <hr />
        <ul>
            <?php 
            $limit_recent = new WP_Query( array( 'posts_per_page' => 10 ) );
            if ( $limit_recent->have_posts() ) : while ( $limit_recent->have_posts() ) : $limit_recent->the_post(); 
            ?>
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; else: ?>
            <p>Posts coming soon!<p>
            <?php endif; ?>
        </ul>
    </div>
    <div class="sidebar_section">
        <h3>Categories</h3>
        <hr />
        <ul>
            <?php wp_list_categories( array(
                'title_li' => '',
                'show_count' => true
            ) ); ?>
        </ul>
    </div>
</aside>