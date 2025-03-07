<?php
$recent_posts = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
));

?>

<section class="latest-posts container mx-auto py-12">
    <h2 class="text-3xl font-bold text-center mb-6">Latest Posts</h2>

    <?php if ($recent_posts->have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" 
                                 alt="<?php the_title_attribute(); ?>" 
                                 class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                    <?php endif; ?>
                    <h3 class="mt-2 leading-none text-xl font-semibold mb-2"><?php the_title(); ?></h3>
                    <time class="text-sm font-semibold mb-2"><?php the_date(); ?></time>
                    <p class="text-gray-600 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <a href="<?php the_permalink(); ?>" class="text-[var(--wp--preset--color--primary)] font-bold hover:underline">
                        Read More →
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="text-center mt-8">
            <a href="/blog" class="inline-block px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:brightness-90">
                View All Posts
            </a>
        </div>
    <?php else : ?>
        <p class="text-center text-gray-500">No posts found.</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</section>
