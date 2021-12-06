<?php
  use App\SiteInfo;
  $siteInfo = SiteInfo::data()[0];

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

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/public/css/blog.css" rel="stylesheet">
    <link href="/public/css/carousel.css" rel="stylesheet">
    <link href="/public/css/album.css" rel="stylesheet">

    <script>
        const apiAddress = '<?= URL_ROOT; ?>';
    </script>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="/">
                <img class="" src="<?=$siteInfo["logo"]?>" alt="" width="70" height="70">

            </a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/"><?=$siteInfo["title"]?></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <?php if(isset($_SESSION['userhetic'])){ ?>
                <a class="btn btn-sm btn-primary" href="/dashboard"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
                <a class="ml-3 btn btn-sm btn-outline-danger" href="/logout"><i class="fa fa-power-off"></i> Déconnexion</a>
            <?php }else{ ?>
                <a class="btn btn-sm btn-outline-secondary" href="/admin"><i class="fas fa-lock"></i> Espace membre</a>
            <?php } ?>


          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="/">Accueil</a>
          <a class="p-2 text-muted" href="/blog">Blog</a>
          <a class="p-2 text-muted" href="/about">Qui sommes nous ?</a>
          <a class="p-2 text-muted" href="/contact">Contact</a>
        </nav>
      </div>

      <div class="mb-5">
      <?php if(!$page || strtolower($page) ==="home"){ ?>

        <div id="myCarousel" class="carousel slide rounded" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1>Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>  
          <a href="#" class="mb-3 mt-2 btn btn-warning"> Editerer <i class="fa fa-pencil"></i></a>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">Featured post</a>
                </h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
            </div>
            <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">Post title</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
            </div>
        </div>
        <a href="#" class="mb-5 btn btn-warning"> Editerer <i class="fa fa-pencil"></i></a>
      <?php } ?>

      <?php if(strtolower($page) ==="blog" && $segment[2]){ ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mb-5 mt-4">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
        </div>
      </div>
      <?php } ?>
    </div>