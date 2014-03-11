<?php get_header(); ?>

<div id="content" class="clearfix row-fluid">

    <div id="main" class="span8 clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                    <header>

                        <?php
                            //Not needed at this point
                            //the_post_thumbnail('wpbs-featured'); ?>

                        <div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>

                        <p class="meta"> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><i class="icon icon-calendar"></i> <?php the_date('l, F jS'); ?></time> <time datetime="<?php echo the_time('g:ia'); ?>"><i class="icon icon-time"></i> <?php the_time('g:i a'); ?></time> <a href="<?php comments_link() ?>"><i class="icon icon-comment"></i> <?php comments_number('0', '1', '%'); ?></a></p>

                    </header> <!-- end article header -->

                    <section class="post_content clearfix" itemprop="articleBody">
                        <?php the_content(); ?>

                        <?php wp_link_pages(); ?>
                        
                        <div class="navigation">
                            <div class="previous pull-left">
                                <?php previous_post_link(); ?>
                            </div>
                            <div class="next pull-right">
                                <?php next_post_link(); ?>
                            </div>
                        </div>

                    </section> <!-- end article section -->

                    <footer>

                        <p class="tags"><?php the_tags('<span class="tags-title"><i class="icon icon-tags"></i></span> ', ' ', ''); ?></p>
                        <p class="categories"><i class="icon icon-folder-open"></i> <?php the_category(', '); ?>.</p>

                        <?php
                        // only show edit button if user has permission to edit posts
                        if ($user_level > 0) {
                            ?>
                            <a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post", "bonestheme"); ?></a>
                        <?php } ?>

                    </footer> <!-- end article footer -->

                </article> <!-- end article -->

                <?php comments_template('', true); ?>

            <?php endwhile; ?>			

        <?php else : ?>

            <article id="post-not-found">
                <header>
                    <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                </header>
                <section class="post_content">
                    <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                </section>
                <footer>
                </footer>
            </article>

        <?php endif; ?>

    </div> <!-- end #main -->

    <?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->

<?php get_footer(); ?>