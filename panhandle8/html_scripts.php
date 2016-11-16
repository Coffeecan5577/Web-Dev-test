<script type="text/javascript" src="/lib/js/slick-1.5.7/slick/slick.min.js"></script>
<script src="/lib/js/lazyYT/lazyYT.js"></script>
<script src="/lib/js/SlickNav/dist/jquery.slicknav.min.js"></script>
<script>
$(document).ready(function(){
	$('#homeSlider').slick({
		dots: true,
	});

    $('#mobileNav').slicknav({
     	prependTo:'#mobile_menu',
     	duplicate: false
    });
    $('#menu').slicknav({
    	label: '',
    	prependTo:'#m_sub_menu'	
    });
  
	$('#featureSlider').slick({
	  mobileFirst: true,
	  lazyLoad: 'ondemand',
	  dots: true,
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll:1,
	  centerMode: true,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 200,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
  	]
    });
    
    $('.js-lazyYT').lazyYT('AIzaSyATZWvblum_qNloh8zqvyounw6KBEq9Yxw');
});
</script>
<?
include_once('html_scripts_tracking.php');
?>