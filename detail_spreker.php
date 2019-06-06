<?php 

require_once('website/script/database.php');

//Query voor sprekers informatie op te halen
//$sqlDetailSprekers = "SELECT idsprekers, voornaam, naam, afbeelding, bio, lanidID FROM sprekers s 
//INNER JOIN landen l ON s.lanidID = l.idlanden";

$sqlDetailSprekers = "SELECT ss.idsprekers, ss.likecounter, ss.voornaam, ss.naam, ss.afbeelding, ss.bio, l.idlanden, l.voluit FROM sprekers ss 
INNER JOIN landen l ON l.idlanden = ss.lanidID WHERE ss.idsprekers = {$_GET['idsprekers']}";

//Query voor sprekers
if(!$resDetailSprekers = $mysqli->query($sqlDetailSprekers)){
    echo "Oeps, een query foutje op DB voor opzoeken sprekers";
    print("<p>Error: " . $mysqli->error . "</p>");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conference Website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="website/style/style.css" />
</head>

<body class="h-100">
    <div class="h-100">
        <nav class="navbar-nav navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-items" id="nav-logo">
                        <img src="logo/logo-white-update.png" alt="conference logo" />
                    </li>
                    <li class="nav-items active">
                        <a class="nav-links" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" href="overzicht_spreker.php">Speakers</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" href="overzicht_zalen.php">Schedule</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" href="sponsors.php">Sponsors</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" href="tickets.php">Tickets</a>
                    </li>
                    <li class="nav-items">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                aria-label="Search" />
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="h-100 container content-border">
            <div class="content-detail-spreker">
                <div class="row">


                <?php 
                
                //Ophalen van het resultaat van de query
                //Doorlopen van het resultaat zolang er rijen zijn
                while($row = $resDetailSprekers->fetch_assoc()){

                    //Opvullen tijdelijke variabele
                    $tempId = $row['idsprekers'];
                    $tempLand = $row['voluit'];
                    $tempVoornaam = $row['voornaam'];
                    $tempNaam = $row['naam'];
                    $tempAfbeelding = $row['afbeelding'];
                    $tempBio = $row['bio'];
                    $tempLikes = $row['likecounter'];
                    

                    //Alles printen
                    print('<div class="col-lg-4 col-xs-2 col-sm-8 col-md-6">');
                    print('<img src="website/images/speakers/x250/' . $tempAfbeelding . '" alt="">');
                    print('<div class="row icons-detail">');
                    print('<ul>');
                    print('<a href="like_code.php?idsprekers=' . $tempId .'" class="" id="likedetail"><i class="far fa-heart"></i></a>&nbsp;');  
                    print('<a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>&nbsp;');
                    print('<a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a>&nbsp;');
                    print('<a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>');
                    print('</ul>');
                    print('</div>');
                    print('</div>');
                    print('<div class="col-lg-8 col-xs-4 col-sm-4 col-md-6 content-detail">');
                    print('<h4><b>' . $tempVoornaam . '</b>&nbsp;<b>' . $tempNaam . '</b>&nbsp;-&nbsp;' . $tempLikes . ' likes</h4>');
                    print('<h5><b>' . $tempLand . '</b></h5>');
                    print('<b>Bio</b>');
                    print('<p>' . $tempBio . '</p>');
                    print('<b>Socials and website</b> <br>');
                    print('<a href="#">wwww.programmingisart.com</a> <br>');
                    print('<a href="">keith.peters@gmail.com</a>');
                    print('</div>');

                    

                }
                
                ?> 

                                                  
                </div>
            </div>
        </div>
        <footer class="row fixed-bottom">
            <section class="col-3 footer-content">
                <div class="row footer-items">
                    <b>Sign up for the newsletter</b>
                </div>
                <div class="row footer-items">
                    <input type="text" placeholder="Email address" name="mail" required /><a href="#"><button><i
                                class="fas fa-chevron-right"></i></button></a>
                </div>
            </section>
            <section class="col-3 footer-content">
                <div class="row footer-items">
                    <b>Check us out on social media</b>
                </div>
                <div class="row footer-items icons">
                    <ul>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </ul>
                </div>
            </section>
            <section class="col-3 footer-content">
                <div class="row footer-items"><b>Contact us</b></div>
                <div class="row footer-items">Graaf Karel de Goedelaan 5</div>
                <div class="row footer-items">8500 Kortrijk</div>
                <div class="row footer-items">Belgium</div>
                <div class="row footer-items">conference.kortrijk@gmail.com</div>
            </section>
            <section class="col-3 footer-content">
                <div class="row footer-items">
                    <a href="index.php"><b>Home</b></a>
                </div>
                <div class="row footer-items">
                    <a href="overzicht_spreker.php"><b>Speakers</b></a>
                </div>
                <div class="row footer-items">
                    <a href="overzicht_zalen.php"><b>Schedule</b></a>
                </div>
                <div class="row footer-items">
                    <a href="sponsors.php"><b>Sponsors</b></a>
                </div>
                <div class="row footer-items">
                    <a href="tickets.php"><b>Tickets</b></a>
                </div>
            </section>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>