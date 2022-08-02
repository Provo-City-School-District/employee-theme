<?php
	get_header();
?>
     <main id="mainContent">

   		<section class="content page">
   		<?php custom_breadcrumbs(); ?>
   			<article class="activePost">

				<?php
					do_shortcode( '[modified-date]' );
					if(have_posts()) :
						while (have_posts()) : the_post();?>

						   			<h1><?php the_title(); ?></h1>
					   				<?php the_content(); ?>

					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
				?>
				<div class="clear"></div>
   			</article>
   		</section>
   		<?php
	   		$sidebar = get_field('sidebar');
	   		get_sidebar( $sidebar );
	   	?>
   </main>
<?php
	get_footer();
?>
