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
              <img src="logo/logo-white-update.png" alt="conference logo" />
            </li>
            <li class="nav-items active">
              <a class="nav-links" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
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
                <input
                  class="form-control mr-sm-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button
                  class="btn btn-outline-success my-2 my-sm-0"
                  type="submit"
                >
                  Search
                </button>
              </form>
            </li>
          </ul>
        </div>
      </nav>
      <div class="h-100 container content-border admin-content">
        <div class="content-detail-sessie">    
        <section>
        <h1>Reserve your free tickets for Multi-Mania</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="title"><h4>Your name</h4></label>
                <input type="text" class="form-control" name="voornaam" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="title"><h4>Your family name</h4></label>
                <input type="text" class="form-control" name="naam" placeholder="Family name">
            </div>
            <div class="form-group">
                <label for="title"><h4>Your e-mail adress</h4></label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="title"><h4>Your phone number</h4></label>
                <input type="text" class="form-control" name="telefoon" placeholder="Phone number">
            </div>
            <label for="numberoftickets"><h4>Number of tickets you wish to reserve</h4></label> <br>
            <h6>Max. 10 tickets per person.</h6>
                <select name="sprekerID">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select> <br> <br>
            <div class="form-group">
                <input type="submit" class="btn btn-default" name="submit" value="Reserve tickets">
            </div>
        </form>
        </section>        
        </div>
    </div>
    <footer class="row">
      <section class="col-3 footer-content">
        <div class="row footer-items">
          <b>Sign up for the newsletter</b>
        </div>
        <div class="row footer-items">
          <input
            type="text"
            placeholder="Email address"
            name="mail"
            required
          /><a href="#"
            ><button><i class="fas fa-chevron-right"></i></button
          ></a>
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
