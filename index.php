<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="TJ-101">

    <title>Viajera - Home</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Viajera</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="#contact">CONTACT</a></li>
              </ul>
            </div>
          </div>
        </nav>
    </div>

    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
      <div class="background-image"></div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-generic" data-slide-to="1"></li>
        <li data-target="#carousel-generic" data-slide-to="2"></li>
        <li data-target="#carousel-generic" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/img/slide1.jpg" alt="...">
        </div>
        <div class="item">
          <img src="assets/img/slide2.jpg" alt="...">
        </div>
        <div class="item">
          <img src="assets/img/slide3.jpg" alt="...">
        </div>
        <div class="item">
          <img src="assets/img/slide4.jpg" alt="...">
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-7">
              <h2>Welcome</h2>
              <div class="extra_wrapper">
                  <p>Aenean nonummy hendrerit mau rellus porta. Fusce suscipit varius m sociis natoque penaibet magni parturient montes nasetur ridiculumula dui. </p>
              </div>
            </div>
            <div class="col-md-5">
              <h2>Features</h2>
              <ul class="list">
                <li><a href="#">personalized cooking (by request)</a></li>
                <li><a href="#">complementary breakfast</a></li>
                <li><a href="#">coffee and dining area</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1>Best Choice</h1>
          <div id="best-choice" class="row">
            <div class="col-sm-6 col-md-3">
               <div class="panel panel-default">
                <div class="panel-body">
                  <img src="rsc/page1_img1.jpg" class="img-round">
                  <p> Dorem ipsum dolor amet consectetur</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="panel panel-default">
                <div class="panel-body">
                  <img src="rsc/page1_img2.jpg" class="img-round">
                  <p> Dorem ipsum dolor amet consectetur</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="panel panel-default">
                <div class="panel-body">
                  <img src="rsc/page1_img3.jpg" class="img-round">
                  <p> Dorem ipsum dolor amet consectetur</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="panel panel-default">
                <div class="panel-body">
                  <img src="rsc/page1_img4.jpg" class="img-round">
                  <p> Dorem ipsum dolor amet consectetur</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-wrapper">
      <footer>
          <p>&copy; 2015. &middot; <a href="#">About</a> &middot; <a href="#">Contact</a></p>
      </footer>
    </div>

    <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.carousel').carousel();
    }); 
    </script>
  </body>
</html>
