<?
session_start();
if(!$_SESSION['user']['login'] & !$_SESSION['user']['password']){
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=/admin/signin.php'></head></html>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Февральский взгляд | Панель управления</title>
  <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font.css" cache="false">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/plugin.css">
  <link rel="stylesheet" href="css/landing.css">
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/excanvas.js" cache="false"></script>
  <![endif]-->
</head>
<body>
  <!-- header -->
	<header id="header" class="navbar">
    <ul class="nav navbar-nav navbar-avatar pull-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="hidden-xs-only"><?=$_SESSION['user']['name']?></span>
          <span class="thumb-small avatar inline"><img src="images/avatar.jpg" alt="Mika Sokeil" class="img-circle"></span>
          <b class="caret hidden-xs-only"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="/admin/settings.php">Настройки</a></li>
          <li class="divider"></li>
          <li><a href="/admin/app/app.php?action=exit">Выйти</a></li>
        </ul>
      </li>
    </ul>
    <a class="navbar-brand" href="/"><i class="icon-camera-retro"></i> Февральский взгляд  *</a>
    <button type="button" class="btn btn-link pull-left nav-toggle visible-xs" data-toggle="class:slide-nav slide-nav-left" data-target="body">
      <i class="icon-reorder icon-xlarge text-default"></i>
    </button>

	</header>
  <!-- / header -->
