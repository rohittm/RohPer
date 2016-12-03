<?php
  /* Main Header Template */
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rohit Motwani</title>
<meta name="description" content="About Rohit Motwani">
<meta name="author" content="Rohit Motwani; www.RohitMotwani.com">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="rm.png" type="image/x-icon">
<link rel="apple-touch-icon" href="rm.png">
<link rel="apple-touch-icon" sizes="72x72" href="rm.png">
<link rel="apple-touch-icon" sizes="114x114" href="rm.png">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_url') ?>/css/style.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Hey There, I'm <span class="name">Rohit Motwani</span></h1>
          <p style="text-shadow: 0 0 4px #000;">Front End Developer & WordPress Developer</p>
          <a href="#about" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top">R. Motwani</a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse nav navbar-nav>
          <?php
               wp_nav_menu( $arg = array (
                   'menu_class' => 'main-navigation',
                   'theme_location' => 'primary'
               ));
           ?>


      </div>
    </div>
  </nav>
</div>
