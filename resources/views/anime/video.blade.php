@extends('layout')
@section('conteudo')
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{route('inicio')}}"><i class="fa fa-home"></i> Inicio</a>
                    <a href="#">Categoria</a>
                    <a href="#">{{$anime[0]->CategoryName}}</a>
                    <span>{{$anime[0]->title}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__video__player">
                    <video id="player" playsinline controls data-poster="{{asset('assets/videos/anime-watch.jpg')}}">
                        <source src="{{asset($anime[0]->link)}}" type="video/mp4" />
                        <track kind="captions" label="English captions" src="#" srclang="en" default />
                    </video>
                </div>
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>Episodios</h5>
                    </div>
                    @foreach($episodios as $episodio)
                        <a href="{{route('episodio',[$episodio->slug,$episodio->ep_number])}}">{{$episodio->ep_name}}</a>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-8">
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
                                    <h6>{{$comentario->name}}</h6>
                                    <p>{{$comentario->comment}}</p>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Seu Comentário</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Digie algo legal"></textarea>
                                <button class="btn-block" type="submit"><i class="fa fa-location-arrow"></i> Comentar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>
@endsection
