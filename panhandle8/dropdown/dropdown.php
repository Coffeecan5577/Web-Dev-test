<script src='/lib/js/dropdown.js' type="text/javascript">
		<?php 
		//if (checkmobile() != TRUE and (checkOldIE() != TRUE)){include('dropdown.js');} 
		?>
</script>
<dl class="dropdown">
	<dt id="ql-ddheader" onmouseover="ddMenu('ql',1)" onmouseout="ddMenu('ql',-1)">
		<a id='qlarrow' href="http://www.opsu.edu/">Quick-links</a>
	</dt>
	<dd id="ql-ddcontent" onmouseover="cancelHide('ql')" onmouseout="ddMenu('ql',-1)">
		<div id='ddouter'>
			<ul>
				<?
				include ('/home/opsu/public_html/lib/quicklinks.inc.php');
				?>
			</ul>
		</div>
	</dd>
</dl>
