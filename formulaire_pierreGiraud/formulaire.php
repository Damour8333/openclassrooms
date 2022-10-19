<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
<body>
    <!-- index.php -->
<form method="POST" action="target.php" >
 
<div class="mb-3">
                <label for="prenom" class="form-label">Entrez votre prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="email-help">
               
                <label for="nom" class="form-label">Entrez votre nom</label>
                <input type="text" class="form-control" id="nom" name="nom" aria-describedby="email-help">

                <label for="pseudo" class="form-label">Entrez votre pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" aria-describedby="email-help">
               
            </div>
           
            <button type="submit"  value ="Envoyer" class="btn btn-primary">Envoyer</button>
  
 </form>
</body>
</html>