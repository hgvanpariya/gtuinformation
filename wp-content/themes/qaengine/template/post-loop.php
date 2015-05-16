<?php
    global $post;
?>
<div class="blog-wrapper">
    <div class="row">
        <div class="col-md-1 col-xs-1">
            
        </div>
        <div class="col-md-10 col-xs-10">
            <div class="blog-content">
                
                <!-- End / Post Info -->
                <h2 class="title-blog"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                <?php
                    if(is_single()){
                        the_content();
                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', ET_DOMAIN ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                        ) );
                    } else {
                        #the_excerpt();
                ?>
                <a href="<?php the_permalink(); ?>" class="read-more">
                    <?php _e("Details",ET_DOMAIN) ?><i class="fa fa-arrow-circle-o-right"></i>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>