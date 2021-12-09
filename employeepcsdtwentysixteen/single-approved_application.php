<?php
	get_header();
?>
   <main id="mainContent">
   		<section class="content singlePost">
	   		<?php custom_breadcrumbs(); ?>
   			<article class="activePost">
					<?php
					$galleryArray = get_post_gallery_ids($post->ID);
					if(have_posts()) :
						while (have_posts()) : the_post();?>
				   			<header class="postmeta">
								<h1><?php the_title(); ?></h1>
							</header>
					   			<div class="featured-image-full">
					   			<?php 
									if ( has_post_thumbnail() ) {
									    the_post_thumbnail();
									} else {
										echo '<img src="https://employee.provo.edu/wp-content/uploads/2019/12/no_uploaded.png" alt="" />';
									}
								?>
					   			</div>
					   			<ul class="noblt">    
								    <?php 
									   
									    //NDA Date
									    if(get_field('signed_nda')=='no'){ ?>
										    <li>No NDA signed</li> <?php
									    } else { ?>
										    <li>NDA signed on <?php echo get_field('nda_date');
									    }
									    //NDA link
									    if(get_field('signed_ndadpa')) { ?>
										  <li><a href="<?php echo get_field('signed_ndadpa') ?>">Download Signed NDA/DPA for <?php the_title(); ?></a></li>  
									<?php }
										// Website Link
										if(get_field('link_to_application')) { ?>
											<li><a href="<?php echo get_field('link_to_application') ?>"><?php the_title(); ?> Website</a></li>
									<?php } 
										// Privacy Policy Link 
										if(get_field('privacy_policy_link')) { ?>
											<li><a href="<?php echo get_field('privacy_policy_link') ?>"><?php the_title(); ?> Privacy Policy</a></li>
									<?php } 
										// Terms of Use Link 
										if(get_field('terms_of_use_link')) { ?>
											<li><a href="<?php echo get_field('terms_of_use_link') ?>"><?php the_title(); ?> Terms of Use</a></li>
									<?php } ?>
				   				</ul>
							    <!-- Brief Description -->
									<h2 class="noclear">Description of <?php the_title(); ?></h2>
									<?php 
								    	if(get_field('description')) {
									    	echo get_field('description');
								    	} else {
									    	echo '<p>No Description provided</p>';
								    	}
								    ?>
							    <!-- Additional Information  -->
							    	<h2 class="noclear">Additional Information About <?php the_title(); ?></h2>
							    	<?php 
								    	if(get_field('additional_information')) {
									    	echo get_field('additional_information');
								    	} else {
									    	echo '<p>No additional information provided</p>';
								    	}
								    ?>	
					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
				?>
				<div class="bottom"></div>
   			</article>
   		</section>
   		<?php get_sidebar( 'approvedApplications' ); ?>
   </main>
<?php
	get_footer();
?>