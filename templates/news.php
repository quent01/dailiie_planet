<?php 
	/*==========================================
	Ce fichier contient les derniers dailiie planet sortie et les affiches sous forme de pagination
	sur la page d'accueil du site : dailiieplanet.iiens.eu
	==========================================*/

	//Pour l'instant on n'a pas de base de données donc on va stocker les articles dans un tableau
	$monTableau[3] = "
	<h1>Dailiie #10</h1>
			<article>
				<div class="."view".">  
		            <img class="."shadow"." href="."#"." src="."Images/Couv/Couv_moyen/DailiiePlanet10.jpg"."/> 
				     	<div class="."mask".">  
				     		<h2>Dailiie #10</h2>  
				     		<p>Et Bim, c'est le numéro 10 !<br> 
				     		Un numéro pré campagne pour motiver les troupes et pour vous prévenir,<br>
				     		pendant la campagne vous serez épié de tous cotés par le Dailiie Planet,<br>
				     		gaffe aux boulettes !</p>  
				         	<a href="."anciens_numeros/DailiiePlanet10.pdf"." target="."_blank"." class="."info".">Read now</a>  
				     	</div>  
				</div>
		    </article>"

	$monTableau[2] = "
			<h1>Dailiie #9</h1>
			<article>
				<div class="."view".">  
		            <img class="."shadow"." href="."#"." src="."Images/Couv/Couv_moyen/DailiiePlanet09.jpg"."/> 
				     	<div class="."mask".">  
				     		<h2>Dailiie #9</h2>  
				     		<p>Numéro 9 du 9 Septembre (999) il se devait d'être le numéro de l'intégration !<br> 
				     		Retrouve les BD iiennes, et découvre les élèves de l'école dans des articles plus loufoques les uns que les autres !</p>  
				         	<a href="."anciens_numeros/DailiiePlanet9.pdf"." target="."_blank"." class="."info".">Read now</a>  
				     	</div>  
				</div>
			</article>"

	$monTableau[1] = "
			<h1>Dailiie #8</h1>
			<article>
				<div class="."view".">  
		            <img class="."shadow"." href="."#"." src="."Images/Couv/Couv_moyen/DailiiePlanet08.jpg"."/> 
				     	<div class="."mask".">  
				     		<h2>Dailiie #8</h2>  
				     		<p>Dernier Dailiie Planet pour l'année scolaire 2012/2013.<br> 
				     		En exclu la nouvelle BD iienne, Tiramisù !</p>  
				         	<a href="."anciens_numeros/DailiiePlanet8.pdf"." target="."_blank"." class="."info".">Read now</a>  
				     	</div>  
				</div>
			</article>"
	//cette article sera affiché en dernier		
	$monTableau[0] = "
			<h1>Dailiie #7</h1>
			<article>
				<div class="."view".">  
		            <img class="."shadow"." href="."#"." src="."Images/Couv/Couv_moyen/DailiiePlanet07.jpg"."/> 
				     	<div class="."mask".">  
				     		<h2>Dailiie #7</h2>  
				     		<p>Dailiie Planet de la campagne BdE 2012/2013.<br> 
				     		Découvrez la liste gagnante !</p>  
				         	<a href="."anciens_numeros/DailiiePlanet7.pdf"." target="."_blank"." class="."info".">Read now</a>  
				     	</div>  
				</div>
		    </article>"
	
	//on compte les éléments du tableaux que l'on stocke dans une variable
	$thispage = $PHP_SELF;
	$num = count($monTableau);//number of article
	$per_page = 3;//number of article per page
	$max_page = ceil($num/$per_page);//number of page
	$showeachside = 2; //number of items to show each side of selected page
	$cur = ceil($start / $per_page) +1;//current page number

	//fonction d'inversion de tableau
	// exemple pour un tableau $arrray de taille n
	// $array[0] = $array[n-1]; $array[1] = $array[n-2] ..
	$monTableau = array_reverse($monTableau);

	//fonction d'affichage des articles
	if (isSet($_GET['start']) // si une page est demandée dans l'url
  		 $start = $_GET['start'];
	else // sinon on commence à l'article 0
	   $start = 0;

	// pour $i = au numéro de l'article de départ ; tant que $i est inférieur à ce numéro + $articlebyPage à afficher 
	for ($i = $start; $i < $start+$per_page ; $i++) {
	   echo $monTableau[$i]; // affichage de l'article $i
	}	    
 ?>