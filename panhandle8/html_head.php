<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
//<title>Panhandle State Home</title>
echo "<title>{$page->title}</title>\n";
echo "<link rel='icon' {$html_head['icon']} />\n";
echo "<meta http-equiv='Content-Type' content='{$html_head['contentType']}' />\n";
echo "<meta name='google-site-verification' content='2qsmU4GRwfO6sSnw7K8tlotV3SE9GzKjfMoQa3b2n2A' />\n";
echo $page->get_meta();
if ($html_head['http-equiv'] == 'IE8'){
	echo "<meta http-equiv='X-UA-Compatible' content='IE=8'/>\n";
}

?>

<link rel="icon" type="image/png" href="/lib/faviconP.png" />
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="/lib/css/font-awesome-4.6.3/css/font-awesome.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<style>
	#homeSlider>div{
		display:none;
	}
	#homeSlider>div.first_hero{
		display:block;
	}
	#homeSlider>div.slick-list{
		display:block;
	}
</style>
