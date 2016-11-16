<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<!--OPSU Main Template-->
	<head>
		<? $page->content->show_group('head'); ?>
	</head>
	<?php ob_flush(); ?>
	<body>
		<?php
		$OL = 1;
		include 'html_theme.php';
		?>
		<style>
			body{
				background-position: 0 -230px;
				margin:0;
				
			}
			#background{
				background-image: url(/img/elements/background.jpg);
				position:absolute;
				width:100%;
				height:40px;
				margin:0;
				padding: 0;
				background-repeat: repeat-x;
				background-position: 0 -20px;
				border-bottom:1px solid;
			}
			#content{
				/*border:2px solid white;*/
				border-top:none;
				border-bottom:none;
				width:850px;
			}
			#header_text{
				text-decoration: none;
			    color: #FFFFFF;
			    font-size: 1.5em;
			    position: absolute;
			    left: -10000px;
			}
			#header_nav{
				float:right;
				background: none;
				height:auto;
				width:75%;
				margin:0;
				padding:0;
			}
			#header_nav > .navbar{
				border:1px solid;
				float:right;
				width:92%
			}
			.navlist{
				padding:.5%; 
			}
			.navlist>li{
				background: #3c3c3c;
				padding:.2em .5em;
			}
			#hdr_logo{
				display:block;
				float:left;
				height:130px;
			}
			#hdr_logo img{
				height:100%;
			}
			#quicklinks{
				float:right;
				text-align:right;
				color: white;
			    /* font-weight: bold; */
			    font-size: 1.2em;
			    margin:.5em;
			}
			#quicklinks li, #quicklinks ul{
				display:inline;
				margin:0;
				padding:0;
			}
			#quicklinks a{
				color:white;
			}
			#searchbox{
				float:right;
				width:100%;
			}
			#searchbox>form{
				float:right;
			}
			
			#menu{
				font-size: inherit;
				width:250px;
				padding: 2px;
			}
			#r_container{
				margin:0 1.4em;
				float:left;
			}
			#footer_info{
				color:inherit;
			}
			#footlinks{
				float:right;
				width:400px;
			}
			#footlinks li{
				display:inline
			}
			#footlinks a{
				color:white;
				font-size:.8em;
			}
			#sm_mail{
				background-image: url(/img/elements/social/sm_mail.png);
			}
			
			
			#footer, #wrapper, #header {
				border:1px solid black;
				padding:.5em .5em;
				margin:0;
				float:left;
				font-size:1em;
			}
			#header{
				background-image: none;
				background-repeat: repeat-x;
				background-position: 0 0px;
				border:none;
				
				height:auto;
				float:left;
				width:100%;
				
				
				font-size: 1em;
			}
			#wrapper{
				background-color: white;
				margin:.2em 0;
				border:1px solid;				
			}
			#footer{
				padding-top:.5em;
				color: #CCC;
				background-color: #3C3C3C;
			}
			
			/*
			#header h1{
				  background-image: url(/img/elements/opsu2.png);
				  margin: 0;
				  background-repeat: no-repeat;
				  background-position: 116px 20px;
				  height: 50px;
				  width: 650px;
				  background-size: 80%;
				  
			}
			*/
			
				#background{
    background: url(/lib/templates/cenveo/img/Background.jpg) no-repeat center;
    background-position: center -20px;
    background-color: #fbfbfb;
    color: #000000;
	}
	#header h1{
		background-image: none;
		height:88px;
	}
	#seal, #ql{
		display:none;
	}
	#banner_container{
		width:110%;
		height:110%;
	}
			
			
			</style>
		<div id="background"></div>
		<div id="content">
			<div id="header">
				
				<div id='header_nav'>				
					<div id="quicklinks" style="padding-right:3px;">
						Quick-links: 
						<ul>
							<li><a href="http://mail.opsu.edu/" class="underline">Email</a></li>
							<li><a href="http://www.opsuonline.org/" class="underline">OPSU Online</a></li>
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
				<a href='/' id='hdr_logo'><img src="/img/elements/OPSU_LOGO_color300.png" alt="Oklahoma Panhandle State University" /></a>
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
	</body>
</html>
