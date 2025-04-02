<?php get_header(); ?>
<section class="hero alignfull relative h-screen overflow-hidden mb-8">
    <video class="absolute inset-0 w-full h-full object-cover backdrop-blur-md" autoplay="" muted="" loop="" playsinline="">
        <source src="/wp-content/uploads/2025/03/hello_world.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>




    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
                    <h1 class="text-4xl md:text-6xl font-bold">Blog</h1>
        
                    <p class="max-w-4xl mx-auto text-center mt-4 text-lg md:text-xl">Thoughts, inspiration, and knowledge I've picked up on my coding journey.</p>
            </div>
            <div class="absolute inset-0 bg-black/40"></div>
</section>

<main class="container mx-auto py-12 px-4">
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-4 sm:gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <?php $has_thumbnail = has_post_thumbnail(); ?>
                
                <article class="article-element">
                    
                    <?php if ($has_thumbnail) : ?>
                        <div class="col-span-1">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
                                alt="<?php the_title_attribute(); ?>" 
                                class="w-full rounded-lg object-cover">
                        </div>
                    <?php endif; ?>

                    <div class="<?php echo $has_thumbnail ? 'col-span-4' : 'col-span-1 mx-0'; ?>">
                        <h3 class="text-xl font-semibold mb-2 mt-2 leading-none">
                            <a href="<?php the_permalink(); ?>">
                                <span class="z-10 absolute inset-0"></span>
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <time class="text-sm block font-semibold mb-2"><?php the_date(); ?></time>
                        <p class="text-gray-600 ">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </p>
                    </div>

                </article>
            <?php endwhile; ?>

        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <?php the_posts_pagination(array(
                'prev_text' => __('← Previous'),
                'next_text' => __('Next →'),
            )); ?>
        </div>

    <?php else : ?>
        <p class="text-center text-gray-500">No posts found.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
