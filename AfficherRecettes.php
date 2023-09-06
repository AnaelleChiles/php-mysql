<?php
    /*$recipes = [
        ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
        ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
    ];*/
    $recipe['title'] = 'Cassoulet';
    $recipe['recipe'] = 'Etape 1 : des flageolets, ...';
    $recipe['author'] = 'john.doe@exemple.com';
    $recipe['enable'] = true;
?>

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
                'is_enabled' => true,
            ],
            [
                'title' => "Patate arc en ciel a la poudre d'escampette",
                'recipe' => '',
                'author' => 'jsp.monNom@gmal.com',
                'is_enabled' => true,
            ]
        ];
        
        $isEnabled = true;
        if ($isEnabled == true) {
            echo "<h1><center> Affichage des recettes</center></h1>";
            foreach($recipes as $recipe) {
                echo "<h2>" . $recipe['title'] ."</h2>". $recipe['recipe']. ' recette : '. '<br>'  . $recipe['author'] . '<br>'. '<br>' ;   
            }
        }
        else {
            echo "Accès refusé !";
        }
        ?>


    </ul>
       
        
        


    </body>
</html>
