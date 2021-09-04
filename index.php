<!DOCTYPE html>
<html>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
	<link href="bootstrap/css/font-awesome.css" rel="stylesheet">
	<link href="bootstrap/css/style.css" rel="stylesheet">
	<title>Random Number Generator:: myLotto</title>
	<body>
		<div class="row">
			<span>  Hit Win  </span>generate new numbers Win Big! </br>
			<p>&nbsp;</p>
			<h2>
				<?php

				$n=range(1,49);
				shuffle($n);
				for ($x=0; $x< 6; $x++)
				{
				echo $n[$x].' , ' ;
				}
				echo "\n" . "#" . rand(0,9);
				?>
			</h2>
			<p>&nbsp;</p>
			<button class="btn btn-sm btn-primary" type="button" onClick="window.location.reload()">Win	</button>
			<p>&nbsp;</p>

			By Esdy Wanjala </br>
			Web Developer and Content Manager, <a href="http://dwanjala.com" target="new">D. Wanjala</a> </br>
			(+254) 724 486 915 / 784 486 915
		</div>
	</body>
</html>