<style>
	#featureSlider{
		width:100%;
		margin:0;
		overflow:hidden;
		/*margin-bottom: 2em;*/
	}
	#featureSlider .slick-slide{
		position:relative;
		margin:1em;
		margin-top:200px;
		border:1px solid;
		/*height:350px;*/
	}
	#featureSlider .slick-slide:focus {
	    outline: 1px;    
	    border: 1px solid;
	}
	}
	#featureSlider .s_img {
		height:390px;
		margin: 0 auto;
	}
	#featureSlider .s_caption, #featureSlider .s_title{
	position: absolute;
    padding: 0; 
    width:100%;
   }
   #featureSlider div.s_caption>p, #featureSlider div.s_title>p{
   	background-color: #111;
   	opacity: .7; 
   	color:white;
    font-weight: bold;
   }
   #featureSlider div.s_caption>p:hover, #featureSlider div.s_title>p:hover{
	background-color: black;
    opacity: .9;
    color:white;
   }
   #featureSlider .s_caption p, #featureSlider .s_title p{
   	margin:0;
   	padding:.2em;
   	font-size: 1em;
   }
   #featureSlider .s_title{
    /*top: 7px;*/
    /*top:72%;*/
   bottom:10%;
    font-size:1.4em;
   }
   #featureSlider .s_caption{
    bottom: 10px;
    display:none;
   }
   #featureSlider .yt_slide{
   	margin-bottom: -5px;
   	height:390px;
   	width:580px;
   }
	#featureSlider .slick-dots{
		margin:0 auto;
		width:100%;
		position:relative;
		bottom:auto;
		background-color: white;
		opacity: .8;
    	border-top: 1px solid silver;
	}
	#featureSlider .slick-dots li button:hover{
		color:silver;
		opacity:.75;
	}
	#featureSlider .slick-dots li button:before{
		font-size: 14px;
		opacity:.25;
		
		
	}
	#featureSlider .slick-dots li.slick-active button:before{
		opacity:.5;
	}
	#featureSlider .slick-prev, #featureSlider .slick-next{
		top:20%;
		font-size: 30px;
		width:45px;
		height:50px;
		z-index: 800;
	}
	#featureSlider .slick-prev:before, #featureSlider .slick-next:before{
		font-size: 45px;
	}
		
	#featureSlider .slick-next{
		right:5px;
	}
	#featureSlider .slick-prev{
		left:5px;
		
	}
	#featureSlider .draggable{
		z-index:600;
	}
	
	#featureSlider .slick-slide img {
    display: block;
    width: 100%;
    /*min-width:300px*/
	}/*
	#featureSlider .slick-slide{
		max-width:500px;
	}*/
	#featureSlider iframe.yt_slide {
	    
	    width: 100%;
	}
	
	#featureSlider .lazyYT-container {
	    position: absolute;
	    top: 0;
	    width: 100%;
	    height: 25%;
	}

</style>
<link rel="stylesheet" href="/lib/js/lazyYT/lazyYT.css">