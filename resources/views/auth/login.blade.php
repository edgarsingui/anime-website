@extends('layout')
@section('conteudo')
<section class="normal-breadcrumb set-bg" data-setbg="{{asset('assets/img/normal-breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Entrar</h2>
                    <p>Seja Bem-Vindo.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    @if(session('danger'))
                        <div class="alert alert-danger">
                            {{session('danger')}}
                        </div>
                    @endif
                    <h3>Login</h3>
                    <form action="{{route('auth')}}" method="post">
                         @csrf
                        <div class="input__item">
                            <input required name="email" type="email" placeholder="email@anime.ao">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input required name="password" type="password" placeholder="*****">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Entrar</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Ainda não tem uma conta ?</h3>
                    <a href="#" class="primary-btn">Criar Conta</a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
