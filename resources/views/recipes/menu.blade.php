@extends('layouts.main')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Меню на неделю для
  @if ($menu_id == 1) похудения @endif
  @if ($menu_id == 2) набора мышечной массы @endif
  @if ($menu_id == 3) молодых мам @endif
  </h1>
  <p class="lead">
  @if ($menu_id == 1) Меню дня похудения. Сбалансированное меню, содержащая все необходимые организму вещества, но при этом, позволяющее сбросить лишние килограммы. Наше меню позволит сделать это вкусно и с удовольствием. @endif
  @if ($menu_id == 2) Спортивное меню, специально подобранное для набора мышечной массы и восстановления организма после тренировок. Элементы, входящие в состав меню, дадут строительный материал для вашего роста и обеспечат организм необходимыми микроэлементами для здорового сна. @endif
  @if ($menu_id == 3) Всем известно, в первый год жизни ребенок должен получать все необходимые питательные вещества через молоко матери. Меню для молодых мам специально составлено так, чтобы вы и ваш малыш чувствовали себя отлично. @endif
  </p>
</div>

<div class="container">
  <div class="card-deck mb-4 text-center">
    @if(count($recipes) > 0)
        @foreach($recipes as $key=>$recipe)
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{$weekdays[$key]}}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        <img class="card-img-top" src="{{$recipe->image_url}}" alt="{{$recipe->title}}">
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                    <li>{{$recipe->title}}</li>
                    <li><small class="text-muted">{{substr(strip_tags($recipe->body), 0, 300)}}</small></li>
                    </ul>
                    <a href="/recipes/{{$recipe->id}}" class="btn btn-lg btn-block btn-outline-primary">Подробнее</a>
                </div>
            </div>
        @endforeach
    @else
        <p>Не найдено рецептов</p>
    @endif
  </div>
</div>
@endsection
