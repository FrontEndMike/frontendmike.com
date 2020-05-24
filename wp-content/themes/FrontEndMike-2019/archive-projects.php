<?php

get_header(); ?>
	<div id="landing" class="hero projects">
		<div class="overlay">
			<div class="header-contain">
				<div class="content-scroll">
					<div class="content-scroll__container">
					<h1 class="text-center">Recent Projects</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
			
	<div class="content">
	<div class="row">
		<div class="large-12 columns">
			<div id="category" class="filter-button-group">
				<button class="cat-btn active-cat" data-filter="*">Show All</button>
				<button class="cat-btn" data-filter=".wordpress">WordPress</button>
				<button class="cat-btn" data-filter=".foundation">Foundation</button>
				<button class="cat-btn" data-filter=".javascript">JavaScript</button>
				<button class="cat-btn" data-filter=".bootstrap">Bootstrap</button>
				<!-- <button data-filter=".metal:not(.transition)">metal but not transition</button> -->
			</div>
		</div>
	</div>

		<div class="inner-content row">

			<div class="project-grid grid">
				<div class="col" data-equalizer>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/project', 'archive-grid' ); ?>
						
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
				</div>
			</div>
		
		</div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script>
 	var $grid = $('.grid').isotope({
 	  // options
 	  itemSelector: '.grid-item',
 	  layoutMode: 'fitRows'
 	});

 	// filter items on button click
 	$('.filter-button-group').on( 'click', 'button', function() {
 	  var filterValue = $(this).attr('data-filter');
 	  $grid.isotope({ filter: filterValue });
 	});

 	// Add active class to the current button (highlight it)
 	var header = document.getElementById("category");
 	var btns = header.getElementsByClassName("cat-btn");
 	for (var i = 0; i < btns.length; i++) {
 	  btns[i].addEventListener("click", function() {
 	    var current = document.getElementsByClassName("active-cat");
 	    current[0].className = current[0].className.replace(" active-cat", "");
 	    this.className += " active-cat";
 	  });
 	}


 </script>

<?php get_footer(); ?>