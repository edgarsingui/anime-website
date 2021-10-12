@extends('layout')
@section('conteudo')
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

               @include('include.mais-vistos')
</div>
</div>
</section>
@endsection
