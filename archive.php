<?php
/*
Template Name: archive
*/
?>

<?php get_header(); ?>
            <div class="l-main">
                <div class="p-main-visual p-main-visual--archive-page">
                    <div class="p-main-visual--archive-page__bg"></div>
                    <h1 class="c-sub-title">Menu:</h1>
                    <p>チーズバーガー</p>
                </div>
                <div class="l-main__archive-page-contents">
                    <div class="c-page-description">
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;    //pagedに渡す変数
                        query_posts( $query_string.'&posts_per_page=5&paged='.$paged); //posts_per_pageで記事
                        if( have_posts() ) :
                            while( have_posts() ) :
                                the_post(); 
                                get_template_part('card'); //パーツ化した部分を呼び出し?>
                            <?php endwhile;
                            wp_pagenavi();
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