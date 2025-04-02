<?php
    $left_image = get_field('left_image');
    $right_content = get_field('right_content');
    $background_img = get_field('background_img');
?>

<section 
  class="alignfull relative bg-cover bg-center pt-8"
  style="background-image: url('<?php echo esc_url($background_img['url']); ?>');"
>
  <div class="container mx-auto relative z-10 flex flex-wrap flex-col-reverse sm:flex-row">
    <div class="w-full md:w-1/3 relative min-h-[500px] ">
      <?php if ($left_image): ?>
        <img 
          src="<?php echo esc_url($left_image['url']); ?>" 
          alt="<?php echo esc_attr($left_image['alt']); ?>" 
          class="absolute bottom-0 left-0 w-full object-contain max-h-[500px]" 
        />
      <?php endif; ?>
    </div>
    <div class="w-full md:w-2/3 px-6 flex items-center">
        <div class="prose max-w-none">
          <h2 class="mb-4  text-4xl"><strong>About Me</strong></h2>
            <div class="entry-content">
                <?php echo $right_content; ?>
            </div>
      </div>
    </div>
  </div>
</section>

