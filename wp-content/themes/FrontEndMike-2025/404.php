<?php get_header(); ?>
<section class="hero alignfull relative h-screen overflow-hidden">
    <video class="absolute inset-0 w-full h-full object-cover backdrop-blur-md" autoplay="" muted="" loop="" playsinline="">
        <source src="/wp-content/uploads/2025/03/hello_world.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>




    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
                    <h1 class="text-4xl md:text-6xl font-bold">404</h1>
					<p class="max-w-4xl mx-auto text-center mt-4 text-lg md:text-xl">Oops, you may have gotten a little turned around</p>
            </div>
			<div class="absolute inset-0 bg-black/40"></div>
</section>

	<div class="container my-8 mx-auto max-w-5xl px-4 entry-content">
		<h3 class="text-center">
			Check out some of my projects or blogs
		</h3> 
	</div>
	<div class="text-center my-8">
		<a href="/projects" class="inline-block px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:brightness-90">
			View All Projects
		</a>
		<a href="/blog" class="inline-block px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:brightness-90">
			View All Posts
		</a>
	</div>

<?php
get_footer();
