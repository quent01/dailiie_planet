<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="Images/Icones/favicon.png">
		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/styledailiie.css" />
		<link rel="stylesheet" href="css/section.css"/>
		<link rel="alternate" type="application/rss+xml" href="https://dailiieplanet.iiens.eu/feed/rss.xml" />

		<?php include("google_analytics.php"); ?>

		<title>Dailiie Planet - Download</title>

		<!--[if lt IE 9]>
        	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	</head>

	<body>
		<header>
			<?php include("templates/_header.php"); ?>			
		</header>

		<div id="main_with_section">
			<header>
				<a class="fisrt" href="Ancien_numero.php?serie=normal">Normal</a>
				<a href="Ancien_numero.php?serie=campagne_2013-2014">Campagne 2013-2014</a>				
			</header>
			<div id="main">
				<?php
					if(isset($_GET['serie'])){
						$serie = $_GET['serie'];
						if ($serie == "normal") {
							include("templates/_numero.php");
						}
						else if ($serie == "campagne_2013-2014") {
							include("templates/_campagne_2013_2014.php");
						}
					}	
					else
						include("templates/_numero.php");
				?>	
			</div>	 
		<!-- close #download content -->
		</div>
		<footer>
			<?php include("templates/_footer.php"); ?>			
		</footer>

	</body>
</html>
