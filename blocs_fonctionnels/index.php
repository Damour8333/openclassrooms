<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">


      
        <h1>Sites de recette</h1>
        <?php
        include_once('variables.php');
        include_once('functions.php');
        ?>

        
        <?php
        foreach (getRecipes($recipes) as $recipe ): ?>  
        <article>
            <h3><?php echo $recipe['title'];?></h3>
            <div><?php echo $recipe['recipe'];?></div>
            <i><?php echo displayAuthor($recipe['author'],$users);?></i>
        </article>
         <?php endforeach?>

         <?php include_once('formulaire.php');?>

         <?php include_once('footer.php')?>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>