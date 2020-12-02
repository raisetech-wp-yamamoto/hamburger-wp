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