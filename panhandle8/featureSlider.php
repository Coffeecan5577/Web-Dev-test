<div id='homeSlider'>
	<?
	//echo imgArrayToSliderString($imgArray, $imgDir, $rootDir, true); 
	echo imgArrayToSliderString($imgArray, $imgDir, $rootDir, false); 
	//echo getSliderPicContentArray($rootDir, $imgDir);
	include 'Home.testimonial.php';
	?>
	<div>
		<iframe class="yt_slide" src="<? echo $videoURL; ?>" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<script>
$(document).ready(function(){
	var homeSlider = $('#featureSlider');
		
	homeSlider.slick({
	  lazyLoad: 'ondemand',
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll:1,
	  centerMode: true,
	  variableWidth: true,
    });
});
</script>