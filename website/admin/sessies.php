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
    <link rel="stylesheet" href="../style/style.css" />
  </head>
  <body class="h-100">
    <div class="h-100">
      <nav class="navbar-nav navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-items" id="nav-logo">
              <img src="../../logo/logo-white-update.png" alt="conference logo" />
            </li>
            <li class="nav-items active">
              <a class="nav-links" href="../../index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-items">
              <a class="nav-links" href="../../overzicht_spreker.php">Speakers</a>
            </li>
            <li class="nav-items">
              <a class="nav-links" href="../../overzicht_zalen.php">Schedule</a>
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
        <h1>Add new session</h1>
        <form method="post" action="add_sessie.php">
            <div class="form-group">
                <label for="title"><h4>Name of session</h4></label>
                <input type="text" class="form-control" name="titel" placeholder="Session">
            </div>
            <label for="start-time"><h4>Start time</h4></label>
            <div class="radio">
                <label>
                    <input type="radio" name="start" value="10h30" checked> 10:30
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="start" value="11h30"> 11:30
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="start" value="12h30"> 12:30
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="start" value="14h00"> 14:00
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="start" value="15h00"> 15:00
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="start" value="16h00"> 16:00
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="start" value="17h00"> 17:00
                </label>
            </div>
            <div class="form-group">
                <label for="description"><h4>Description of session</h4></label> <br>
                <textarea name="omschrijving" rows="4" cols="50"></textarea>
            </div>
            <label for="zaal"><h4>Zaal</h4></label>
            <div class="radio">
                <label>
                    <input type="radio" name="zaalID" value="100" checked> Pixel 1
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="zaalID" value="101"> Pixel 2
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="zaalID" value="102"> Pixel 3
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="zaalID" value="103"> Pixel 4
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="zaalID" value="104"> Pixel 5
                </label>
            </div>
            <label for="speaker"><h4>Speaker</h4></label> <br>
                <select name="sprekerID">
                    <option value="2001">Aral Balkan</option>
                    <option value="2002">Michael O’Neill</option>
                    <option value="2003">Ton Frederiks</option>
                    <option value="2004">Frederic Lierman</option>
                    <option value="2005">Brent Wilkey</option>
                    <option value="2006">Jeremy Thorp</option>
                    <option value="2007">Geert Coppens</option>
                    <option value="2008">GRID VFX</option>
                    <option value="2009">Ben Piquard</option>
                    <option value="2010">Keith Peters</option>
                    <option value="2011">Nicky Lauwerijssen</option>
                    <option value="2012">Brendan Ciecko</option>
                    <option value="2013">Xsens</option>
                    <option value="2014">Bart Chanet</option>
                    <option value="2015">Eboy</option>
                    <option value="2016">Serge Jespers</option>
                    <option value="2017">Christoph Rooms</option>
                    <option value="2018">Donna Fenn</option>
                    <option value="2019">Klaasjan Tukker</option>
                    <option value="2020">Branden Hall</option>
                    <option value="2021">Gill Cleeren</option>
                    <option value="2022">Jasper Hesseling</option>
                    <option value="2023">Doherty Fraser</option>
                    <option value="2024">Katrijn Faket</option>
                    <option value="2025">ADNERDS</option>
                    <option value="2027">Veerle Pieters</option>
                    <option value="2028">Little Miss Robot Ghent</option>
                    <option value="2029">Floris Vos</option>
                </select> <br> <br>
            <div class="form-group">
                <input type="submit" class="btn btn-default" name="submit" value="Add session">
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
          <a href="../../index.php"><b>Home</b></a>
        </div>
        <div class="row footer-items">
          <a href="../../overzicht_spreker.php"><b>Speakers</b></a>
        </div>
        <div class="row footer-items">
          <a href="../../overzicht_zalen.php"><b>Schedule</b></a>
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
