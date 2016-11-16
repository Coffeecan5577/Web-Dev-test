<style>
<?
if($_GET['test_h']){
	?>
#homeSlider>div>div{
	display:none;
}	
#homeSlider>div .first_hero{
	display:block;
}
#homeSlider>div>div.slick-track{
	display:block;
}		
	<?
}
?>

/*

linear-gradient(-30deg, white 32%, silver 55%, white 69%)
linear-gradient(-30deg, white 32%, #CCC 53%, white 69%)
linear-gradient(-30deg, white 32%, #DDD 53%, white 69%)
linear-gradient(-30deg, white 33%, #EEE 56%, white 70%)
*/

#Welcome{
	text-align:center;
    z-index: 500;
    background: white;
    
}
#Welcome0{
    position: absolute;
    border:1px solid silver;
    border-radius:2em;
    box-shadow:3px 3px 23px black;  
}
div #Welcome .open{    
    top: 5em;
}
#Welcome h2, #Welcome p{
	margin:0;
	paddin:.1em;
}
#close_welcome{
	float:right;
}
.slicknav_menu{
	display:none;
}
.gradient{
  background: -webkit-linear-gradient(-30deg, white, white, white, silver, white, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(-30deg, white, white, white, silver, white, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(-30deg, white, white, white, silver, white, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(-30deg, white, white, white, silver, white, white); /* Standard syntax */
	background: linear-gradient(-30deg, white 32%, #DDD 53%, white 69%)
}
.blue{
	color:#001F5B;
}
.red{
	color: #CF0A2C;
}
.gray{
	color: #a7a8aa;
}
.blueAngle:after{
    background: linear-gradient(110deg, #026 92%, white 92%);
    padding: .2em;
    color: white;
    display: inline;
    padding-right: 2.5em;
    padding-left: .7em;
}
.redAngle{
    background: linear-gradient(110deg, #026 92%, white 92%);
    padding: .2em;
    color: white;
    display: inline;
    padding-right: 2.5em;
    padding-left: .7em;
}

#mobile-menu{
	display:none;
}
#mobile_menu{
	display:none;
}
html{
	font-family: Arial;
	font-size: 17px
}
.f_right{
	float:right;
}
.f_left{
	float:left;
}
a, a:visited, a:active {
	color:#001F5B;
}

a:hover {
	text-decoration:none;
	color: #CF0A2C;
	}
	/*ul{
		list-style-type:none;
		padding:0;
	}*/
	
	body{
		background-color: #222;
		padding: 0;
    	margin: 0;
	}
	#bg{
		background: white;
		background: linear-gradient(90deg, #fff 6%, #ddd 23% , #fff 28%);
    bottom: 0;
    height: 100%;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    width: 100%;
    z-index: -10;
	}
	.column{
		width: 50%
	}
	.rotator{
		max-width: 520px;
	}
	.rotator img{
		width:100%;
	}
	.bgBlue{
		background-color:#001F5B;
	}
	.bgRed{
		background-color:#CF0A2C;
	}
	.red{
		color:#CF0A2C;
	}
	.blue{
		color:#001F5B; 
	}
	.grey{
		color:#999;
		color:#9A9A9A;
	}
	#bgRed, #bgBlue{
		position: absolute;
    	width: 100%;
	}
	#bgBlue{
		background-color:#001F5B;
		height: 30%;
	}
	#bgRed{
		background-color:#CF0A2C;
		height: 50%;
		top:23%;
		border-top:2px solid white;
		border-bottom:1px solid;
	}
	#header{
		   
	    position: relative;
	    border: 0;
	    margin: 0 auto;
	    width: 100%;
	    margin: 0;
	    background-color:white;
		border: 1px solid white;
	    border-left: 0;
	    border-right: 0;
		   
	}

	#innerheader{
		width: 100%;
	    position: relative;
	    background-color: white;
	    margin: 0 auto;
	    border-bottom:4px solid #c80e24;
		border-top:4px solid #001F5B;
	}
	#logo{
		width:28%;
		float:left;
		margin-left:2%;
		margin-top:.5em;
		
	}
	#logo>img{
		width:100%;
		display:block;
	}
	#head_focus{
		float:right;
		margin-right: 2%; 
		width:25em;
	}
	#quicklinks{
		margin: .5em 0;
		float:right;
	}
	#quicklinks li{
		padding:0 .5em;
		border-right: 1px solid silver;
	}
	#quicklinks li:last-child{
		
		border:0;
	}
	#searchbox{
		margin:.5em auto;
		text-align: right;
		margin: .2em;
	}
	#head_nav{
		float:right;
		margin: 0;
		margin-top:1em;
		margin-right: 8%;
	}
	#head_nav ul{
		list-style-type:none;
		padding:0;
		margin:0;
	}
	}
	#head_nav>ul{
		    list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			/*background-color: #333333;*/
	}
	#nav>li{
		float:left;
		/*border-left: 1px solid whitesmoke;*/
	}
	#nav>li:first-child{
		float:left;
		border-left: 0;
	}
	#nav>li>a{
	    display: block;
	    
	    text-align: center;
	    padding: .8em;
	    text-decoration: none;
	    font-size: 1.2em;
	}
	#nav>li>a:hover{
		 background-color: whitesmoke;
	}
	#nav>li> a.nav_app{
		 background-color: #026;
		 color:white;
	}
	 #nav>li> a.nav_app:hover{
		 background-color: #359;
	}
