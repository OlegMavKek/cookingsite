<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand text-white" href="/">Мій кулінарний сайт</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php if (has_nav_menu('primary')) : ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'navbar-nav',
                            'fallback_cb' => false,
                        )
                    );
                    ?>
                <?php else : ?>
                    <ul class="navbar-nav">
                        <?php
                        $categories = get_categories(array('hide_empty' => 0));
                        foreach ($categories as $category) {
                            if ($category->slug === 'uncategorized') {
                                continue;
                            }
                            $category_link = get_category_link($category->term_id);
                            echo '<li class="nav-item"><a class="nav-link text-white" href="' . esc_url(add_query_arg('category', $category->slug, home_url('/'))) . '">' . $category->name . '</a></li>';
                        }
                        ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
