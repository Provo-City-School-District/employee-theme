<?php
/*
	Template Name: Employee Home Tiles - sidebar
*/
	get_header();
?>
   <main id="mainContent">
   		<h1 class="visuallyhidden">Employee Support Website</h1>
   		<section class="employee-home">
		   <div class="tippytop">
		   <p><em>The tools you need to succeed at PCSD</em></p>
			<p class="email"><a href="https://mail.google.com/">Email Login</a></p>
		   </div>
		   <nav class="successTools">
			   <?php
			   wp_nav_menu( array(
				   'menu'           => '216', // Do not fall back to first non-empty menu.
				   'theme_location' => '__no_such_location',
				   'fallback_cb'    => false // Do not fall back to wp_page_menu()
			   ) );
			   ?>

		   </nav> <!-- end class succeedTools -->
		   <section class="teasers">
			   <?php
					  $the_query = new WP_Query( array( 'posts_per_page' => 3 , 'category_name'  => 'frontpage_highlights' ) );
					  if($the_query->have_posts()) :
						  while ($the_query->have_posts()) : $the_query->the_post();?>
								 <a href="<?php the_permalink(); ?>"   style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
								 	<article>
									    <p><?php  the_title();  ?></p>
										<i class="arrow"></i>
								 	</article>
								 </a>
							 <?php endwhile;
							  else :
								  echo '<p>No Content Found</p>';
					  endif;
				  ?>
		   </section>
		   <nav class="employeeHighlights">
		  		<ul>
			  		<li><a href="https://employee.provo.edu/employee-district-events-calendar/"><i class="calendar"></i> <strong>New & Improved Employee Calendars</strong></a></li>
			  		<li><a href="https://employee.provo.edu/news/"><i class="news"></i> <strong>Employee News</strong> </a></li>
			  		<li><a href="https://employee.provo.edu/category/weekly-notification-archive/"><i class="notif"></i> <strong>Access Weekly Notification</strong></a></li>
		  		</ul>
			</nav> <!-- end class succeedTools -->
			<nav class="employeeLinks">
				<div>
					<h2>Departments</h2>
						<?php
						   wp_nav_menu( array(
							   'menu'           => '214', // Do not fall back to first non-empty menu.
							   'theme_location' => '__no_such_location',
							   'fallback_cb'    => false // Do not fall back to wp_page_menu()
						   ) );
						?>
				</div>
				<div>
					<h2>District Systems</h2>
						<?php
						   wp_nav_menu( array(
							   'menu'           => '217', // Do not fall back to first non-empty menu.
							   'theme_location' => '__no_such_location',
							   'fallback_cb'    => false // Do not fall back to wp_page_menu()
						   ) );
						?>
				</div>
				<div>
					<h2>Policies, Forms & Documents</h2>
						<?php
						   wp_nav_menu( array(
							   'menu'           => '215', // Do not fall back to first non-empty menu.
							   'theme_location' => '__no_such_location',
							   'fallback_cb'    => false // Do not fall back to wp_page_menu()
						   ) );
						?>
				</div>
			</nav> <!-- end class succeedTools -->


		</section>
   </main>
<?php
	get_footer();
?>