/*------------------------------------*\
    NAV
\*------------------------------------*/
#nav{
    list-style:none;
    font-weight:bold;
    margin-bottom:10px;
    float:left; /* Clear floats */
    width:100%;
    /*position:relative;*/
    z-index:500;
    
}


/*--- DROPDOWN ---*/
#nav>li>ul{
	background:white;
    list-style:none;
    position:absolute;
    width:80%;
    margin:0 auto;
   left:-9999px; /* Hide off-screen when not needed (this is more accessible than display:none;) */
   padding-top: 0;
   border:1px solid silver;
   border-top: 4px solid #c80e24;
   
}
#nav>li>ul>li{
	float:left;
	width:20em;
	margin:.6em;
	list-style-type:none;
	margin-bottom: .5em;
}
#nav ul>li{
    padding-top:1px; /* Introducing a padding between the li and the a give the illusion spaced items */
    float:none;
}
#nav ul>li>ul>li{
   padding:0; /* Introducing a padding between the li and the a give the illusion spaced items */
  margin: 0; 
   border-top:1px solid silver;
}


#nav>li ul{
	list-style-type:none;
	padding:0;
}
#nav>li:hover ul{ /* Display the dropdown on hover */
    left:10%; /* Bring back on-screen when needed */
   z-index: 5;
   border-bottom:1px solid silver;
}
#nav>li:hover>a{ /* These create persistent hover states, meaning the top-most link stays 'hovered' even when your cursor has moved down the list. */
    background:whitesmoke;
}
#nav li:hover ul a{ /* The persistent hover state does however create a global style for links even before they're hovered. Here we undo these effects. */
    text-decoration:none;
}
#nav>li>ul>li>b{
	font-size:1.3em;
}

