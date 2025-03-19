<?php get_header(); ?>
<section class="hero alignfull relative h-screen overflow-hidden mb-8">
    <video class="absolute inset-0 w-full h-full object-cover backdrop-blur-md" autoplay="" muted="" loop="" playsinline="">
        <source src="/wp-content/uploads/2025/03/hello_world.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>




    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
                    <h1 class="text-4xl md:text-6xl font-bold">Projects</h1>
        
                    <p class="max-w-4xl mx-auto text-center mt-4 text-lg md:text-xl">Here are some projects I have built and discussed a little bit. Some were done professionally, while others are side projects that served as a way to learn new topics and create some cool things. I've also included some of my codepen "Tidbits" which are small components built as a 10 minute presentation to introduce a front end topic to co-workers and friends.</p>
            </div>
<div class="absolute inset-0 bg-black/40"></div>
</section>

<main class="container mx-auto">
    <div class="px-4">
        <p class="mb-6">All Sites listed here were custom built using a blank starter theme. Also, all projects listed here are ones where I did 100% of the front end development.</p>
    <?php
        $terms = get_terms( array(
            'taxonomy'   => 'project_category',
            'orderby'    => 'name', 
            'hide_empty' => true,  
        ) );

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
            <h2 class="text-lg font-bold block mb-4">Filter by technology used:</h2>
            <div class="project-category-buttons flex flex-wrap gap-2 mb-8">
                <?php foreach ( $terms as $term ) : ?>
                    <button class="border border-black px-2 py-1 filter-button bg-white text-black rounded-[25px] shadow-sm hover:bg-black hover:text-white transition-colors duration-300 cursor-pointer" data-category="<?php echo esc_attr( $term->slug ); ?>">
                        <?php echo esc_html( $term->name ); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

<?php

$selected_categories = isset( $_GET['category'] ) ? explode( ',', $_GET['category'] ) : array();


$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => 9, 
    'tax_query'      => array(),
);


if ( ! empty( $selected_categories ) ) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'project_category',
            'field'    => 'id',
            'terms'    => $selected_categories,
            'operator' => 'IN', 
        ),
    );
}

$query = new WP_Query( $args );

if ( $query->have_posts() ) :  ?>
        <div class="grid gradient-container  px-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post();
            $categories = get_the_terms( get_the_ID(), 'project_category' );
            $category_classes = '';
            if ( $categories ) {
                foreach ( $categories as $category ) {
                    $category_classes .= ' category-' . $category->slug . ' ';
                }
            } ?>
                <article class="project article-element <?php echo esc_attr( $category_classes ); ?>">
                    <div class=" p-4 rounded-lg h-full">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
                                alt="<?php the_title_attribute(); ?>" 
                                class="w-full rounded-lg mb-4 object-cover ">
                        <?php endif; ?>
                        <h3 class="text-xl font-semibold mb-2 mt-2 leading-none">
                            <a href="<?php the_permalink(); ?>">
                            <span class="z-10 absolute inset-0"></span>
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <?php 
                            $project_source = get_field('project_source'); 
                            if ($project_source) : ?>
                            <p class="text-sm mb-2"><?php echo esc_html($project_source); ?></p>
                        <?php endif; ?>
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


