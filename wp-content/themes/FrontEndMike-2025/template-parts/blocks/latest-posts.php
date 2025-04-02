<?php
    $headline = get_field('headline');
    $post_type = get_field('post_type_selector') ?: 'post'; 
    $cta = get_field('cta'); 
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => 3,
        'post_status'    => 'publish'
    );

    $recent_posts = new WP_Query($args);
?>

<section class="latest-posts container mx-auto py-12">
    <h2 class="text-3xl font-bold text-center mb-6"><?php echo $headline; ?></h2>

    <?php if ($recent_posts->have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <article class="article-element rounded-lg border-black border-[1px] <?php echo esc_attr( $category_classes ); ?>">
                    <div class=" rounded-lg h-full">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
                                alt="<?php the_title_attribute(); ?>" 
                                class="w-full rounded-t-lg mb-4 object-cover ">
                        <?php endif; ?>
                        <h3 class="text-xl font-semibold mb-2 mt-2 leading-none">
                            <a href="<?php the_permalink(); ?>">
                            <span class="z-10 absolute inset-0"></span>
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <?php if (!empty(get_the_excerpt())) : ?>
                            <hr class="mb-2">
                            <p class="text-gray-600 ">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        <?php if ($cta): ?>
            <div class="text-center mt-8">
                <a href="<?php echo esc_url($cta['url']); ?>" target="<?php echo esc_attr($cta['target'] ?: '_self'); ?>" class="button">
                    <?php echo esc_html($cta['title']); ?>
                </a>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</section>
