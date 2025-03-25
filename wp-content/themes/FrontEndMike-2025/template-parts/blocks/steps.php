<?php if (have_rows('steps')): ?>
    <div class="steps-container my-8 mx-auto <?= isset($block['className']) ? $block['className'] : '' ?>">
        <?php $step_number = 1; ?>
        <?php while (have_rows('steps')): the_row(); 
            $heading = get_sub_field('heading');
            $title = get_sub_field('title');
            $dates = get_sub_field('dates');
            $body = get_sub_field('body');
        ?>
            <div class="step">
                <div class="step-number">
                    <span></span>
                </div>
                <div class="step-content is-dark-blue">
                    <h2 class="font-bold"><?php echo esc_html($heading); ?></h2>
                    <h3 class="mb-2" ><?php echo $title; ?></h3>
                    <p class="text-sm mb-2"><?php echo $dates; ?></p>
                    <hr>
                    <div class="step-body"><?php echo $body; ?></div>
                </div>
            </div>
            <?php $step_number++; ?>
        <?php endwhile; ?>
        
        <div class="end-circle"></div>
    </div>
<?php endif; ?>