#nav li:hover ul li a:hover{ /* Here we define the most explicit hover states--what happens when you hover each individual link. */
    color: #c80e24;
    /*background:whitesmoke;*/
}
#nav>li>ul>li>ul>li{ /* Here we define the most explicit hover states--what happens when you hover each individual link. */
    /*background:white;*/
}
#nav>li>ul>li>ul>li:hover{ /* Here we define the most explicit hover states--what happens when you hover each individual link. */
   /*background:white;
   color:#c80e24;*/
}
#nav>li>ul>li>ul>li>a{ /* Here we define the most explicit hover states--what happens when you hover each individual link. */
    /*background:white;*/
   display:block;
   padding:.3em .2em
}
#nav>li>ul>li>ul>li>a:hover{ /* Here we define the most explicit hover states--what happens when you hover each individual link. */
   background:white;
   color:#c80e24;
}


	
	#content{
		margin:0 auto;
		padding-bottom:1em;
		width:95%;
		/*background-color: white;*/
	}
	#news_events{
		background-color: white;
		margin: 0 auto;
		width: 100%;
		padding-bottom: 4em;
		border-top:1px solid silver;
		border-bottom:1px solid #999;
		/*background: linear-gradient(45deg, whitesmoke, white, white);*/
	}/*
	#menu>ul, .medalion {
    margin: .5em auto;
    padding: .5em;
    background: white;
    border-radius: .5em;
 }*/
	#homeSlider .slick-slide{
		position:relative;
	}
	.hero_cap{
		position: absolute;
	    border: 1px solid white;
	    border-radius: .5em;
	    color:white;
	    font-weight:bold;
	    font-size:1.5em;
	    background:rgba(255,255,255,.3);
	    
	}
	.hero_cap a{
		display:block;
		padding:.5em;
		
	}
	.hero_cap a:hover{
		text-decoration:none;
	}
	.hero_cap:hover{
	    background:white;
	    border:1px solid silver;
	}
	
	.hero_cap2{
		position: absolute;
	    border: 4px solid white;
	    color:white;
	    font-weight:bold;
	    font-size:1.5em;
	}
	.hero_cap2 a{
		display:block;
		padding:.5em;
		color:white;
	}
	.hero_cap2 a:hover{
		background:#001F5B;
		text-decoration:none;
	}
	.hero_cap3{
		position: absolute;
	    color:white;
	   font-size:1.3em;
	   text-align:center;
	}
	.hero_cap3 .hero_desc{
		
	}
	.hero_cap3 .hero_title{
		 font-weight:bold;
	    font-size:1.5em;
	}
	.hero_cap3 a{
		display:block;
		padding:.5em;
		color:white; 
		border: 4px solid white;
		background: rgba(0,0,0,0.1);
	}
	.hero_cap3 a:hover{
		background:#001F5B;
		text-decoration:none;
	}
	
	#news_events h4{
		
		margin:1em auto;
	}
	#news_events p{
		
		margin:.5em auto;
	}
	#r_container .columnbox{
		width:50%;
		margin:0 auto;
		float:left;
	}
	.columnbox>div{
		margin: 0 .2em;
	}
	#r_container .columnbox h2, #r_container .columnbox h3 {
		font-size:1.3em;
	}


	.columnbox p.inc_item{
		padding: .2em 0 .8em 0;
		margin: 0;
	} 
	.columnbox a.inc_title{
		font-size: 1.1em;
	}

	.columnbox p.inc_item, .columnbox .item{
		border-top:2px solid silver;
		margin-top:.5em;
	}
	.columnbox a.inc_title,  .columnbox .item>h4>a{
	    
	    color: #001F5B;
	}
	

.shortTitle{
	
    overflow: hidden;
    display: block;
    text-decoration:none;
}
.truncate, .shortTitle{
  width: 98%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.e_title a{

    font-size: 1.1em;
    color: #555;
    font-weight: bold;	
}
.e_details{
	font-size: initial;
}





	
	
	
	
	
	#feature{
		margin: 0 auto;
		width:100%;
		/*height:200px;*/
		background-color: #999;
		padding:0;
		position:relative;
		
		
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    background-size: cover;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    text-align:center;
		
	}
	#feature div.bg_dim{
		width:100%;
		height:100%;
		background-color: rgba(0,0,0,.5);
		background: #a7a8aa;
		background:linear-gradient(90deg, #a7a8aa, #bbb , #a7a8aa);
		padding:0;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    background-size: cover;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    position:absolute;
	}

	#feature h2{
		text-align: center;
	    margin: 0;
	    color: #001F5B;
	    background: linear-gradient(-45deg, white 35%, silver, white 65%);
	    background:transparent;
	    padding: 0;
	    padding-top:10px;
	    font-size: 0;
    	opacity:1;
    	position:absolute;
    	width:100%;
    	z-index: 499;
	}
	#feature img.headImg{
		display:inline;
	}

	
	
	
	
	
	
	
	
	
	
	
