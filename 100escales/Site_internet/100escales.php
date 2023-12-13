<?php
    $dbConnection = new PDO("mysql:host=127.0.0.1;dbname=100escales_db","root","");
    $sqlRequest = "SELECT * FROM article" ;
    $request = $dbConnection->prepare($sqlRequest);
    $request->execute() ;
    $articles = [];
    while ($row = $request->fetch()){
        $articles[]=$row;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100Escales</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body class="background">
    <header>
        <div class="center-text">
            <h6>100 ESCALES</h6>
            <div class="georgia">100 ESCALES</div>


        </div>
    </header>


   
    <div class="bandeau">

        <a href="100escales.html" class="case">Accueil</a>
        <a href="articles.html" class="case">Articles</a>


    </div>
  

    <div class="nav-slide">
        <ul class="social-links">
            <li><titre_menu>CONTACT</titre_menu></li>
            <li>
                <a href="https://instagram.com/100escales" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
            <li>
            <a href="https://www.facebook.com/100escales" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            </li>
        </ul>
        <div class="menu-hamburger">
            <div class="barre"></div>
            <div class="barre"></div>
            <div class="barre"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="artcicle">
        <?php
            foreach($articles as $article){
                echo '<li>';
                echo '<img src = "data: image/png;base64, base64_encode($fi1m[ ' affiche'
                echo '<h3>' . $article['titre'] . '</h3>';
                echo '</li>';
            }
        ?>
    </div>


    <script src="java.js"></script>

    </body>
    </html>
