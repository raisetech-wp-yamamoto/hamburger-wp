<?php get_header(); ?>
            <div class="l-main">
                <div class="p-main-visual p-main-visual--single-page">
                    <h1 class="c-sub-title"><?php the_title(); ?></h1>
                </div>
                <div class="l-main__single-page-contents">
                <?php
                    if( have_posts() ) :
                        while( have_posts() ) :
                            the_post(); 
                            the_content(); //パーツ化した部分を呼び出し?>
                        <?php endwhile;
                    else :
                        ?><p>表示する記事がありません</p><?php
                    endif;
                    wp_reset_query();
                ?>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
</body>
</html>