<html>
<head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<title>banner</title>
</head>

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
	  height:30%;
      margin: auto;
  }
  </style>

<body>
	<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/poster2.jpeg" alt="Chania" width="600" height="300">
      <div class="carousel-caption">
        <h3>Harvesting</h3>
        
      </div>
    </div>

    <div class="item">
      <img src="images/poster1.jpg" alt="Chania" width="600" height="300">
      <div class="carousel-caption">
        <h3>Trackter</h3>
        <p>One of the major farming equipment</p>
      </div>
    </div>

    <div class="item">
      <img src="images/poster3.jpg" alt="Flower" width="600" height="300">
      <div class="carousel-caption">
        <h3>Mansoon</h3>
        <p>Beatiful farms</p>
      </div>
    </div>

 
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<br>
</body>
</html>