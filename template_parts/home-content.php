<!-- main -->
<div class="main">
        <div class="blog">
        <?php $query=new WP_Query(array('post-type'=>'post')); ?>
        <?php if($query->have_posts()): ?>
        <?php while($query->have_posts()) : $query->the_post();?>
            <div class="post">
            <h2><?php the_title();?></h2>
                <span><?php echo get_the_date();?></span>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink();?>" class="btn">
                    <?php _e('Read more'); ?>
                </a>
            </div>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>
    <?php _e('Nema jos postova'); ?>
<?php endif;?>

            
            
        </div>
       <?php get_sidebar();?>
    </div>