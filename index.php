<?php get_header(); ?>

            <article class="p-article">
                <div class="p-article__img">
                    <p>ダミーサイト</p>
                </div>
                <section class="c-section">
                    <div class="c-section__item c-section__item--takeout">
                    <?php
                            $takeout = get_term_by( 'slug','takeout','category' );
                            $takeout_link = get_term_link( $takeout , 'category' );
                            ?>
                            <a href="<?php echo $takeout_link; ?>">Take Out</a>
                        <div class="c-section__line"></div>
                            <div class="c-section__inner c-section__inner1">
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <div class="c-section__inner  c-section__inner2">
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                    </div>
                    <div class="c-section__item c-section__item--eatin">
                            <?php
                            $eatin = get_term_by( 'slug','eatin','category' );
                            $eatin_link = get_term_link( $eatin , 'category' );
                            ?>
                            <a href="<?php echo $eatin_link; ?>">Eat In</a>
                            <div class="c-section__line"></div>
                            <div class="c-section__inner c-section__inner1">
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <div class="c-section__inner  c-section__inner2">
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                    </div>
                </section>
                <section class="p-section-map">
                    <div class="p-section-map__inner">
                        <h2>見出しが入ります</h2>
                        <div class="p-section__line"></div>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </section>
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