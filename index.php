<?php
    $pageinfo = array(
        'name' => 'WebRoot',
        'title' => 'WebRoot - Simple Bootstrap',
        'description' => 'WebRoot is a simple start for your project.',
		'author' => 'banana man',
        'twitter' => '@banana',
        'lang-iso' => 'fr',
        'lang-lT' => 'fr_FR'
    );
?>
<!DOCTYPE html>
<html lang="<?= $pageinfo['lang-iso'] ?>" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <!-- Page Info -->
    <title><?= $pageinfo['title'] ?></title>
    <meta name='description' content="<?= $pageinfo['description'] ?>"/>
	<meta name="author" content="<?= $pageinfo['author'] ?>">
    <link rel="icon" href="img/favicon.ico">
    <meta property="og:locale" content="<?= $pageinfo['lang-lT'] ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= 'https://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] ?>" />
    <meta property="og:site_name" content="<?= $pageinfo['name'] ?>" />
    <meta property="og:title" content="<?= $pageinfo['title'] ?>" />
    <meta property="og:description" content="<?= $pageinfo['description'] ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="<?= $pageinfo['twitter'] ?>" />
    <meta name="twitter:title" content="<?= $pageinfo['title'] ?>" />
    <meta name="twitter:description" content="<?= $pageinfo['description'] ?>" />
    <!-- Links -->
    <!-- bootstrap -->
    <link href="css/root.min.css" rel="stylesheet">
    <!-- custom style -->
    <link href="css/main.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- RSS <link rel="alternate" type="application/rss+xml" href="rss.xml" title="<?= $pageinfo['title'] ?>"> -->
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
          <a class="navbar-brand" href="#"><?= $pageinfo['name'] ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
      <div class="starter-template">
        <h1>WebRoot starter template</h1>
        <p class="lead">Made with Bootstrap<br>Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
    </div><!-- /.container -->
    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="js/root.min.js"></script>
</body>
</html>