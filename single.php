<?php get_header(); ?>
  
<section class="main-contents">

        <?php if(have_posts()): while(have_posts()):the_post(); ?>
        
        <section class="main-content inner single">
            <div class="thumbnail"><img src="<?php the_post_thumbnail(''); ?></div>
            <h1><?php the_title(); ?></h1>
            <table class="single-field">
                <?php if ( get_field( 'company' ) ) : ?>
                    <tr>
                        <th>会社名</th>
                        <td><?php the_field( 'company' ); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if ( get_field( 'url' ) ) : ?>
                    <tr>
                        <th>サイトURL</th>
                        <td><?php the_field( 'url' ); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if ( get_field( 'tool' ) ) : ?>
                    <tr>
                        <th>ツール</th>
                        <td><?php the_field( 'tool' ); ?></td>
                    </tr>
                <?php endif; ?>
            </table>
            <?php the_content(); ?>
        </section>
            
        <?php endwhile; endif; ?>
    
        <?php get_sidebar(); ?> 
    
</section>
 
<?php get_footer(); ?>