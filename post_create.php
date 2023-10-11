<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once('header.php'); ?>
        <h1>Site de recettes</h1>

        <!-- inclusion des variables et fonctions -->
        <?php
        include_once('variables.php');
        include_once('functions.php');
        ?>

        <!-- inclusion de l'entête du site -->
        <?php include_once('header.php'); ?>

        <?php
        session_start();

        include_once('./mysql.php');
        include_once('./variables.php');

        if (!isset($_POST['title']) || !isset($_POST['recipe'])) {
            echo 'Il faut un titre et une recette pour soumettre le formulaire.';
            return;
        }

        $title = $_POST['title'];
        $recipe = $_POST['recipe'];


        $insertRecipe = $db->prepare('INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (?,?,?,?);');
        $insertRecipe->execute(array($title, $recipe, $_SESSION['LOGGED_USER'], 1));
        ?>

        <h1>Message bien reçu !</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Titre</b> :
                    <?php echo strip_tags($_POST['title']); ?>
                </p>
                <p class="card-text"><b>Recipe</b> :
                    <?php echo strip_tags($_POST['recipe']); ?>
                </p>
            </div>
        </div>
    </div>
    </div>