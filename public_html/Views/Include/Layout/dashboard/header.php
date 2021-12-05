<?php
    if(!isset($_SESSION['userhetic'])){
        header("location:/admin");
    }
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segment = explode('/', $uri);
    $page = $segment[1];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public/img/logo/logo.jpg">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/public/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom styles for this template -->
    <link href="/public/css/dashboard.css" rel="stylesheet">
    <link href="/public/css/editor.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/" target="_blank"><i class="fa fa-globe"></i> News HETIC</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="/logout"><i class="fa fa-power-off"></i> Déconnexion </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if($page=="dashboard"){echo 'active';}?>" href="/dashboard">
                  <span data-feather="home"></span>
                  Tableau de bord <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page=="users"){echo 'active';}?>" href="/users">
                  <span data-feather="users"></span>
                  Utilisateurs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page=="posts"){echo 'active';}?>" href="/posts">
                    <span data-feather="file-text"></span>
                    Articles
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page=="categories"){echo 'active';}?>" href="/categories">
                  <span data-feather="shopping-cart"></span>
                  Catégories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page=="slider"){echo 'active';}?>" href="/slider">
                  <span data-feather="layers"></span>
                  Slider
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Réglages</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link <?php if($page=="setting"){echo 'active';}?>" href="/setting">
                  <span data-feather="file-text"></span>
                  Site
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page=="profile"){echo 'active';}?>" href="/profile">
                  <span data-feather="file-text"></span>
                  Mon compte
                </a>
              </li>
            </ul>
          </div>
        </nav>