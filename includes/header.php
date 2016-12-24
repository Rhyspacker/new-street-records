<!doctype html>
<html>
  <head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    
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

$menuLink = basename($_SERVER['PHP_SELF'], ".php");

if($menuLink == "index") {
  $index = 'activeLink'; 
} else if ($menuLink == "about") {
  $about = 'activeLink';
} else if ($menuLink == "team") {
  $team = 'activeLink';
} else if ($menuLink == "news") {
  $news = 'activeLink';
} else if ($menuLink == "artists") {
  $artists = 'activeLink';
} else if ($menuLink == "gigs") {
  $gigs = 'activeLink';
}
?>
    
<header>

  <div class="logo">

    <a href="" title=""><img src="img/logo.svg" style="max-width: 110px;" /></a>

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
        <li><a href="index.php" class="<?php echo $index; ?>" title="">HOME</a></li>
        <li><a href="about.php" class="<?php echo $about; ?>" title="">ABOUT</a></li>
        <li><a href="team.php"  class="<?php echo $team; ?>"title="">TEAM</a></li>
        <li><a href="news.php"  class="<?php echo $news; ?>"title="">NEWS</a></li>
        <li><a href="artists.php"  class="<?php echo $artists; ?>"title="">ARTISTS</a></li>
        <li><a href="gigs.php"  class="<?php echo $gigs; ?>"title="">GIGS</a></li>
      </ul>

    </nav>


</header>