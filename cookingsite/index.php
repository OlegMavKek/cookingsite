<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
wp_head();
?>
<body>
<?php get_header()?>
<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Останні рецепти</h2>
                <ul class="list-group">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => isset($_GET['category']) ? $_GET['category'] : ''
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <li class="list-group-item mt-2 mb-2 border-0">
                                <h5 class="mb-1"><?php the_title(); ?></h5>
                                <p class="mb-1"><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-success">Детальніше</a>
                            </li>
                            <?php
                        }
                    } else {
                        echo '<p>Ця категорія порожня</p>';
                    }

                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php get_footer()?>
</body>
</html>
