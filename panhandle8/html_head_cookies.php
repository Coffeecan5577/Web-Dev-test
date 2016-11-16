<script src="/lib/js/jsCookie/js.cookie.js"></script>

<script>



$().ready(function(){

/*
if ($.cookie('modal_shown') == null) {
	$.cookie('modal_shown', 'yes', { expires: 7, path: '/' });
	$('#Welcome').reveal();
}*/
if(Cookies.get('Welcome_P')){
	console.log('found a cookie!');
	$( "#Welcome p" ).toggle();
}else{
	Cookies.set('Welcome_P', 'yes', { expires: 7 });
	/*$('#Welcome').reveal();*/
	console.log('dropped a cookie!');
}

$( "#close_welcome" ).click(function() {
  $( "#Welcome p" ).toggle( "slideUp", function() {
    // Animation complete.
    console.log('click!');
    Cookies.remove('Welcome_P');
  });
});


});
</script>