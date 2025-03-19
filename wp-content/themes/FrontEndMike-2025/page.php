<?php get_header(); ?>

<main id="content" class="container mx-auto px-4 pt-3 pb-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="gutenberg-blocks ">
            <?php if (has_blocks()) : ?>
                <?php the_content(); ?>
            <?php endif; ?>
        </div>


    <?php endwhile; else : ?>

        <!-- No Content Found -->
        <div class="text-center">
            <h2 class="text-2xl font-bold">Sorry, no content found.</h2>
        </div>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
