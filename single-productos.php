<?php get_header();?>

<main class="container py-3">
    <?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
            <h1 class="my-3"><?php the_title();?></h1>
            <div class="row">
                <div class="col-5">
                    <?php the_post_thumbnail('large');?>
                </div>
                <div class="col-7">
                    <?php the_content();?>
                </div>
            </div>
        <?php
}

}?>
</main>

<?php get_footer();?>