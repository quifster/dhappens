<div class="clearfix row-fluid">
    <div class="seperated">
        <div class="blockupper-lower">
            <div id="posts-carousel" class="carousel slide" >
                <div class="carousel-inner">
                    <?php
                    $args = array('posts_per_page' => 4);
                    $myposts = get_posts($args);

                    foreach ($myposts as $index => $post) : setup_postdata($post);
                        if ($index === 0) {
                            ?>
                            <div class="item active">
                                <?php } else {
                                ?>
                                <div class="item">
                                <?php }
                                ?>

                                <?php
                                if (has_post_thumbnail()) {
                                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'homepage-carousel', true);
                                    echo '<a href="' . $image_url[0] . '" title="' . the_title_attribute('echo=0') . '">';
                                    the_post_thumbnail('homepage-carousel');
                                    echo '</a>';
                                } else {
                                     ?><img src="<?php echo get_stylesheet_directory_uri() ?>/images/drama-happens-wordificator.png" alt=""><?php
                                }
                                ?>
                                <div class="carousel-caption">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div><!-- /.carousel-caption -->
                            </div><!-- /.item -->
                            <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    </div><!-- /.carousel-inner -->
                    <a class="carousel-control left" href="#posts-carousel" data-slide="prev">&lsaquo;</i></a>
                    <a class="carousel-control right" href="#posts-carousel" data-slide="next">&rsaquo;</span></a>
                </div><!-- /.carousel -->
            </div><!-- /.blockupper-lower -->
        </div><!-- /.seperated -->
    </div><!-- /.clearfix row-fluid -->