<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Formulaire de Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once('header.php'); ?>
        <?php
        session_start();

        include_once('./mysql.php');
        include_once('./variables.php');

        $getData = $_GET;

        if (!isset($getData['id']) && is_numeric($getData['id'])) {
            echo ('Il faut un identifiant de cette pour le modifier.');
            return;
        }

        $retrieveRecipeStatement = $db->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
        $retrieveRecipeStatement->execute(['id' => $getData['id']]);

        $recipe = $retrieveRecipeStatement->fetch(PDO::FETCH_ASSOC);
        ?>
        <h1>Modifier une recette
            <?php echo $recipe['title'] ?>
        </h1>
        <form action="<?php echo ('post_update.php'); ?>" method="POST" enctype="multipart/form-data">

            <div class="mb-3 visually-hidden">

                <label for="id" class="form-label">ID de la recette</label>

                <input type="hidden" class="form-control" id="id" name="id"
                    value="<?php echo ($getData['id']); ?>"></input>



            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="title" name="title" id="title" class="form-control" value=<?php echo strip_tags($recipe['title']); ?>>

            </div>
            <div>
                <label for="recipe" class="form-label">Description de la recette</label>
                <textarea placeholder="Seulemment du contenu vous appartenant ou libre de droits." name="recipe"
                    id="recipe" class="form-control">
                <?php echo strip_tags($recipe['recipe']); ?>
            </textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

        <?php include_once('footer.php'); ?>
</body>

</html>