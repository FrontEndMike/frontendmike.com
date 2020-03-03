<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content home">
		<div id="landing" class="hero">
			<div class="row">
				<div class="large-12 columns text-center">
					<h2>HI, MY NAME IS MICHAEL & I AM A</h2>
					<h1>FRONT END DEVELOPER</h1>
					<p>WITH 2 YEARS OF PROFESSIONAL EXPERIENCE, I'VE BEEN FORTUNATE TO WORK ON SOME GREAT PROJECTS. THIS SITE SHOWCASES SOME OF MY WORK.</p>
				</div>
			</div>
		</div>
	

		<div class="inner-content row">
	
		    <main class="main small-12 large-12 medium-12 column" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>	
			    					
			    					
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
		<section id="about">     
            <div class="row">
                <div class="large-4 columns">
                    <div class="about-panel img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/selfie.jpg" alt="Michael at Futures Fund Showcase">
                    </div>
                </div>
                <div class="large-8 columns">
                    <div class="about-panel">
                        <p>Hi, my name is Michael Jackson, I am a Front End Web Developer from Baton Rouge, La. I have 2 years of professional experience as a web developer. I have also worked as a freelance web developer for 4 years. Web design is truly my passion. I enjoy using code in order to help businesses achieve their goals by creating beautiful responsive websites.</p>
                        <p>When I'm not working on websites I like to involve myself in the developer community in other ways. First, I along with fellow developer <a href="https://twitter.com/quintonjasonjr" class="link" target="_blank">Quinton Jason</a> created BR HackNight. A meet-up group for local web developers to gather and talk shop (see below for more details). Secondly, I am a Lead Instructor with <a href="https://www.thefuturesfund.org/" class="link" target="_blank">Futures Fund</a>. An organization created through the Walls Project to teach middle and high school students coding and photography. </p>
                    <a href="/about" class="button btn-style">Learn More</a>
                    </div>
                </div>
            </div>
		       
		        
		    </section>

			<!-- <div class="info">
				<div class="row">
					<div class="large-12">
						<h2 class="text-center">Recent Work</h2>
					</div>
				</div>
				<div class="row">
					<div class="large-4 columns">
						<figure>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/placeholder-circle.png" alt="">
							<figcaption>Placeholder info</figcaption>
						</figure> 
					</div>
					<div class="large-4 columns">
						<figure>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/placeholder-circle.png" alt="">
							<figcaption>Placeholder info</figcaption>
						</figure> 
					</div>
					<div class="large-4 columns">
						<figure>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/placeholder-circle.png" alt="">
							<figcaption>Placeholder info</figcaption>
						</figure> 
					</div>
				</div>
			</div> -->

			<section id="before-blog">
			    
			</section>
			<section id="blog">
			    	<div class="row">
			    		<h2><img src="<?= get_template_directory_uri(); ?>/assets/images/header-logo.png" alt="Futures Fund logo"> Futures Fund</h2>
			    	</div>
			        <div class="row">
			            <div class="large-12 columns">
			                <div class="body-copy-panel">
			                    <p>Today (at the time of this writing) it is December 2, 2017, the date of our Future’s Fund  Student Showcase. I must say, seeing these young people on stage articulating their vision and the things that they’ve learned in their time with Future’s Fund is amazing and overwhelming. I’ve never taught students before joining the FF Instructor team. Seeing MY students that I’ve spent several saturdays instructing standing tall and speaking with confidence was unbelievable. That feeling is worth more than money. To help the youth, to help the community and to have a hand in crafting the future generations is huge to me.</p>
			                </div>
			                <a href="https://frontendmike.com/2017/12/02/my-experience-working-with-futures-fund/" class="button btn-style">Learn More</a>
			            </div>
			        </div>
			    
			</section>
			<div id="before-hacknight">
			    
			</div>
			<div id="hack-image">
				
			</div>
			<section id="hacknight">
			    <!-- <img src="<?= get_template_directory_uri(); ?>/assets/images/hack_night.jpg" alt="BR Hacknight image"> -->
			    	<div class="row">
			    		<div class="large-12 columns">
			    			<h2 class="text-center">BR Hack Night</h2>
			    		</div>
			    	</div>
			        
			        <div class="row">
			            <div class="large-12 columns">
			                <div class="body-copy-panel">
			                    
			                    <p>The time has come! Baton Rouge will now be having a monthly Meet Up for Web Developers at Louisiana Tech Park (<a href="www.latechpark.com/" target="_blank">www.latechpark.com/</a>) 7117 Florida Blvd, Baton Rouge, LA 70806 the last Wednesday of every month at 6 pm. </p>

			                    <p>This monthly event is for everyone: professionals, hobbyists and students alike. BR Hack Night isa place for people with a passion for the web to gather and work on ideas and projects in an environment with other creatives. Students are especially welcome to attend. With so many “How to Become a Web ____” resources online, it can be hard to chart the right course. Come and join us and talk to other web enthusiasts and gain some insights from your peers. </p>

			                    <p>The Baton Rouge Web community is large and continues to grow. We need more and more venues where we can get together and help it grow. Everyone is encouraged to bring a computer and get some work done. If you’re stuck, feel free to lean over and (politely) ask your neighbor for some assistance. Or you can just have a friendly chat and talk with others who share your interests in web. The goal of Hack Night is cooperation and community. Whether you’re a code ninja (or samurai or wizard) or a newbie who has never written a line of code, we want you to come and learn the joys of the Web.</p>
			                </div>
			                <a href="https://www.facebook.com/groups/brhacknight/" class="button btn-style" target="_blank">Learn More</a>
			            </div>
			        
			    </section>
			</div>
			<section id="contact">
			    
			</section>

			<!-- <div class="contact-callout">
				<div class="row">
					<div class="large-12 columns">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div> -->

			<div class="recent-blog">
				<div class="row recent-feed">
					<div class="large-12 columns">
						<h2 class="text-center">Recent Blogs</h2>
						
					</div>
					
					<?php 
						$args = array( 'posts_per_page' => '3' );
						$recent_posts = new WP_Query($args);
							while( $recent_posts->have_posts() ) :  
					    		$recent_posts->the_post() ?>
							    <?php echo '<div class="small-12 medium-6 large-4 columns blog-entry">'; ?>
							        <?php if ( has_post_thumbnail() ) : ?>
							            <?php the_post_thumbnail('medium') ?>
							        <?php endif ?>  
							        <a class="title" href="<?php echo get_permalink() ?>"><?php the_title() ?></a> 
							        <!-- <p><?php the_excerpt() ?></p>  -->
							        <a href="<?php echo get_permalink(); ?>" class="button"> Read More</a> 
							    <?php echo '</div>'; ?>
							<?php endwhile; ?>
					<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
				</div>
			</div>


		    <!-- <?php get_sidebar(); ?> -->
		    
		

	</div> <!-- end #content -->

<?php get_footer(); ?>