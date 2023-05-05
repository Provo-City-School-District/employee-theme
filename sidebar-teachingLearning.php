<aside id="sidebar" class="sidebar">
	<ul class="imagelist">
		<li>
			<a href="https://employee.provo.edu/category/employee-news/teaching-learning/">
				<img src="//globalassets.provo.edu/image/icons/news-white.svg" alt="" />
				<span>Teaching & Learning News</span>
			</a>
		</li>
		<li>
			<a href="https://employee.provo.edu/wp-content/uploads/2018/01/01042018-TeacherResourceGuide.pdf">
				<img src="//globalassets.provo.edu/image/icons/submit-news-lt.svg" alt="" />
				<span> Teacher Resource Guide</span>
			</a>
		</li>
	</ul>
	<h2>This Week's Events</h2>
	<?php echo do_shortcode('[calendar id="12181"]'); ?>
	<p><a href="https://employee.provo.edu/teaching-learning/teaching-learning-all-events/">View all events Calendar</a></p>
	<h2>Teaching & Learning Contacts</h2>
		<?php  
			echo file_get_contents('https://provo.edu/directory_page/teaching-and-learning/');
		?>
</aside>