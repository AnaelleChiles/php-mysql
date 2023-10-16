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

        <?php include_once('header.php'); 

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
        <h1>Etes-vous sur de suprimer la recettes <?php  echo $recipe['title']?>?</h1>
			
		<form action="<?php echo('post-delete.php');?>" method="POST" enctype="multipart/form-data">
		<div class="mb-3 visually-hidden">

                <label for="id" class="form-label">ID de la recette</label>

                <input type="hidden" class="form-control" id="id" name="id"
                    value="<?php echo ($getData['id']); ?>"></input>
			



            </div>
		
            <br>
            <button type="button" id="annuler" class="annuler"  onclick="location.href='index.php'"> Annuler</button>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>



        <?php include_once('footer.php'); ?>
</body>

</html>