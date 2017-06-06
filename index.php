<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Суровый дровосек</title>
  <link href="css/index.css" rel="stylesheet" type="text/css">
  <link href="css/adaptive.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="navbar-wrapper">
    <div class="container">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""/></a>
          </div>
          <div class="navbar-collapse collapse" id="myNavbar">
            <div class="nav navbar-nav navbar-right">
              <a class="link-gallery active" href="#">Галерея</a>
              <a class="link-shop" href="#">Магазин</a>
              <a class="link-brands" href="#">Бренды</a>
              <a class="link-about" href="#">О магазине</a>
              <a class="link-contacts" href="#">Контакты</a>
            </div>
          </div>
          <div class="card text-right hidden-xs">
            <a href="#" class="link-card">
              (<span id="counter" class="count">0</span>)
              Корзина
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="item-img">
          <div class="item-overlay"></div>
        </div>
        <div class="carousel-caption">
          <h2>Коллекция сезона</h2>
          <h1>Брутальный дровосек</h1>
          <a href="#" class="btn">Подробнее</a>
        </div>
      </div>

      <div class="item">
        <div class="item-img">
          <div class="item-overlay"></div>
        </div>
        <div class="carousel-caption">
          <h2>Коллекция сезона</h2>
          <h1>Брутальный дровосек</h1>
          <a href="#" class="btn">Подробнее</a>
        </div>
      </div>

      <div class="item">
        <div class="item-img">
          <div class="item-overlay"></div>
        </div>
        <div class="carousel-caption">
          <h2>Коллекция сезона</h2>
          <h1>Брутальный дровосек</h1>
          <a href="#" class="btn">Подробнее</a>
        </div>
      </div>

      <div class="item">
        <div class="item-img">
          <div class="item-overlay"></div>
        </div>
        <div class="carousel-caption">
          <h2>Коллекция сезона</h2>
          <h1>Брутальный дровосек</h1>
          <a href="#" class="btn">Подробнее</a>
        </div>
      </div>
    </div>
  </div>

  <div class="trending">
    <div class="container">
      <h2 class="trending-caption">Лучшая модель</h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="image-background">
            <img id="image-target" class="image" src="img/M.png"/>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="block-description">
            <h2>Топор обыкновенный</h2>
            <span>Коллекция: лето/зима</span>
            <span>Материал: корозионностойкая дамасская сталь</span>
            <p>Обыкновенный топор, обладающий, как хозяйственными качествами, так и оружейными. Может активно применяться в
              различных жизненных ситуациях.
              </br>
              </br>
              Упакован в деревянный футляр, обитый внутри бархатом.
            </p>
            <div class="row">
              <div class="col-xs-3 col-md-2">
                <input type="button" value="M"  class="btn select-size active">
              </div>
              <div class="col-xs-3 col-md-2">
                <input type="button" value="L"  class="btn select-size">
              </div>
              <div class="col-xs-3 col-md-2">
                <input type="button" value="XL" class="btn select-size">
              </div>
              <div class="col-xs-3 col-md-2">
                <input type="button" value="XXL" class="btn select-size">
              </div>
              <div class="col-xs-4">
              <input type="button" id="button" name="click" value="Купить" class="btn button-buy btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      Товар добавлен в корзину
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-comment">
        <div class="row">
          <div class="col-xs-3 col-md-2 vcenter">
            <div class="user-img"></div>
          </div>
          <div class="col-xs-8 col-md-4 vcenter">
            <div class="user-comment">
              Очень хороший топор. Брал в подарок для тещи. Пришел действител в деревянном футляре но без бархата =)
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="copyright text-center">
        Сайт мастер
      </div>
    </div>
  </footer>
  
</body>
  <script src="js/index.js"></script>
</html>