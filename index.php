
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/styles/style.css">
    </head>
    <body>
 
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <img class="profile-photo" src="asset/img/2.jpg" alt="Profil photo" height="50px" width="auto" style="border-radius:50%">
                    <a class="navbar-brand" href="#" style="margin-left:1%">VANAA Jubilé</a>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#acc">Acceuil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#pro">Projets</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <button class="btn btn-outline-success" type="submit"><a class="my-button" href="admin/connexion.php"> Connexion Administrateur </a></button>
                    </form>

                </div>

            </div>
        </nav>

        <section class="page-content" id="acc">
            <header>
                <h1>HEY, JE SUIS UN DEVELOPPEUR WEB ET VOICI MON PORTFOLIO.</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
					debitis, facilis aliquam voluptates fugiat ipsum odio, nihil
					architecto fuga laboriosam tempore necessitatibus quas? Incidunt nobis
					ducimus vel, delectus sit quod Lorem ipsum dolor sit amet consectetur
					adipisicing elit.
                </p>
                
            </header>
            
            <div id="drk">
                    <h4>Light/Dark mode</h4>
                    <label class="switch">
                        <input type="checkbox" onclick="changeMode()">
                        <span class="slider"></span>
                    </label>
                </div>

                <script>
                    function changeMode() {
                        var element = document.body;
                        element.classList.toggle("dark-mode");
                    }
                </script>

            <section class="presentation-image">
                <img src="asset/img/3.jpg" alt="RSMA D-WEB">
            </section>

            <section class="projects-section" id="pro">
                <h1>Projets réalisés</h1>
                <div class="projects">
                    <div class="project">
                        <h4>Projet Numéro 1</h4>
                        <p class="description">Lorem ipsum dolor sit amet consecteur, adipisicing elit. Molestias sunt, atque aliquid pariatur.</p>
                        <img src="asset/img/4.jpg" alt="">
                        <p class="dates">Dates 2020 - 2021</p>
                    </div>
                    <div class="project">
                        <h4>Projet Numéro 2</h4>
                        <p class="description">Lorem ipsum dolor sit amet consecteur, adipisicing elit. Molestias sunt, atque aliquid pariatur.</p>
                        <img src="asset/img/6.jpg" alt="">
                        <p class="dates">Dates 2020 - 2021</p>
                    </div>
                    <div class="project">
                        <h4>Projet Numéro 3</h4>
                        <p class="description">Lorem ipsum dolor sit amet consecteur, adipisicing elit. Molestias sunt, atque aliquid pariatur.</p>
                        <img src="asset/img/7.jpg" alt="">
                        <p class="dates">Dates 2020 - 2021</p>
                    </div>
                    <div class="project">
                        <h4>Projet Numéro 4</h4>
                        <p class="description">Lorem ipsum dolor sit amet consecteur, adipisicing elit. Molestias sunt, atque aliquid pariatur.</p>
                        <img src="asset/img/8.jpg" alt="">
                        <p class="dates">Dates 2020 - 2021</p>
                    </div>
                    <!-- <div class="project">
                        <h4>Projet Numéro 5</h4>
                        <p class="description">Lorem ipsum dolor sit amet consecteur, adipisicing elit. Molestias sunt, atque aliquid pariatur.</p>
                        <img src="asset/img/4.jpg" alt="">
                        <p class="dates">Dates 2016 - 2017</p>
                    </div> -->
                </div>
            </section>

            <section>
            <?php

include 'classes/class.controller.php';

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
    
               
            echo'</tr>';
        }
    }
    echo'</tbody>';
echo'</table>';
?>
            </section>
          
                   

        </section>

        <footer>
            <div class="colonne">
                <h3>Mes Services</h3>
                <p>Création de site internet</p>
                <p>Réseaux sociaux</p>
                <p>Contenu multimédia</p>
            </div>   
            <div class="colonne">
                <h3>Mon entreprise</h3>
                <p>Nombre d'employer: 1</p>
                <p>Situé à Tahiti</p>
                <p>1 ans d'existence</p>
            </div>
            <div class="colonne">
                <h3>Contacts</h3>
                <p>jubile.vanaa1@gmail.com</p>
                <p>+689 87.31.65.62</p>
                <p><a href="https://www.facebook.com/people/Jubil%C3%A9-VN-Steeler/100006239115155/" target="_blank">Facebook</a></p>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>