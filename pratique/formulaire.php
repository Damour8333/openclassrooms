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
<form method="POST" action="target.php" enctype="multipart/form-data">
 
<div class="mb-3">
                <label for="email" class="form-label">Entrez votre email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="email-help">
               
                <label for="message" class="form-label">Entrez votre message</label>
                <input type="text" class="form-control" id="message" name="message" amessageria-describedby="email-help">

             <div class="mb-3">
                <label for="screenshot" class="form-label">Votre capture d'écran</label>
                <input type="file" class="form-control "id="screenshot" name="screenshot">
             </div>
            </div>
           
            <button type="submit"  value ="Envoyer" class="btn btn-primary">Envoyer</button>
  
 </form>
</body>
</html>