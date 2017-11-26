<html>
	<head>
		<style>
		</style>
	</head>
	
	<body>
		<ul>
			<li><a href="ThietKeLapTrinhWeb">Thiet ke lap trinh web</a></li>
		</ul>
		<h2>This is h2</h2>
		<?php
			echo("Hello World!");
			echo("<h2>This is index file. Hello php!</h2>");
			$today = getdate();
			//print_r($today);
			echo "<div>Today is <b>".$today["weekday"].", ".$today["mday"]."/".$today["mon"]."/".$today["year"]."</b></div>";
		?>
	</body>
</html>