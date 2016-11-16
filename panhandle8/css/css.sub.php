<style>
#menu{
	float:left;
	width:27%;
	margin:0;
}

#r_container{
	float:right;
	width:73%;
	margin:0;
}

#menu, #menusub {
	padding:0;
	/*
	width:234px;
	float:left;
	*/
	text-align:left;
	/*color:#000;*/
	/*font-family:Verdana, Arial, Helvetica, sans-serif;*/
	font-size:1em;
	font-weight:bold;
	letter-spacing:1px;
	}
#menu li{
	padding:.1em 0;
}
#menu>ul, #menusub>ul {
	list-style:none;
	margin:5%;
	padding:.1em 0;
	
	width:80%;
	}
#menu>ul>li, #menusub>ul>li {
	text-transform:capitalize;
	border-bottom:1px solid #CCC;
	display:block;
	padding:.2em 0;
	}
#menu b{
	display:block;
	
	font-size:1.1em;
	border-bottom:1px solid #ccc;
	padding:.2em;
	margin:.2em 0;	
	background: #001F5B;
	color: white;
}
#menu li>ul{
	padding-left:1.5em;
}
#menu ul li a, #menusub ul li a {
	margin:.1em 0;
	padding:.2em;
	text-decoration:none;
	display:block;
	
	color:#333;
	margin:0;
	
	}
#menu>ul>li>a{
	color:#000;
}
#menu ul li a:hover, #menusub ul li a:hover {
	/*background:#001F5B;
	color:white;*/
	background:white;
	color:#c80e24;
	}
.medalion {
	margin:1em 0 10px 0;
	text-align:center;
	display: none;
	}
.medalion>div{
	display:block;
	padding:1em 0;
	border-bottom:1px solid #CCC;
	}
#menu>ul, .medalion{
	width:85%;
	margin:1em auto;
}
</style>

