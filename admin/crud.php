<?php

include '../class/Database.class.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];

    $sql="insert into `crud` (name,price)
    values('$name','$price')";
    $result=mysqli_query($con,$sql);
    // if($result){
    //     echo "Data inserted successfully";
    // }else{
    //     die(mysqli_error($con));
    // }
}
?>
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Ajouter</title>
  </head>

  <body>

    <div class="container">
        <form method="post">
           
            <div class="mb-3">
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="Entrer le nom" name="name" autocomplete="off">
            </div>

            <div class="mb-3">
                <label >Prix</label>
                <input type="text" class="form-control" placeholder="Entrer le prix" name="price" autocomplete="off">
             </div>

                <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                <ul class="nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="display.php">Retour</a>
        </form>
    </div>

  </body>
</html> 