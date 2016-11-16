<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<!--OPSU Main Template-->
	<head>
		<? 
		//$page->content->show_group('head');
		include 'html_head.php'; 
		?>
	</head>
	
	<body>
<?
include 'css.php';
?>
<div id='mobile_menu'></div>
<div id="bg"></div>	
<?php ob_flush(); ?>
<div id='header'>
	<div id="Welcome" class="open">
		<?
		$getVars = '&'.getVars();
		$oldPageURL = './?template=opsu'.$getVars;
		?>
		<strong>Welcome to the new opsu.edu!</strong>
		<a href="http://www.opsu.edu/About/?page=Contact">Let us know what you think.</a>
		If you need to access the old website, <a href='
		<? echo $oldPageURL; ?>
		'>it can still be found here</a>.
		<!--<a id="close_welcome">
		  Close
		</a>-->
	</div>
	<? include 'mobile_menu.php'; ?>
	<!--<div id="bgBlue"></div>
	<div id="bgRed"></div>-->
	<div id="innerheader" class="gradient">	
		<div>
			<a id='logo' href='/'><img src="/lib/templates/panhandle/img/P_opsu1000.png" alt="Oklahoma Panhandle State University" /></a>
		</div>
		
		<div id='head_focus'>
			<div id='quicklinks'>
				<ul class="nobull">
						<li><a href="http://www.opsu.edu/Students/">Students</a></li>
						<li><a href="http://www.opsu.edu/FacultyStaff/">Faculty &amp; Staff</a></li>
						<li><a href="http://www.opsu.edu/Alumni/index.php">Alumni</a></li>
						<li><a href="http://my.opsu.edu">myOPSU Portal</a></li>    		
				</ul>
			</div>
			
			<div id='searchbox'><? include ('html_google.php');	?></div>
		</div>
		
		
		<div id="head_nav">
			<ul id="nav" class="navlist">
			<li class="first"><a href="http://www.opsu.edu/About/">About OPSU</a>
				<? include 'html_head_nav_about.php'; ?>
			</li>
			
			<li><a href="http://www.opsu.edu/Admissions/">Admissions</a>
					<? include 'html_head_nav_adm.php'; ?>
			</li>
			<li><a href="http://www.opsu.edu/Academics/">Academics</a>
					<? include 'html_head_nav_acd.php'; ?>
			</li>
			<li><a href="http://www.opsuaggies.com">Athletics</a></li>
			<li><a href="http://www.opsu.edu/Offices/Admissions/Request-Info/">Request Info</a></li>
			<li><a class="nav_app" href="http://www.opsu.edu/Offices/Admissions/?page=Apply">Apply Online</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div id='content'>
	<?
	if($page->get_URL('path') == '/' or ($page->get_URL('path') == '/index.php')){
	//if($page->get_URL('path') == '/' or stristr($page->get_URL('path'),'index')){
		$page->content->show('content');
	}else{
		if($page->content->show('menu') !== FALSE){
		?>	
		<!--Menu-->	
		<div id='m_sub_menu'>
			
		</div>
		<?		
		}else{
		?>
		<style>
			#r_container{
				/*width:75%;*/
				float:none;
				margin: 0 auto;
			}
			#bg{
				background: linear-gradient(90deg, #fff 6%, #eee 23% , #fff 28%);
			}
		</style>
		<?
		}
		?>

		<div id='r_container'>
			<? $page->content->show('content');?>
		</div>
		<div class="clear"></div>
		<?
	} ?>
	
</div>

<div id='footer'>

	<? include ('html_footer_info.php');	?>

	
</div>
<?
include_once('html_scripts.php');
?>
	</body>
</html>