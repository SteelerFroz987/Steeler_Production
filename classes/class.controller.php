<?php 

include 'Database.class.php';
include 'class.model.php';

// instancier ma class works
    $obj_works = new Model();

    // je gères tous mes boutton
    if (!empty($_POST['button'])) {

            if ($_POST['button'] == "creer") {
                $name = $_POST['name']; 
                $price = $_POST['price'];

                $res = $obj_works->createWorks($name,$price);

                if ($res == true){
                    $sucess = 'sucess';
                }else{
                    $error = 'error';
                }
            }

            if($_POST['button'] == "supprimer"){

                $id_product = $_POST['id_product'];
                $res = $obj_works->deleteWorks($id_product);

                if ($res == true){
                    $suc = 'sucess';
                }else{
                    $err = 'error';
                }
            }

            // controler $etat avant modification
            if ($_POST['button'] == "open_modifier") {
                $etat = "ouvrir";
                $id_clique = $_POST['id_product'];

            }else{
                $etat = "";
                $id_clique = "";
            }

            // modification
            if ($_POST['button'] == "modifier"){

                $id_product = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];

                $res = $obj_works->updateWorks($id_product,$name,$price);

                if ($res == true){
                    $sucees = 'sucess';
                }else{
                    $eroor = 'error';
                }
            }

    }

    $get_all_works = $obj_works->getAllWorks();