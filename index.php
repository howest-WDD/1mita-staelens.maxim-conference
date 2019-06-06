<?php 

require_once('website/script/database.php');

//Query voor zaalinfo zaal 1 op te halen

$sqlCarouselZalen = "SELECT idzalen, naam, capaciteit, afbeelding FROM zalen WHERE idzalen = 100";

//Query voor zaalinfo rest van zalen op te halen 

$sqlCarouselRestZalen = "SELECT idzalen, naam, capaciteit, afbeelding FROM zalen LIMIT 1, 5";

//Query voor sprekers
if(!$resCarouselZalen = $mysqli->query($sqlCarouselZalen)){
    echo "Oeps, een query foutje op DB voor opzoeken zalen";
    print("<p>Error: " . $mysqli->error . "</p>");
    exit();
}

//Query voor sprekers
if(!$resCarouselRestZalen = $mysqli->query($sqlCarouselRestZalen)){
  echo "Oeps, een query foutje op DB voor opzoeken zalen";
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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="website/style/style.css" />
  </head>

  <body class="h-100">
    <div class="h-100">
    <nav class="navbar-nav navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-items" id="nav-logo">
                        <a href="index.php"><img src="logo/logo-white-update.png" alt="conference logo" /></a>
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
    </div>
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

        <?php 
        
              //Ophalen van het resultaat van de query
              //Doorlopen van het resultaat zolang er rijen zijn
              while($row = $resCarouselZalen->fetch_assoc()){

                //Opvullen tijdelijke variabele
                $tempId = $row['idzalen'];
                $tempNaam = $row['naam'];
                $tempCapaciteit = $row['capaciteit'];
                $tempAfbeelding = $row['afbeelding'];

                print('<div class="carousel-item item active">');
                print('<img class="d-block w-100" src="website/images/' . $tempAfbeelding . '" alt="' . $tempNaam . '"/>');
                print('<div class="carousel-caption d-none d-md-block text-left">');
                print('<h5><b>' . $tempNaam . '</b></h5>');
                print('<p><b>Deze zaal heeft een capaciteit van ' . $tempCapaciteit. ' personen.</b></p>');
                print('<a href="overzicht_zalen.php" class="btn">More info</a>');
                print('</div>');
                print('</div>');
        
              }
        
        ?>  
        <?php 
              
                //Ophalen van het resultaat van de query
                //Doorlopen van het resultaat zolang er rijen zijn
              while($row = $resCarouselRestZalen->fetch_assoc()){

                //Opvullen tijdelijke variabele
                $tempId = $row['idzalen'];
                $tempNaam = $row['naam'];
                $tempCapaciteit = $row['capaciteit'];
                $tempAfbeelding = $row['afbeelding'];

                print('<div class="carousel-item">');
                print('<img class="d-block w-100" src="website/images/' . $tempAfbeelding . '" alt="' . $tempNaam . '"/>');
                print('<div class="carousel-caption d-none d-md-block text-left">');
                print('<h5><b>' . $tempNaam . '</b></h5>');
                print('<p><b>Deze zaal heeft een capaciteit van ' . $tempCapaciteit. ' personen.</b></p>');
                print('<a href="overzicht_zalen.php" class="btn">More info</a>');
                print('</div>');
                print('</div>');
        
              }
        
        ?> 
         
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container h-100 content">
        <div class="row homepage-content">
          <div class="col-12">
            <h3>About the conference</h3>
          </div>
        </div>
        <div class="row homepage-content">
          <div class="col-lg-3 col-xs-6">
            <p>

              Multi-Mania is our one-stop shop for Enterprise IT education where attendees enjoy a longstanding tradition of advancing 
              the enterprise technology industry. The event is handcrafted by volunteers to help professionals expand knowledge, enhance 
              skills and increase organizational efficiencies by focusing on Multi-Mania’s three main tenets: Educate, Network, Influence. 
            </p>
          </div>
          <div class="col-lg-3 col-xs-6">
            <p>
              Multi-Mania 2019 will feature 20+ technical sessions, covering key topics such as Programming, CS5 for professionals, 
              VFX for film and TV, Animation and Silverlight 4. Experience plenty of enterprise IT professionals under one roof 
              during interactive meet-ups and networking events, aimed at helping attendees shape and build lasting connections.  
            </p>
          </div>
          <div class="col-lg-6 col-xs-12">
            <img
              src="website/images/homepage-image.jpg"
              alt="conference room"
              class="homepage-img"
            />
          </div>
        </div>
      </div>
    </div>
    <footer class="row">
            <section class="col-lg-3 col-xs-1 col-sm-4 col-md-4 footer-content">
                <div class="row footer-items">
                    <b>Sign up for the newsletter</b>
                </div>
                <div class="row footer-items">
                <form method="post" action="website/admin/newsletter_code.php">
                    <input type="email" placeholder="Email address" name="email" required /><a href="#"><button type="submit" name="submit">
                    <i class="fas fa-chevron-right"></i></button></a>
                </form>
                </div>
            </section>
            <section class="col-lg-3 col-xs-1 col-sm-2 col-md-2 footer-content">
                <div class="row footer-items">
                    <b>Check us out on social media</b>
                </div>
                <div class="row footer-items icons">
                    <ul>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter-square"></i></a>
                        <a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    </ul>
                </div>
            </section>
            <section class="col-lg-3 col-xs-1 col-sm-4 col-md-4 footer-content">
                <div class="row footer-items"><b>Contact us</b></div>
                <div class="row footer-items">Graaf Karel de Goedelaan 5</div>
                <div class="row footer-items">8500 Kortrijk</div>
                <div class="row footer-items">Belgium</div>
                <div class="row footer-items">conference.kortrijk@gmail.com</div>
            </section>
            <section class="col-lg-3 col-xs-1 col-sm-2 col-md-2 footer-content">
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
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
