<?php
    $recipes = [
        ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
        ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
    ];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Affichage des recettes</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li>
                <?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')';?>
            </li>
        <?php endfor; ?>
    </ul>
       
        <?php/*
            $isEnabled = true;
            if ($isEnabled == true) {
                echo "Accès autorisé !";
            }
            else {
                echo "Accès refusé !";
            }*/
        ?>
        


    </body>
</html>
