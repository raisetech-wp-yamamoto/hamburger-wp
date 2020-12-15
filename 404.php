<?php get_header(); ?>
            <div class="l-main">
                <div class="p-main-visual p-main-visual--front-page">
                    <h1 class="c-sub-title">ダミーサイト</h1>
                </div>
                <div class="l-main__single-page-contents">
                    <h2>404 Not Found（ページが見つかりませんでした）</h2>
                    <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
                    <p>現在表示する記事がありません。よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ</a>      
                    </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>

</body>
</html>