<?php
$OL = 1;
include 'css.php';
?>
<div id="background">
	<div id="bgHead"></div>
</div>
<div id="content">
	<div id="header">
		<a href='/' id='hdr_logo'><img src="/lib/templates/panhandle/img/P_opsu1000.png" alt="Oklahoma Panhandle State University" /></a>
		
		<div id='header_nav'>				
			<div id="quicklinks">
				<ul>
					<li><a href="http://mail.opsu.edu/" class="underline">Email</a></li>
					<li><a href="http://www.opsuonline.org/" class="underline">OPSU Online</a></li>
					<li><a href="https://app.it.okstate.edu/okey/panhandle/">Aggie Access</a></li>
					<li><a title="Student Information System Login" href="https://sis.opsu.edu" class="underline">SIS</a></li>
					<li><a href="http://www.opsu.edu/Personnel/" class="underline">Directory</a></li>
				</ul>
			</div>
			<div id='searchbox'>
					<?
					include ('html_google.php');
					?>
			</div>
			
				<?
				include ('html_headnavbar.php');
				?>
			
		</div>
		
		
		<a href="/" style='z-index:-2;'><div id='header_text'><?
				if($page->globals['title']){
					echo $page->globals['title'];
				}else{
					echo 'Oklahoma Panhandle State University';
				}
				?></div></a>
	</div>
	<div id="wrapper">
		<?
		$page->content->show('menu');
		?>
		
		<div id="r_container">
		<?
		$page->content->show('content');
		?>
		</div>
		<?
		//include 'featured.php';
		$page->content->show('featured');
		?>
		
	</div>
	<div id="footer">
		<div id="footer_info">
	        <? include 'html_footer_info.php';?>
	    </div>
    	<ul id='footlinks'>
			<li><a href="http://www.opsu.edu/dwn/" class="underline">Downloads</a></li>
			<li><a href="http://www.photographyoptions.net/images/opsu1/tour.html" class="underline">Virtual Tour</a></li>
			<li><a href="http://www.opsu.edu/dwn/map.pdf" class="underline">Campus Map</a></li>
			<li><a href='http://www.opsu.edu/Events/' class="underline">Calendar</a></li>
			<li><a href="http://www.opsu.edu/About/?page=Contact" class="underline">Contact Us</a></li>
		</ul>
	</div>
	<br />
	<div>
		<? 
		//include 'html_scripts.php'; 
		include_once('html_scripts_tracking.php');
		?>
	</div>
</div>