<?php 

require_once('website/script/database.php');

//Query voor zaal informatie op te halen
$sqlOverzichtZaal1 = "SELECT * FROM sessies WHERE zaalID = 100";

//Query voor zaal informatie op te halen
$sqlOverzichtZaal2 = "SELECT * FROM sessies WHERE zaalID = 101";

//Query voor zaal informatie op te halen
$sqlOverzichtZaal3 = "SELECT * FROM sessies WHERE zaalID = 102";

//Query voor zaal informatie op te halen
$sqlOverzichtZaal4 = "SELECT * FROM sessies WHERE zaalID = 103";

//Query voor zalen
if(!$resOverzichtZaal1 = $mysqli->query($sqlOverzichtZaal1)){
    echo "Oeps, een query foutje op DB voor opzoeken sessies";
    print("<p>Error: " . $mysqli->error . "</p>");
    exit();
}

//Query voor zalen 2
if(!$resOverzichtZaal2 = $mysqli->query($sqlOverzichtZaal2)){
    echo "Oeps, een query foutje op DB voor opzoeken sessies";
    print("<p>Error: " . $mysqli->error . "</p>");
    exit();
}

//Query voor zalen 3
if(!$resOverzichtZaal3 = $mysqli->query($sqlOverzichtZaal3)){
    echo "Oeps, een query foutje op DB voor opzoeken sessies";
    print("<p>Error: " . $mysqli->error . "</p>");
    exit();
}

//Query voor zalen 4
if(!$resOverzichtZaal4 = $mysqli->query($sqlOverzichtZaal4)){
    echo "Oeps, een query foutje op DB voor opzoeken sessies";
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
                        <img src="logo/logo-white.png" alt="conference logo" />
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
                        <a class="nav-links" href="#">Sponsors</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" href="#">Tickets</a>
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
        <div class="h-100 content-zalen">
            <div class="table-pixel">
                <div class="row">
                    <table class="table table-design table-hover-colour">
                        <thead class="thead-colour">
                            <tr>
                                <th scope="col">Room: Pixel 1</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                <?php
        
                //Ophalen van het resultaat van de query
                //Doorlopen van het resultaat zolang er rijen zijn
                while($row = $resOverzichtZaal1->fetch_assoc()){

                //Opvullen tijdelijke variabele
                $tempId = $row['idsessie'];
                $tempTitel = $row['titel'];
                $tempTime = $row['start'];

                print('<tbody>');
                print('<tr onclick="document.location = #"');
                print('<th></th>');
                print('<td><b>Starts at:  ' . $tempTime . '</b></td>');
                print('<td><b>' . $tempTitel . '</b></td>');
                print('<td></td>');
                print('<td><b>Edit</b></td>');
                print('</tr>');
                print('</tbody>');


                }
        
                ?>

                    </table>
                </div>
                <div class="row">
                    <button class="btn btn-session">Add new session</button>
                </div>
            </div>
            
            <div class="table-pixel">
                <div class="row">
                    <table class="table table-design table-hover-colour">
                        <thead class="thead-colour">
                            <tr>
                                <th scope="col">Room: Pixel 2</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                <?php
        
                //Ophalen van het resultaat van de query
                //Doorlopen van het resultaat zolang er rijen zijn
                while($row = $resOverzichtZaal2->fetch_assoc()){

                //Opvullen tijdelijke variabele
                $tempId = $row['idsessie'];
                $tempTitel = $row['titel'];
                $tempTime = $row['start'];

                print('<tbody>');
                print('<tr onclick="document.location = #"');
                print('<th></th>');
                print('<td><b>Starts at:  ' . $tempTime . '</b></td>');
                print('<td><b>' . $tempTitel . '</b></td>');
                print('<td></td>');
                print('<td><b>Edit</b></td>');
                print('</tr>');
                print('</tbody>');
                
                }
        
                ?>

                    </table>
                </div>
                <div class="row">
                    <button class="btn btn-session">Add new session</button>
                </div>
            </div>

            <div class="table-pixel">
                <div class="row">
                    <table class="table table-design table-hover-colour">
                        <thead class="thead-colour">
                            <tr>
                                <th scope="col">Room: Pixel 3</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                <?php
        
                //Ophalen van het resultaat van de query
                //Doorlopen van het resultaat zolang er rijen zijn
                while($row = $resOverzichtZaal3->fetch_assoc()){

                //Opvullen tijdelijke variabele
                $tempId = $row['idsessie'];
                $tempTitel = $row['titel'];
                $tempTime = $row['start'];

                print('<tbody>');
                print('<tr onclick="document.location = #"');
                print('<th></th>');
                print('<td><b>Starts at:  ' . $tempTime . '</b></td>');
                print('<td><b>' . $tempTitel . '</b></td>');
                print('<td></td>');
                print('<td><b>Edit</b></td>');
                print('</tr>');
                print('</tbody>');
                

                }
        
                ?>

                    </table>
                </div>
                <div class="row">
                    <button class="btn btn-session">Add new session</button>
                </div>
            </div>

            <div class="table-pixel">
                <div class="row">
                    <table class="table table-design table-hover-colour">
                        <thead class="thead-colour">
                            <tr>
                                <th scope="col">Room: Pixel 4</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                <?php
        
                //Ophalen van het resultaat van de query
                //Doorlopen van het resultaat zolang er rijen zijn
                while($row = $resOverzichtZaal4->fetch_assoc()){

                //Opvullen tijdelijke variabele
                $tempId = $row['idsessie'];
                $tempTitel = $row['titel'];
                $tempTime = $row['start'];

                print('<tbody>');
                print('<tr onclick="document.location = #"');
                print('<th></th>');
                print('<td><b>Starts at:  ' . $tempTime . '</b></td>');
                print('<td><b>' . $tempTitel . '</b></td>');
                print('<td></td>');
                print('<td><b>Edit</b></td>');
                print('</tr>');
                print('</tbody>');
                
                }
        
                ?>

                    </table>
                </div>
                <div class="row">
                    <button class="btn btn-session">Add new session</button>
                </div>
            </div>
            
        </div>
        <footer class="row">
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
                    <a href="#"><b>Home</b></a>
                </div>
                <div class="row footer-items">
                    <a href="#"><b>Speakers</b></a>
                </div>
                <div class="row footer-items">
                    <a href="#"><b>Schedule</b></a>
                </div>
                <div class="row footer-items">
                    <a href="#"><b>Sponsors</b></a>
                </div>
                <div class="row footer-items">
                    <a href="#"><b>Tickets</b></a>
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