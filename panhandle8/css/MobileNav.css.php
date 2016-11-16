<link rel="stylesheet" href="/lib/js/SlickNav/dist/slicknav.css" />

<style>
	#header>#mobileNav{
		display:none;
	}
	.slicknav_nav{
		font-size: 1.5em;
	}
	body>.slicknav_menu{
		padding:0;
	}
	body>.slicknav_menu .toplinks{
		background: #a7a8aa;
		background: linear-gradient(-30deg, white 32%, #DDD 53%, white 69%);
		border-bottom: 4px solid #c80e24;
    border-top: 4px solid #001F5B;
	}
	body>.slicknav_menu  .slicknav_nav .toplinks a{
		
		color: #001F5B;
	}
	body>.slicknav_menu .slicknav_nav{		
		padding-bottom:.1em;
		border-bottom:1px solid #333;
	}




	#mobile_menu .slicknav_menu{
		padding:0;
	}
	#mobile_menu .slicknav_menu .toplinks{
		background: #a7a8aa;
		background: linear-gradient(-30deg, white 32%, #DDD 53%, white 69%);
		border-bottom: 4px solid #c80e24;
    border-top: 4px solid #001F5B;
	}
	#mobile_menu .slicknav_menu  .slicknav_nav .toplinks a{
		
		color: #001F5B;
	}
	#mobile_menu .slicknav_menu .slicknav_nav{		
		padding-bottom:.1em;
		border-bottom:1px solid #333;
	}


	#m_sub_menu .slicknav_menu{
		padding:0;
	}
	#m_sub_menu .slicknav_nav{
		border: 1px solid #333;
	}
	.nav_app_li{
	background: #001F5B;
	}






	#m_sub_menu{
		display:none;
	}
	
		@media (max-width: 760px) {
			#content{
				position:relative;
			}
			#m_sub_menu{
				display:block;
				position:absolute;
				width:100%;
				right:0;
				top:.3em;
				z-index: 1000;
			}
			#m_sub_menu .slicknav_menu{
				background:transparent;
				
			}
			#m_sub_menu .slicknav_nav{
				background:#a7a8aa;
				
			}
			#m_sub_menu .slicknav_nav a{
				
				color: #001F5B;
			}
			#m_sub_menu .slicknav_icon-bar{
				display:none;
			}
			#m_sub_menu .slicknav_icon-bar:first-of-type{
				color:transparent;
				background:transparent;
				display:block;
				width: 0;
				height: 0;
				border-style: solid;
				border-width: 10px 10px 0 10px;
				border-color: #fff transparent transparent transparent;
			}	
		}
	




	
	
	
</style>
