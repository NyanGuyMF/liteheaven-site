<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-TileColor" content="#d62414">
  <meta name="theme-color" content="#d62414">
  <title>LiteHeaven | 185.159.130.118</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/png">

  <!-- meta for searchers -->
  <meta name = "robots" content = "index,follow"/>
  <meta name = "keywords" content = "мinecraft, server, сервер, майнкрафт, liteheaven, lite, heaven, lite heaven"/>

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=cyrillic" rel="stylesheet">

  <!-- css -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ URL::asset('css/buttons.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ URL::asset('css/style.min.css') }}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/preloader.css') }}">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<div id="preloader" class="preloader" style="">
  <div class="spinner">
    <div class="pre-bounce1"></div>
    <div class="pre-bounce2"></div>
  </div>
</div>

<section id="fuck-footer" style="background: #fff;">
  <header>

    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img class="logo" src="http://img1.wikia.nocookie.net/__cb20111230161227/assassinscreed/images/7/70/Minecraft-logo.png" width="300">
        </div>
        <div class="col-md-10">

          <!-- navigation start -->
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#minecraft-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="minecraft-navbar">
              <ul class="nav navbar-nav navbar-right">
                <!-- navigation links -->
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="#features">Преимущества</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#servers">Сервера</a></li>
                <li><a href="#donate">Донат</a></li>
                <!--                     <li><a href="#">Форум<br><span id="soon">(скоро)</span></a></li> -->
                <!-- end navigation links -->
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
          <!-- navigation end -->
        </div>
      </div>
    </div>

    <!-- banner text -->
    <h1>LiteHeaven!</h1>
    <p>Лучший сервер СНГ без обмана на привелегии!</p>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p> -->
    <div class="links">
      <!-- <a href="#" class="btn btn-transparent">Watch The Video <i class="fa fa-play-circle-o"></i></a> -->
      <a id="buy-donate" class="btn btn-danger effect effect-1" data-toggle="modal" data-target="#donateModal">Донат!</a>
    </div>
    <!-- end banner text -->
  </header>

  <!-- features section -->
  <div class="row">
    <div id="features">
      <h1>У нас много <span>Потрясающих Преимуществ</span>, которые отличают<br>LiteHeaven от других серверов</h1>

      <!-- feautre list -->
      <div class="feature-list">

        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-4">
            <div class="col-md-4">
              <img class="feature-img img-responsive" src="{{ URL::asset('img/features/feature-support.jpg') }}" style="height:auto">
            </div>
            <div class="col-md-8">
              <h3>Отзывчивые Админы</h3>
              <p>Самая отзывчивая администрация, которая всегда готова помочь.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-4">
              <img class="feature-img img-responsive" src="{{ URL::asset('img/features/feature-gamepad.jpg') }}" style="height:auto">
            </div>
            <div class="col-md-8">
              <h3>Мини-игры <span id="soon">(скоро)</span></h3>
              <p>Лучшие мини-игры на отдельном сервере для развлечений.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-4">
              <img class="feature-img img-responsive" src="{{ URL::asset('img/features/feature-community.jpg') }}" style="height:auto">
            </div>
            <div class="col-md-8">
              <h3>Хорошее комьюнити</h3>
              <p>Именно у нашего сервера самое отзывчивое комьюнити.</p>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-md-offset-2" style="margin-top:30px">
          <div class="col-md-4">
            <div class="col-md-4">
              <img class="feature-img img-responsive" src="{{ URL::asset('img/features/feature-leaderboards.jpg') }}" style="height:auto">
            </div>
            <div class="col-md-8">
              <h3>Топ игроков</h3>
              <p>На нашем сервере действует уникальная система игроко.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-4">
              <img class="feature-img img-responsive" src="{{ URL::asset('img/features/feature-protect.jpg') }}" style="height:auto">
            </div>
            <div class="col-md-8">
              <h3>DDoS защита</h3>
              <p>Наш сервер защищён самым лучшим ПО и каждый день проверяется Сис.Админом.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-4">
              <img class="feature-img img-responsive" src="{{ URL::asset('img/features/feature-ranking.jpg') }}" style="height:auto">
            </div>
            <div class="col-md-8">
              <h3>Кланы</h3>
              <p>Объединяйтесь с остальными игроками сервера в сообщества, воюйте и зарабатывайте рейтинг!</p>
            </div>
          </div>
        </div>

      </div><!-- /feature-list -->
    </div><!-- /features -->
  </div>

  <!-- about section -->
  <div class="row">
    <div id="about">
      <h1>
        Получите незабываемые впечатления от<br>
        игры на нашем сервере LiteHeaven!
      </h1>
      <p>
        На нашем сервере есть мини-игры, с которыми Вы не заскучаете.В настоящее<br>
        время разрабатывается отдельный Vanilla сервер для любителей выживания! <br>
        Именно здесь Вы сможете польностью расслабиться и наслаждаться игрой!<br>
      </p>
      <!-- <a href="#" class="btn btn-transparent">Watch The Video <i class="fa fa-play-circle-o"></i></a> -->
      <a href="#features" class="btn btn-black effect effect-1">Фишки!</a>
    </div>
  </div>

  <!-- servers section -->
  <div class="row">
    <div id="servers">
      <h1>Ознакомьтесь С Нашей <span>Большой</span> Коллекцией Серверов!<!-- <br>All Of Them, Free To Join. --></h1>

      <div class="col-md-8 col-md-offset-2">

        <div class="col-md-4"><!-- server 1 -->
          <img src="{{ URL::asset('img/server-1.jpg') }}" class="img-responsive" style="margin: 0 auto;">
          <h3>Чарли<br><span id="soon">(скоро)</span></h3>
          <p>Наш первый игровой сервер с самой лучшей оптимизацией.
            Тихое выживание или мирные постройки - это про этот сервер.</p>
        </div>
        <div class="col-md-4"><!-- server 2 -->
          <img src="{{ URL::asset('img/server-2.jpg') }}" class="img-responsive" style="margin: 0 auto;">
          <h3>Vanilla</h3>
          <p>Данный проект планируется, как закрытый сервер выживания
            без гриферства с друзьями.</p>
        </div>
        <div class="col-md-4"><!-- server 3 -->
          <img src="{{ URL::asset('img/server-3.jpg') }}" class="img-responsive" style="margin: 0 auto;">
          <h3>Мини-игры<br><span id="soon">(скоро)</span></h3>
          <p>Самый популярный раздел Minecraf - мини-игры.
            Чтобы не отставать от трендов мы делаем свои!</p>
        </div>

      </div>

    </div><!-- /servers -->
  </div><!-- /row -->

  <!-- donator section -->
  <div class="row">
    <div id="donate">
      <div class="container">
        <div class="col-md-8">
          <h1>Получи доступ ко всем командам, приоритет на наших серверах, купи лучший донат.</h1>
          <p>Наш сервер очень быстро развивается. У Вас есть уникальная возможность проследить
            за тем, как создаётся лучший сервер СНГ! Вы можете купить лучшие привелегии и помочь
            развитию сервера.
          </p>
            <a href="#buy-donate" class="btn btn-danger effect effect-1" style="width: 196px; display: inline-block"> Купить донат </a>
        </div>
        <div class="col-md-4">
          <img class="visible-lg" src="{{ URL::asset('img/3d-skin.png') }}">
        </div>
      </div>
    </div>
  </div>
  <!-- end donator section -->
