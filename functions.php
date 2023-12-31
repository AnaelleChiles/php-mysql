<?php
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
         
    function displayAuthor(string $authorEmail, array $users) : string {
        for ($i = 0; $i < count($users); $i++) {
            $author = $users[$i];
            if ($authorEmail === $author['mail']) {
                return $author['nom'] .' '. $author['prenom'] .'(' . $author['age'] . ' ans)';
            }
            else{
                return 'Non reconnue';
            }
        }
    }

?>
        