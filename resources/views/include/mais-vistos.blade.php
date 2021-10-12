<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="product__sidebar">
        <div class="product__sidebar__view">
            <div class="section-title">
                <h5>Mais Vistos</h5>
            </div>
            <ul class="filter__controls">
                <li class="active" data-filter=".day">Diário</li>
                <li data-filter=".week">Semanal</li>
                <li data-filter=".month">Mensal</li>
                <li data-filter=".years">Anual</li>
            </ul>
            <div class="filter__gallery" id="container">
                @foreach($mais_vistos['diario'] as $diario)
                    <div class="product__sidebar__view__item set-bg mix day"
                         data-setbg="{{asset($diario->img)}}">
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="{{route('ver',$diario->slug)}}">{{$diario->title}}</a></h5>
                    </div>
                @endforeach

                @foreach($mais_vistos['semanal'] as $semanal)
                    <div class="product__sidebar__view__item set-bg mix week"
                         data-setbg="{{asset($semanal->img)}}">
                        <div class="view"><i class="fa fa-eye"></i> {{$semanal->views}}</div>
                        <h5><a href="{{route('ver',$semanal->slug)}}">{{$semanal->title}}</a></h5>
                    </div>
                @endforeach

                @foreach($mais_vistos['mensal'] as $mensal)
                    <div class="product__sidebar__view__item set-bg mix month"
                         data-setbg="{{asset($mensal->img)}}">
                        <div class="view"><i class="fa fa-eye"></i> {{$mensal->views}}</div>
                        <h5><a href="{{route('ver',$mensal->slug)}}">{{$mensal->title}}</a></h5>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</div>
