<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/cerial.css">
</head>

<body class="block">
  <div>
    <div class="container">
      <header>
        <div class="container">
          <div class="menu">
            <nav class="navbar navbar-expand-lg ">
              <a class="navbar-brand" href="new.php"><img class="img-nav"
                  src="img/hollywood-movie-cinema-industry-sign-icon_8071-36187.jpg" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img class="icon_img" src="img/7216128.png" alt=""></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                  <li class="nav-item active">
                    <a class="nav-link" href="news.php">Каталог фильмов <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./horror.php">Ужасы</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./сериалы.php">Сериалы</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./комедии.php">Комеди</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="carton.php">Мультики</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control mr-2" type="search" aria-label="Search" placeholder="Search"><span><img
                      class="span-img" src="img/Shape.png" alt=""></span>
                </form>
                <label for="switch" class="switch-container">
                  <input class="block_chek" onclick="clickMe()" type="checkbox" hidden id="switch">
                  <div class="switch-bg"></div>
                  <div class="switch-box"></div>
                  <div class="on">
                    <span>ON</span>
                  </div>
                  <div class="off">
                    <span>OFF</span>
                  </div>
                </label>
              </div>
            </nav>
          </div>
        </div>
      </header>