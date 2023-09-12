<!DOCTYPE html>
<html>
    <head>
        <title>Affichage des recettes</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8" />
    </head>
    <body>
    <ul>
    <?php
        
           

        $isEnabled = true;
        if ($isEnabled == true) {
            echo "<h1><center> Affichage des recettes</center></h1>";
            foreach($recipes as $recipe) {
                if ($recipe['is_enabled']==true){
                    foreach ($users as $user){
                        if ($recipe['author']==$user['mail']){
                            echo '<h2>'.$recipe['title'].'</h2>'. $user['nom']. ' '. $user['prenom'] . '('.$user['age'].') '.'<br><br>';
                        }
                    }
                }
            }
					  
		} 
        else {
            echo "Accès refusé !";
        }
        ?>


    </ul>
    /*copier fichier error dans le dossier et corriger les fautes*/      
    /*supprimer error et mettre index a la place puis faire les commande de la page 18*/
    /*puis copier tout le reste du code a partir page 19
        

  


    </body>
</html>
