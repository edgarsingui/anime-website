<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

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

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{route('inicio')}}"><i class="fa fa-home"></i> Inicio</a>
                    <a href="#">Categoria</a>
                    <span>{{$anime[0]->category}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="{{asset($anime[0]->img)}}">
                        <div class="view"><i class="fa fa-eye"></i> {{$anime[0]->views}}</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>{{$anime[0]->title}}</h3>
                        </div>

                        <p>{{$anime[0]->description}}</p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Tipo:</span> {{$anime[0]->type}}</li>
                                        <li><span>Estudio:</span> {{$anime[0]->studios}}</li>
                                        <li><span>Date aired:</span> Oct 02, 2019 to ?</li>
                                        <li><span>Estado:</span> {{$anime[0]->status}}</li>
                                        <li><span>Genero:</span> {{$anime[0]->genre}}</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Classificação:</span>{{$anime[0]->scores}}</li>
                                        <li><span>Duração:</span> {{$anime[0]->duration}}</li>
                                        <li><span>Qualidade:</span> {{$anime[0]->quality}}</li>
                                        <li><span>Views:</span> {{$anime[0]->views}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            <a href="#" class="watch-btn"><span>Assistir</span> <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Comentários</h5>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{asset('assets/img/anime/review-1.jpg')}}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Edgar Singui </h6>
                            <p>Wow, este anime é simplesmente espetacular!!</p>
                        </div>
                    </div>

                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{asset('assets/img/anime/review-3.jpg')}}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Evandro Fortuna </h6>
                            <p>Quando sai o ep 4 ??</p>
                        </div>
                    </div>

                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Seu Comentário</h5>
                    </div>
                    <form action="#">
                        <textarea placeholder="Comente algo legal"></textarea>
                        <button type="submit" class="btn-block"><i class="fa fa-location-arrow"></i> Comentar</button>
                    </form>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="anime__details__sidebar">
                    <div class="section-title">
                        <h5>Assista tambêm</h5>
                    </div>
                    @foreach($semelhantes as $semelhante)
                    <div class="product__sidebar__view__item set-bg" data-setbg="{{asset($semelhante->img)}}">
                        <div class="view"><i class="fa fa-eye"></i> {{$semelhante->views}}</div>
                        <h5><a href="{{$semelhante->slug}}">{{$semelhante->title}}</a></h5>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="{{route('inicio')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                        <li><a href="">Blog</a></li>
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