/*Footer*/	
	
	
	#footer a{
		color: #ccc;
	}
	#footer a:hover{
		color: white;
	}
	#footer{
		margin:0 auto;
		background-color:#333;
		width:100%;
		color: silver;
		font-size: 1.1em;
	}
	#footer ul{
		padding:0;
		margin:0;
		list-style-type:none;
	}
	#footer li{
		padding:.1em .4em;
	}
	#footer #linklist{
		margin-bottom: .5em;
	}
	#footer #linklist>li{
		float:left;
		width:21%;
		padding:0;
		margin:0 2%;
	}
	#footer #linklist>li>b{
		font-size: 1.3em;
		color: white;
	}
	#linklist>li ul li{
		margin: .2em 0;
	}
	#footer .f_left{
		width:55%;
		padding-left: 5%;
	} 
	
	#footer .f_right{
		width:35%;
		padding-right: 5%;
	}
	#footer #seal{
		float:left;
		width: 200px;
	}
	#footer #foot_address{
	    vertical-align: middle;
	    padding-left: .5em;
	    float: left;
    }
    #footer #foot_address b{
		padding-bottom:.1em;
		margin-bottom: .2em;
		display:block;
		color:white;
		font-size: 1.3em;
    }
	#footer #end{
		background-color: black;
		text-align:center;
	    padding: .2em;
	    color: #777;
	    border-top: 2px solid #222;
	}
	


/*social*/

	#sm_list a{
		width: 40%;
		height: initial;
		margin:0 auto;
		display:block;
	}
	#sm_list li{
		float:left;
		padding:.5em 0;
		margin:0;
		width:20%;
		text-align:center;	
	}
	#sm_list li:hover{
background:linear-gradient(90deg, transparent 25%, #666 50%, transparent 75%);
color:#AAA;
	}
	
	#sm_list{
		float:left;
		margin:0;
		width:85%;
	}

#sm_list i {
	font-size: 3em;
    position: relative;
}
#socialbar{
	padding:0;
	border:1px solid silver;
	border-left:0; 
	border-right:0;
	margin-bottom:1em
}
#socialbar>h2{
	float:left; 
	width:15%;
	margin:0;
	padding: 0;
}
#socialbar>h2>span{
	margin:.7em 0;
	display:block;
	text-align:center;
}
 
/*replace the content value with the
corresponding value from the list below*/
 
#sm_list i:before {
    left: 0;
}

	
	
	.tri{
		border-right: .5em solid;
	    border-bottom: .5em solid transparent;
	    border-top: 0 solid transparent;
	    height: 0;
	}
	.nobull{
		list-style-type:none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	}
	.nobull>li{
		float:left;
		padding: 0 .2em;
	}
	br, .clear{
		clear: both;
	}
	
	
	


	
	
	
	
	

/*
.columnbox>h3 {
    background-color: #CF0A2C;
    padding: 0;
    border-bottom: 0;
    border-radius: 23px;
    border: 6px solid #001F5B;
    border-left: 2px;
    border-bottom: 0;
    border-top-left-radius: 0;
 }*/

#homeSlider .slick-dots {
	width: 100%;
}
   
   
/*search*/
#q ,.m_searchbox input[type=text]{
    border: 1px solid silver;
    border-radius: .5em;
    font-size: 1.1em;
    padding: .2em 0.5em;
}
#searchbox input[type=submit], #searchbox input[type=submit]:hover, .m_searchbox input[type=submit] {
	font-size: 1.1em;
	    padding: .2em 0.5em;
	position:relative; 
	left:0;
	border:1px solid #adc5cf;
	border-radius:.5em;
	
	background: whitesmoke; /* Old browsers */
	background: -moz-linear-gradient(top, whitesmoke 0%, silver 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,whitesmoke), color-stop(100%,silver)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, whitesmoke 0%,silver 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, whitesmoke 0%,silver 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, whitesmoke 0%,silver 100%); /* IE10+ */
	background: linear-gradient(top, whitesmoke 0%,silver 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='whitesmoke', endColorstr='silver',GradientType=0 ); /* IE6-9 */
	
	
	
		
	color:#666;
	cursor: pointer;
}
#searchbox input[type=text]:focus{
	outline:none;
}

#searchbox input[type=submit]:hover, #searchbox input[type=submit]{
	border-radius:0;
	background-image: url(/lib/templates/panhandle5/img/iconsearch128.png);
    background-size: 2em;
    background-repeat: no-repeat;
    background-color: linear-gradient(white blue);
    color: transparent;
    width: 2em;
    border: 0;
    background-position: -4px -6px;
    margin-left:.1em;
}
.ui-accordion .ui-accordion-header {
	margin-bottom:0;
}
</style>
<?
include 'css/css.sub.php';
include 'css/MobileNav.css.php';
?>

