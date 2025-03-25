<?php
    $background_video = get_field('background_video');
    $headline = get_field('headline');
    $subheadline = get_field('subheadline');
    $custom_classes = !empty($block['className']) ? esc_attr($block['className']) : '';
?>

<section class="hero <?php echo $custom_classes; ?> alignfull inset-x-0 relative h-screen overflow-hidden mb-8">
    <video class="absolute inset-0 w-full h-full object-cover backdrop-blur-md" autoplay muted loop playsinline>
        <source src="<?php echo esc_url($background_video); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="absolute inset-0 bg-black/75"></div>


    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
        <?php if ($headline) : ?>
            <h1 class="text-4xl md:text-6xl font-bold"><?php echo esc_html($headline); ?></h1>
        <?php endif; ?>

        <?php if ($subheadline) : ?>
            <p class="max-w-4xl mx-auto text-center mt-4 text-lg md:text-xl"><?php echo esc_html($subheadline); ?></p>
        <?php endif; ?>
    </div>
</section>
