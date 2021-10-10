<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{route('inicio')}}">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                            <li><a href="#">Categorias <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    @foreach($categorias as $categoria)
                                        <li><a href="/categoria/{{$categoria->slug}}">{{$categoria->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