</section>

<!-- footer -->
<footer>
  <div class="row">
    <div class="container">
      <div class="col-md-4">
        <img src="http://img1.wikia.nocookie.net/__cb20111230161227/assassinscreed/images/7/70/Minecraft-logo.png" width="270">
      </div>
      <div class="col-md-8">
        <div class="row">
          <h2>Подключись к <span>лучшему</span> Серверу</h2>
          <div class="social-links">
            <a href="https://vk.com/club174017128"><i class="fa fa-vk"></i></a>
            <!-- <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a> -->
          </div>
        </div>
        <div class="row">
          <div class="spacer"></div>
          <div class="links">
            <a href="#">MINECRAFT.NET</a>
            <!-- <a href="#">ФОРУМЫ</a> -->
            <a href="#buy-donate">ДОНАТ</a>
            <a href="#">ПОДДЕРЖКА</a>
            <!-- data-toggle="modal" data-target="#rulesModal" -->
            <a href="https://vk.com/@liteheaven-rules" >ПРАВИЛА СЕРВЕРА</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Отсутствует.
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="rulesModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="rulesModalTitle">Правила сервера
          <!-- TODO add awesome colors -->
          <span class="serverName"> LiteHeaven</span>
        </h3>
      </div>
      <div class="modal-body">
        <!-- TODO write the rules -->
      </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- javascript -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/footer-reveal.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/nav.js') }}"></script>
<script type="text/javascript">

    // nav media
    $(document).ready(function() {
        $('.nav').onePageNav({
            begin: function() {
                $('body').append('<div id="device-dummy" style="height: 1px;"></div>');
            },
            end: function() {
                $('#device-dummy').remove();
            }
        });
    });

    // footer-effect
    $('footer').footerReveal();

    // smooth links
    $("body").on('click', '[href*="#"]', function(e){
        var fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1250);
        e.preventDefault();
    });

</script>
<script src="{{ URL::asset('js/preloader.js') }}"></script>
</body>
</html>
