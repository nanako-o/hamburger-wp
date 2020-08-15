<?php get_header(); ?>

<?php while( have_posts() ): ?>
<?php the_post(); ?>


            <article class="p-article--page">
                <div class="p-article__img--page">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php the_content(); ?>
                <?php endwhile; ?>
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