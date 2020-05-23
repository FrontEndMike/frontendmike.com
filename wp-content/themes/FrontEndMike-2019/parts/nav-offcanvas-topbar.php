<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<!-- <div class="sub-menu ">
	<?php joints_sub_nav(); ?>	
</div> -->
<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>">@FrontEndMike</a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<a data-toggle="off-canvas">
			<button id="ham-interior" class="ham-menu hamburger--spin is-inactive" type="button">
				<span class="hamburger-box">
				<span class="hamburger-inner"></span>
				</span>
			</button> 
			</a>
		</ul>
	</div>
</div>