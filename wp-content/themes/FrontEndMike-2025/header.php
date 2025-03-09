<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="main-header p-4">
	<a href="#content" class="skip-link">Skip to Main Content</a>
		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center ">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <div class="flex flex-wrap gap-2 mb-1">
								<div class="hidden sm:block max-[400px]:hidden">
									<?php the_custom_logo(); ?>
								</div>
								<div>
									<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
										<?php echo get_bloginfo( 'name' ); ?>
									</a>
									<p class="text-sm font-light text-gray-600">
										<?php echo get_bloginfo( 'description' ); ?>
									</p>
								</div>
							</div>

						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
					<button id="ham-interior" class="ham-menu hamburger--spin is-inactive" type="button">
						<span class="hamburger-box">
						<span class="hamburger-inner"></span>
						</span>
					</button> 
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-white mt-4 p-2 lg:mt-0 lg:p-0 lg:bg-transparent lg:block transition-all duration-300 ease-in-out text-lg',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4 mb-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>
<div class="h-16"></div>
