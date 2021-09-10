<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
<?php

    include '../classes/class.controller.php';

    //pop-pup
    if (isset($sucess)){
        echo '<div id="sucess" style="background-color:green;" class="sucess">Commande valider</div>';
    }
    if (isset($error)){
        echo '<div id="error" style="background-color:red;" class="error">echec</div>';
    }
    
    if (isset($suc)){
        echo '<div id="suc" style="background-color:green;" class="suc">Commande supprimer</div>';
    }
    if (isset($err)){
        echo '<div id="err" style="background-color:red;" class="err">echec</div>';
    }
    
    if (isset($sucees)){
        echo '<div id="sucees" style="background-color:green;" class="sucees">Commande modifier</div>';
    }
    if (isset($eroor)){
        echo '<div id="eroor" style="background-color:red;" class="eroor">echec</div>';
    }

    //navbar
    echo'<div id="nav">';
            echo"<a class='nav-link active' aria-current='page' href='../index.php' style='color:#FF0000;'>Page d'accueille</a>";
    echo'</div>';

    //table
    echo'<form action="view.php" method="post" align="center">';

            echo'<div class="mb-3">';
            echo'<label>Nom</label>';
            echo'<input type="text" class="form-control" placeholder="Entrer le nom" name="name" autocomplete="off"></div>';

            echo'<div class="mb-3">';
            echo'<label >Prix</label>';
            echo'<input type="text" class="form-control" placeholder="Entrer le prix" name="price" autocomplete="off"></div>';

            echo'<button type="submit" class="btn btn-primary" name="button" value="creer"">Enregistrer</button>';

    echo'</form>';


    echo'<br>';

    echo'<table class="table table-hover"">';
        echo'<thead  align="center">';
            echo'<tr>';
                echo'<th >';
                    echo'name';
                echo'</th>';
                echo'<th >';
                    echo'price';
                echo'</th>';
                echo'<th >';
                    echo'Action';
                echo'</th>';
            echo'</tr>';
        echo'</thead>';

        echo'<tbody>';
        
        foreach($get_all_works as $value){
            
            if((isset($etat)) && ($value['id'] == $id_clique )){

                echo'<form action="view.php" method="post" align="center">';
                echo'<input type="hidden" name="id" value="'.$value['id'].'">';

                    echo'<tr>';
                        echo'<td data-label="name">';
                            echo'<input type="text" name="name" value="'.$value['name'].'" placeholder="name">';
                        echo'</td>';
                        echo'<td data-label="price">';
                            echo'<input type="text" name="price"  value="'.$value['price'].'" placeholder="prix">';
                        echo'</td>';
                            echo'<button type="submit" class="btn btn-warning" name="button" value="modifier">';
                                echo'enregistré';
                            echo'</button>';
                        echo'</td>';
                    echo'</tr>';
                echo'</form>';

            }else{

                echo'<tr align="center">';
                    echo'<td data-label="name">';
                        echo$value['name'];
                    echo'</td>';
                    echo'<td data-label="price">';
                        echo$value['price'];
                    echo'</td>';
        
                    echo'<td>';
                        
                        // button - ouvrire modifier
                        echo'<form action="view.php" method="post" align="center">';
                        
                            echo'<input type="hidden" name="id_product" value="'.$value['id'].'">';                    

                            echo'<button class="btn btn-info" name="button" value="open_modifier" type="submit">';
                                echo'modifier';
                            echo'</button>';
                        
                        echo'</form>';

                        // button - supprimer la ligne séléctionner
                        echo' <form action="view.php" method="post" align="center">';

                            echo'<input type="hidden" name="id_product" value="'.$value['id'].'">';

                            echo' <button class="btn btn-danger" name="button" value="supprimer" type="submit">';
                                echo'supprimer';
                            echo'</button>';
                        echo' </form>';

                    echo'</td>';
                echo'</tr>';
            }
        }
        echo'</tbody>';
    echo'</table>';
?>
<script src="../publichtml/js/jquery.js"></script>

<script  language="javascript">

        $(document).ready(function(){
            
            $('.sucess').delay(2000).hide('fast');
            $('.error').delay(2000).hide('fast');
            $('.suc').delay(2000).hide('fast');
            $('.err').delay(2000).hide('fast');
            $('.sucees').delay(2000).hide('fast');
            $('.eroor').delay(2000).hide('fast');

        })

</script>

</body>

</html>