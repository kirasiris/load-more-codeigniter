<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title><?php echo $title ?></title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/jumbotron.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/font-awesome/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>">SMK TI - Annajiyah </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#"><i class="fa fa-newspaper-o"></i> Berita</a></li>
            <li><a href="#"><i class="fa fa-bell-o"></i> Agenda</a></li>
            <li><a href="#"><i class="fa fa-picture-o"></i> Galeri</a></li>
            <li><a href="#"><i class="fa fa-info-circle"></i> Contact</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <header id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color: #2780E3;"></li>
        <li data-target="#myCarousel" data-slide-to="1" style="background-color: #2780E3;"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="fill" style="background-image:url('<?php echo base_url() ?>assets/images/slider1.jpg');"></div>
          <div class="carousel-caption">
            <h2 class="carousel-title">SMK TI Annajiyah Bahrul Ulum - Jombang</h2>
          </div>
        </div>
        <div class="item">
          <div class="fill" style="background-image:url('<?php echo base_url() ?>assets/images/slider2.jpg');"></div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Have some land, for future investment</h2>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
      </a>
    </header>