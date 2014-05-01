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

		<title>Dailiie Planet - Équipes</title>

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
					<a href="bonus.php?year=2012">2012-2013</a>
					<a href="bonus.php?year=2013">2013-2014</a>
			</header>
			<div id="main">
				
				<?php 
					if(isset($_GET['year'])){
						$year = $_GET['year'];
						if ($year == 2013)
							include("templates/_equipe 2013-2014.php"); 						

						else
							include("templates/_equipe 2012-2013.php"); 							
					}
					else
						include("templates/_equipe 2013-2014.php"); 						
					
				?>
			<!-- close #main content -->
			</div>
		</div>
		<footer>
			<?php include("templates/_footer.php"); ?>			
		</footer>

	</body>
</html>
