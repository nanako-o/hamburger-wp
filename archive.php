<?php get_header(); ?>

<article class="p-article">
<div class="p-article__img--archive">
                <?php 
                $category = get_the_category(); 
                if ( $category[2] ) {
                    echo '<a href="' . get_category_link( $category[2]->term_id ) . '">' . $category[2]->cat_name . '</a>';
                }
                ?>
                </div>
                <section p-section__title>
                    <h2 class="c-section__h2--archive">小見出しが入ります</h2>
                    <p class="c-section__p--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </section>

                <?php if ( have_posts() ): ?>

                <?php while( have_posts() ): ?>

                  <?php the_post(); ?>

                    <section class="c-section__archive">
                            <div class="c-section__card--archive">
                                <div class="c-section__sampleimage--archive"></div>
                                <div class="c-section__text--archive">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_content(''); ?>
                                <div class="c-section__btn--archive"><a href="<?php the_permalink(); ?>">詳しく見る</a></div>
                            </div>
                        </div>
                    </section>

                <?php endwhile; ?>

                <?php else : ?>
                    <p>投稿がありません。</p>
                <?php endif; ?>

                <div class="p-section__pagenation">
                <?php wp_pagenavi(); ?>
                </div>
            </article>
        </div>

    <?php get_sidebar(); ?>

    </div>

    <?php get_footer(); ?>

    <button class="p-header__nav" id="nav">
        <div class="p-header__nav--icon" id="close_nav"><i class="fas fa-times"></i></div>
        <div class="p-header__list">
        <h2>Menu</h2>
        <?php wp_nav_menu(); ?>
        </div>
    </button>
    <div class="p-header__overlay" id="overlay"></div>
    <script src="./scripts/jquery-3.5.1.min.js"></script>
    <script src="./scripts/script.js"></script>
</body>
</html>