<style>
@media (max-width: 1580px) {
	#head_nav{
		margin-right:4%;
	}
	#logo{
		width:31%;
	}
}
@media (max-width: 1380px) {
	#logo{
		margin-left: 1%;
	}
	#head_nav{
		margin-right:1%;
	}
	#feature{
		font-size: 85%;
	}
}
@media (max-width: 960px) {
  .column {
    width:100%;
  }
  .columnbox{
  	width:100% !important;
  	}
  #feature .headImg{
  	width:85%;
  }
  #footer .f_left, #footer .f_right{
  	width:96%;
  	margin: auto 2%;
  	padding: 0;
  	
  }
  #footer .f_right {
    width: 70%;
    margin: auto 14%;
  }
      
  #footer #linklist>li {
    float: left;
    width: 21%;
    padding: 0;
    margin: .2em 2%;
    min-width: 150px;
   }
  
  #head_focus{
  	position:absolute;
  	width:34em;
  	margin: 0;
  	right:0;
  }
  #searchbox{
  	float:left;
  }
  #quicklinks{
  	float:left;
  }
  #q{
  	width:5em;
  }
  #head_nav{
  	/*display:none;*/
  	margin:0;
  	margin-top: .5em;
  	margin-right: 1%;
    font-size: .85em;
  }
  #logo{width:90%}
  #socialbar>h2{
	display:none;
	}
	#sm_list{
		width:100%;
	}
	.hero_cap{
		height:initial !important;
		width:initial !important;
		top:initial !important;
		left:initial !important;
		margin:5% !important;
		font-size: 1.5em !important;
	} 
	  .hero_cap3{
		font-weight:bold;
		font-size: 1em !important;
	}
	#sm_list i {
    	font-size:2.5em;
	}
	#sm_list li {
    	width:18%;
	}
}
@media (max-width: 768px) {
	#featureSlider .slick-slide {
	    margin-top: 150px !important;
   }
	#head_focus{
		top:-50px;
		width:15em;
		
  }
  #mobile-menu{
  	display:block;
	height:32px;
  	
  }
  #mobile_menu{
  	display:block;
  }
  .slicknav_menu{
  	display:block;
  }
  #searchbox{
  	display:none;
  }
  #q{
  	width:10em;
  }
 /*scale hero*/
  .hero_cap3{
		
		
		left:0  !important;
		bottom:2em !important;
		width:100% !important;
	}
	.hero_cap3 a{
		width:50%;
		margin:0 auto;
		padding: .2em;
	}
.hero_cap3:before{
	display:block;
	width:100%;
	height:100%;
	position:absolute;
}

#homeSlider .slick-dots{
	margin-top: 0 !important;
	background:silver !important;
}
  /*move to icons*/
  #head_nav, #quicklinks, #menu{
  	display:none;
  }
  #r_container{
  	width:100%;
  	background: rgba(255,255,255,.5);
  	margin:0 auto;
  }
  
  
}
@media (max-width: 480px) {
	#footer #linklist>li {
	    width: 100%;
	}
	.hero_cap{
		font-size: 1.1em !important;
	} 
	.hero_cap3{
		left:0  !important;
		top:.2em !important;
		width:100% !important;
		font-size: 1em !important;
	}
	#featureSlider .slick-slide {
	    margin-top: 115px !important;
   }
}

</style>

<?

include 'css/css.pdirjob.php';
include 'css/misc.css.php';
include 'css/downloads.css.php';
include 'css/library.css.php';
include 'css/featureSlider.css.php';
include 'css/f_tube.css.php';
include 'css/newsPage.css.php';
include 'css/featurette.css.php';

//include 'css.col.php';
//include 'css/css.news.php';
//include 'css/css.events.php';
?>
<style>
@media print {
    body, #bg, #innerheader, #content, #r_container, #footer{
    	background: transparent !important;
    	color:black !important;
    	font-size: 1em !important;
    }
    #mobile_menu, #menu, #feature, #socialbar, #footer .f_left, #Welcome, #end{
    	display:none;
    	
    }
    #logo{
    	width:50%;
    }
    #footer .f_right{
    	font-size: 12px;
    	width:auto;
    	float:none;
    }
    a {
    	color: #001f5b !important;
    }
}
</style>