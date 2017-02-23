<!doctype html>
<html>
  <head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="author" content="New Sreet Records">

    <meta property="og:title" content="<?php echo $pageTitle; ?>" >
    <meta property="og:description" content="<?php echo $pageDescription; ?>" >
    <meta property="og:type" content="website" >
    <meta property="og:url" content="<?php echo $pageUrl; ?>" >
    <meta property="og:site_name" content="New Sreet Records" >

    <link href="<?php echo $dirPath; ?>css/styles.css" type="text/css" rel="stylesheet"/>
  </head>


<body>

<header role="banner">

  <div class="logo">

    <a href="<?php echo $dirPath; ?>./" title=""><img src="<?php echo $dirPath; ?>img\logo.svg" style="max-width: 110px;" /></a>

  </div>

  <nav role="navigation">

        <div class="nav-btn">

          <div id="burger-container">
            <div id="burger">
              <span>&nbsp;</span>
              <span>&nbsp;</span>
              <span>&nbsp;</span>
            </div>
          </div>

        </div>

      <ul class="nav">
        <li><a href="<?php echo $dirPath; ?>./" title="Go to Home">HOME</a></li>
        <li><a href="<?php echo $dirPath; ?>about/" title="Go to About">ABOUT</a></li>
        <li><a href="<?php echo $dirPath; ?>team/" title="Go to Team">TEAM</a></li>
        <li><a href="<?php echo $dirPath; ?>news/" title="Go to News">NEWS</a></li>
        <li><a href="<?php echo $dirPath; ?>artists/" title="Go to Artists">ARTISTS</a></li>
        <li><a href="<?php echo $dirPath; ?>gigs/" title="Go to Gigs">GIGS</a></li>
      </ul>

    </nav>


</header>
