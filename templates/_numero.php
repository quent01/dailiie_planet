<?php 
      // variables vers les pdf et jpg
      $anciens_numeros = 'anciens_numeros/';
      $couv = 'Images/Couv/Couv_moyen/';
?>
<h1>Numéros parus</h1>  

<article>
      
      <div class="bibli">

            <?php 
            //liste des numéros du dailiie planet

            $a_dailiie = array(); //variable pr récupérer la liste des numéros

            if($dossier = opendir($anciens_numeros)) {
                  while(false !== ($fichier = readdir($dossier))){
                        if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'){
                              $ext_array = explode('.', $fichier);
                              $extension = array_pop($ext_array);
                              if($extension == 'pdf'){
                                    $pathInfo = pathinfo($fichier);
                                    array_push($a_dailiie , $pathInfo['filename']);
                              }
                        }
                  }
                  rsort($a_dailiie);
                  closedir($dossier);
            }
            ?>
            <?php foreach ($a_dailiie as $key => $value) : ?>
                  <a href="<?php echo $anciens_numeros.$value.'.pdf'; ?>" target="_blank">
                        <img class="couv shadow" href="#" src="<?php echo $couv.$value.'.jpg'; ?>" title="Click to download Dailiie #13"/>
                        <span href="#"></span>
                  </a>                  
            <?php endforeach; ?>

      </div>

</article>      