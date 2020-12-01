<?php get_header(); ?>
            <div class="l-main">
                <div class="p-main-visual p-main-visual--archive-page">
                    <div class="p-main-visual--archive-page__bg"></div>
                    <h1 class="c-sub-title">Search:</h1>
                    <p><?php echo get_search_query(); ?></p>
                </div>
                <div class="l-main__archive-page-contents">
                    <div class="c-page-description">
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <?php
                        if( have_posts() ) :
                            while( have_posts() ) :
                                the_post(); ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="c-archive-page-card">
                                        <div class="c-archive-page-card__img"><?php the_post_thumbnail(); ?></div>
                                        <div class="c-archive-page-card__description">
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_excerpt(); ?>
                                            <button class="c-card-button" ><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        else :
                            ?><p>表示する記事がありません</p><?php
                        endif;
                    ?>
                    <dl class="c-pagenation">
                        <li class="c-pagenation__current">page 1/10</li>
                        <li class="c-pagenation__prev"><a href="archive.html">«</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">1</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">2</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">3</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">4</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">5</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">6</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">7</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">8</a></li>
                        <li class="c-pagenation__num"><a href="archive.html">9</a></li>
                        <li class="c-pagenation__next"><a href="archive.html">»</a></li>
                    </dl>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
</body>
</html>