<?php get_header(); ?>
    <section class="main-contents">
        <section class="main-content inner">

            <section id="work">
                <div class="title">Work</div>
                <div class="title-second">実績</div>
                <div class="work-contents">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="work-content">
                            <div class="work-img"><img src="<?php the_post_thumbnail(''); ?></div>
                            <dl>
                                <dt><?php
                                $categories = get_the_category();
                                if ( $categories ) {
                                    echo '<ul>';
                                    foreach ( $categories as $category ) {
                                        echo '<li>'.$category->name.'</li>';}
                                        echo '</ul>';
                                    }
                                ?></dt>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d.'); ?></time>
                            </dl>
                            <div class="work-title"><?php the_title(); ?></div>
                            <div class="work-text"><?php the_excerpt(); ?></div>
                        </div>
                    </a>
                <?php endwhile; endif; ?>
                </div>
                <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
                <!-- pagenation -->
                <div class="pagenation">
                <?php
                echo
                paginate_links(
                    array(
                        'end_size' => 1,
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => '<i class="fas fa-angle-left"></i>',
                        'next_text' => '<i class="fas fa-angle-right"></i>',
                    )
                );
                ?>
                </div><!-- /pagenation -->
                    <?php endif; ?>
            </section>
  
        </section>
    
        <?php get_sidebar(); ?> 

    </section>

<?php get_footer(); ?>