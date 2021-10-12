@extends('layout')

@section('conteudo')
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
                            <a href="{{route('episodio',[$anime[0]->slug,1])}}" class="watch-btn"><span>Assistir</span> <i
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
                    @foreach($comentarios as $comentario)
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{asset('assets/img/anime/review-1.jpg')}}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>{{$comentario->name}} </h6>
                            <p>{{$comentario->comment}}</p>
                        </div>
                    </div>
                    @endforeach


                @if(Auth::check())
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Seu Comentário</h5>
                    </div>
                    <form action="{{route('comentar',[$anime[0]->slug])}}" method="POST">
                        @csrf
                        <textarea name="comentario" placeholder="Comente algo legal"></textarea>
                        <button type="submit" class="btn-block"><i class="fa fa-location-arrow"></i> Comentar</button>
                    </form>
                </div>
                @endif

                @if(Auth::guest())
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Seu Comentário</h5>
                            </div>
                            <form action="{{route('login')}}" method="GET">
                                <textarea disabled placeholder="Faça Login para comentar"></textarea>
                                <button type="submit" class="btn-block"><i class="fa fa-lock"></i> Entrar</button>
                            </form>
                        </div>
                @endif
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
@endsection
