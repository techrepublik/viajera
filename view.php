<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="TJ-101">

    <title>Viajera - View Image</title>

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
                <li><a href="index.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="#contact">CONTACT</a></li>
              </ul>
            </div>
          </div>
        </nav>
    </div>
    <div class="content">
      <div id="food-img" class="row">
        <div class="col-md-12">
           <div class="img-container">
              <img src="rsc/slide.jpg" class="img-round">
           </div>
        </div>
      </div>
      
	  <div class="comments"><!-- Install a wordpres comment plugin here -->
	  	  <div class="row">
	        <div class="col-md-6">
	           <div class="panel panel-default">
	            <div class="panel-body">
	              <p>Install Wordpress Comment Plugin here</p>
	            </div>
	          </div>
	        </div>
	      </div>
      </div>

      <div class="row">
		<div class="col-md-6">
			<div class="widget-area no-padding blank">
				<div class="status-upload">
					<form>
						<textarea placeholder="Comment" ></textarea>
						<button type="submit" class="btn btn-success green">Post</button>
					</form>
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
    function getUrlParameter(sParam)
	{
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++) 
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam) 
	        {
	            return sParameterName[1];
	        }
	    }
	}
	$(document).ready(function() {
		var img = getUrlParameter('view');
		if(typeof img !== 'undefined') $('#food-img').find('img').attr('src', 'rsc/'+img);
	});
    </script>
  </body>
</html>
