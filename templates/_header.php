	<a id="logo" href="index.php"></a> 

	<div id="menu">
		 <ul>
		 	<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'selected'; }else { echo ''; } ?>">
				<a href = "index.php">
				<span>accueil</span>
				</a>
			</li>
			<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'Ancien_numero.php'){echo 'selected'; }else { echo ''; } ?>">
				<a href = "Ancien_numero.php" alt="anciens numéros">
					<span>download</span>
				</a>
			</li>

			<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'bonus.php'){echo 'selected'; }else { echo ''; } ?>">
				<a href = "bonus.php" alt = "équipe">
					<span>équipe</span>
				</a>
			</li>
			<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'selected'; }else { echo ''; } ?>">
				<a href = "contact.php" alt = "contact">
					<span>contact</span>
				</a>
			</li>
			<li>
				<a href = "https://dailiieplanet.iiens.eu/feed/rss.xml" alt="RSS">
	  				<!-- <img id="rss" src="Images/Icones/rss.png" alt="Flux RSS"/> -->
	  				<span id="rss"></span>
				</a>	
			</li>	 
		</ul>
	</div>