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
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer()?>
</body>
</html>
