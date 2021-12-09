<aside id="sidebar" class="sidebar technology">
	<ul class="imagelist">
		<li>
			<a href="https://employee.provo.edu/category/employee-news/technology-support/">
				<img src="//globalassets.provo.edu/image/icons/news-white.svg" alt="" />
				<span>Technology Support News</span>
			</a>
		</li>
		<li>
			<a href="https://sos.splashtop.com/">
				<img src="//globalassets.provo.edu/image/icons/tech-2-lt.svg" alt="" />
				<span>Open a Remote Session</span>
			</a>
		</li>
	</ul>
	<h2>Technology Contacts</h2>
		<?php 
			
			echo file_get_contents('https://provo.edu/directory_page/tech-support-admin-sidebar/');
			echo file_get_contents('https://provo.edu/directory_page/tech-support-staff-sidebar/');	
			echo '<h3>Field Technicians</h3>';
			echo file_get_contents('https://provo.edu/directory_page/technology-field-tech/');	
		?>
</aside>