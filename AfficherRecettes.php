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
        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => '',
                'author' => 'mathieu.nebra@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => "Patate arc en ciel a la poudre d'escampette",
                'recipe' => '',
                'author' => 'jsp.monNom@gmal.com',
                'is_enabled' => true,
            ]
        ];
		
		$users = [
            [
                'mail' => 'mickael.andrieu@exemple.com',
				'nom' => 'PATATE',
				'prenom' => 'Douce',
                'age' => 80,
            ],
            [
                'mail' => 'mickael.andrieu@exemple.com',
                'nom' => 'Sanglante',
				'prenom' => 'Clementine',
                'age' => 36,
            ],
            [
                'mail' => 'mathieu.nebra@exemple.com',
                'nom' => 'Pain',
				'prenom' => 'Jean-mis',
                'age' => 45,
            ]
        ];

        function isValidRecipe(array $recipe) : bool {
            if (array_key_exists('is_enabled', $recipe)) {
                $isEnabled = $recipe['is_enabled'];
            } else {
                $isEnabled = false;
            }
                return $isEnabled;
            }

        function getRecipes(array $recipes) : array {
            $validRecipes = [];
            foreach($recipes as $recipe) {
                if (isValidRecipe($recipe)) {
                    $validRecipes[] = $recipe;
                }
            }
            return $validRecipes;
        }
         
        function displayAuthor(string $authorEmail, array $users) : string
        {
            for ($i = 0; $i < count($users); $i++) {
                $author = $users[$i];
                if ($authorEmail === $author['mail']) {
                    return $author['nom'] . $author['prenom'] .'(' . $author['age'] . ' ans)';
                }
            }
        }
        
           

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
