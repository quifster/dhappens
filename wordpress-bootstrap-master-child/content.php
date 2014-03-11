<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header>
        <!--    Removed for the time being    -->  
        <!--    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('wpbs-featured'); ?></a>-->
        <!--        <div class="seperated">
                    <div class="blockupper-lower">-->
        <h1 class="h2">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h1>
        <!--            </div> ./blockupper-lower 
                </div> ./seperated -->
        <p class="meta"> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><i class="icon icon-calendar"></i> <?php the_date('l, F jS'); ?></time> <time datetime="<?php echo the_time('g:ia'); ?>"><i class="icon icon-time"></i> <?php the_time('g:i a'); ?></time> <a href="<?php comments_link() ?>"><i class="icon icon-comment"></i> <?php comments_number('0', '1', '%');  ?></a></p>
    </header> <!-- end article header -->

    <section class="post_content clearfix">
        <?php the_content(__("Read more &raquo;", "bonestheme")); ?>
    </section> <!-- end article section -->

    <footer>

        <p class="tags"><?php the_tags('<span class="tags-title"><i class="icon icon-tags"></i></span> ', ' ', ''); ?></p>
        <p class="categories"><i class="icon icon-folder-open"></i> <?php the_category(', '); ?>.</p>

    </footer> <!-- end article footer -->

</article> <!-- end article -->
