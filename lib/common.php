<?php

function printMetatags($where) {
  echo '<meta content="Asili nido dosson mago di oz cielo azzurro" name="description" />';
  echo '<meta content="asili nido scuola materna dosson treviso asilo mago di oz cielo azzurro '.$where.'" name="keywords" />';
  echo '<meta content="Asili nido dosson '.$where.'" itemprop="name" />';
  echo '<meta content="Asili nido dosson mago di oz cielo azzurro '.$where.'" itemprop="description" />';
  echo '<meta content="Asili nido dosson mago di oz cielo azzurro '.$where.'" property="og:title" />';
  echo '<meta content="Cronycle" property="og:site_name" />';
  echo '<meta content="Cronycle transforms your Twitter and RSS feeds into a beautiful, living archive of the stories you care about." property="og:description" />';
}

function doGoogleAnalytics() { 
	
	?>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-46799747-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<?

}

function doMenu($active) {
	?>
	<table width="100%" class="menu">
		<tr valign="middle">
			<td <?php if($active == "chisiamo") echo 'class="active"'; ?>><a href="chisiamo.php" title="Chi siamo">Chi siamo</a></td>
			<td <?php if($active == "cosafacciamo") echo 'class="active"'; ?>><a href="cosafacciamo.php" title="Cosa facciamo">Cosa facciamo</a></td>
			<td <?php if($active == "foto") echo 'class="active"'; ?>><a href="foto.php" title="Foto">Foto</a></td>
			<!-- td <?php if($active == "strutture") echo 'class="active"'; ?>><a href="strutture.php" title="Strutture">Strutture</a></td -->
			<td <?php if($active == "contatti") echo 'class="active"'; ?>><a href="contatti.php" title="Contatti">Contatti</a></td>
		</tr>
	</table>
	<?php
}

function doHeader() {
	?>
	<div class="logo">
		<a href="index.php" title="Vai alla home page"><img src="static/logo.gif" /></a>
	</div>
	<?php
}

?>