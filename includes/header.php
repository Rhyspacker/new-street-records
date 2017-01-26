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

    <link href="<?php echo $cssPath; ?>" type="text/css" rel="stylesheet"/>
  </head>


<body>

<?php
$index = null;
$about = null;
$team = null;
$news = null;
$artists = null;
$gigs = null;

$logoPath = '../../new-street-records/img/logo.svg';

$indexPath = '../../new-street-records/index.php';
$aboutPath = '../../new-street-records/about.php';
$teamPath = '../../new-street-records/team.php';
$newsPath = '../../new-street-records/news.php';
$artistsPath = '../../new-street-records/artists.php';
$gigsPath = '../../new-street-records/gigs.php';

?>

<header role="banner">

  <div class="logo">

    <a href="" title=""><img src="<?php echo $logoPath; ?>" style="max-width: 110px;" /></a>

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

      <ul class="nav">
        <li><a href="<?php echo $indexPath; ?>" title="">HOME</a></li>
        <li><a href="<?php echo $aboutPath; ?>" title="">ABOUT</a></li>
        <li><a href="<?php echo $teamPath; ?>" title="">TEAM</a></li>
        <li><a href="<?php echo $newsPath; ?>" title="">NEWS</a></li>
        <li><a href="<?php echo $artistsPath; ?>" title="">ARTISTS</a></li>
        <li><a href="<?php echo $gigsPath; ?>" title="">GIGS</a></li>
      </ul>

    </nav>


</header>
