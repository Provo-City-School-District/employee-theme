<?php
/*
	Template Name: Employee Home Tiles - sidebar
*/

	get_header();
?>
   <main id="mainContent">
   		<h1 class="visuallyhidden">Employee Support Website</h1>
   		<section class="content employee-home">
   			<?php custom_breadcrumbs(); ?>
   			<article class="currentContent">
				<?php
					$args = array( 'posts_per_page' => 1 , 'category_name'  => 'Messages from Admin');
						// Variable to call WP_Query.
						$the_query = new WP_Query( $args );
						if($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();?>
						   			<h1><?php the_title(); ?></h1>
					   				<?php the_post_thumbnail('thumbnail');?>
					   				<?php the_content(); ?>
					   		</article>
					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
					wp_reset_query();
				?>
   			</article>
   			<article class="slider">
	   			<div class="departmentNews">
				 	<?php
				  		$args = array( 'posts_per_page' => 3 , 'category_name'  => 'Employee News');
						// Variable to call WP_Query.

						$the_query = new WP_Query( $args );
						if($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();?>
							<div class="slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
								  	<span>
								  		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								  		<p><?php echo get_excerpt(); ?></p>
								  	</span>
							  </div>

							<?php endwhile;
						else :
							echo '<p>No Content Found</p>';

						endif;
						wp_reset_query();
					?>
				</div>
   			</article>
   			<section class="departmentResources">
	   			<aside class="threeColumn">
	   				<h2>Human Resource News</h2>
	   				<?php
					$args = array( 'posts_per_page' => 1 , 'category_name'  => 'Human Resource');
						// Variable to call WP_Query.
						$the_query = new WP_Query( $args );
						if($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();?>
					   				<div class="featured-image">
					   					<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="" />
	   								</div>
	   								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					   				<p><?php echo get_excerpt(); ?></p>
					   		</article>
					   	<?php endwhile;
							else :
								echo '<p>This square is a link to Human Resource blog with the latest news story featured.</p>';
					endif;
					wp_reset_query();
				?>
	   			</aside>
	   			<aside class="threeColumn">
	   				<h2>COVID-19 Resources</h2>
		   				<div class="featured-image">
					   		<img src="https://employee.provo.edu/wp-content/uploads/2020/09/covid-resources-2.jpg" alt="" />
	   					</div>
	   				<h3><a href="https://employee.provo.edu/covid-resource-page-for-employees/">COVID Resource Page for Employees</a></h3>
					   	<p>We recognize the extra efforts our employees are putting in during this challenging time and want to express sincere gratitude. Here are some COVID resources we have pulled together to assist you.</p>

	   			</aside>
	   			<aside class="threeColumn">
	   				<h2>Teaching &amp; Learning</h2>
	   				<?php
					$args = array( 'posts_per_page' => 1 , 'category_name'  => 'Professional Development');
						// Variable to call WP_Query.
						$the_query = new WP_Query( $args );
						if($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();?>
					   				<div class="featured-image">
					   					<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="" />
	   								</div>
	   								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					   				<p><?php echo get_excerpt(); ?></p>
					   		</article>
					   	<?php endwhile;
							else :
								echo '<p>This square is a link to Professional Development with the latest story featured.</p>';
					endif;
					wp_reset_query();
				?>
   				</aside>
   			</section>
   		</section>
   		<?php get_sidebar( 'employeeglobalsidebar' ); ?>
   </main>
<?php
	get_footer();
?>