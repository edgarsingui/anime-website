<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/elegant-icons.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/plyr.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/nice-select.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/slicknav.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('include.menu')
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                @foreach($destaques as $destaque)
                <div class="hero__items set-bg" data-setbg="{{$destaque->img}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">{{$destaque->category}}</div>
                                <h2>{{$destaque->title}}</h2>
                                <a href="#"><span>Assistir Agora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Tendencia</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Ver Tudo <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach($tendencias as $anime)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$anime->img}}">
                                        <div class="ep">18 / ?</div>
                                        <div class="view"><i class="fa fa-eye"></i> {{$anime->views}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="/anime/{{$anime->slug}}">{{$anime->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach




                        </div>
                    </div>

                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Adicionados Recentemente</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Ver Tudo <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach($tendencias as $anime)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{$anime->img}}">
                                            <div class="ep">18 / ?</div>
                                            <div class="view"><i class="fa fa-eye"></i> {{$anime->views}}</div>
                                        </div>
                                        <div class="product__item__text">
                                            <h5><a href="/anime/{{$anime->slug}}">{{$anime->title}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Mais Vistos</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Diário</li>
                                <li data-filter=".week">Semanal</li>
                                <li data-filter=".month">Mensal</li>
                                <li data-filter=".years">Anual</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="{{asset("assets/img/sidebar/tv-1.jpg")}}">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="{{asset("assets/img/sidebar/tv-2.jpg")}}">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="{{asset("assets/img/sidebar/tv-3.jpg")}}">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="{{asset("assets/img/sidebar/tv-4.jpg")}}">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="{{asset("assets/img/sidebar/tv-5.jpg")}}">
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</section>

<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="/"><img src="{{asset("assets/img/logo.png")}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                </div>
            </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Procurar .....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{asset("assets/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/player.js")}}"></script>
<script src="{{asset("assets/js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("assets/js/mixitup.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.slicknav.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>


</body>

</html>
