@extends('layouts.main')

@section('banner')
<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Всё о правильном питании</h1>
        <p class="lead text-muted">Перед началом работы с сайтом рекомендуем вам ознакомиться с информацией по следующим ссылкам:</p>
        <p>
          <a href="{{url('advice')}}" class="btn btn-success my-2">Общие советы по правильному питанию</a>
          <a href="{{url('unhealthy')}}" class="btn btn-danger my-2">Какие продукты следует исключить из рациона?</a>
        </p>
      </div>
    </section>
@endsection

@section('content')
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://i.ibb.co/fFtWzvh/menu1.jpg" alt="Меню для похудения">
          <div class="card-body">
            <p class="card-text">Меню дня похудения. Сбалансированное меню, содержащая все необходимые организму вещества, но при этом, позволяющее сбросить лишние килограммы. Наше меню позволит сделать это вкусно и с удовольствием.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-success" href="{{url('menu/1')}}" role="button">Диет меню</a>
              </div>
              <small class="text-muted">1500 ккал/день</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://i.ibb.co/DCwtvm5/menu2.jpg" alt="Спортивное меню">
          <div class="card-body">
            <p class="card-text">Спортивное меню, специально подобранное для набора мышечной массы и восстановления организма после тренировок. Элементы, входящие в состав меню, дадут строительный материал для вашего роста и обеспечат организм необходимыми микроэлементами для здорового сна.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-danger" href="{{url('menu/2')}}" role="button">Спорт меню</a>
              </div>
              <small class="text-muted">3500 ккал/день</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://i.ibb.co/qWMLtxz/menu3.jpg" alt="Меню для молодых мам">
          <div class="card-body">
            <p class="card-text">Всем известно, в первый год жизни ребенок должен получать все необходимые питательные вещества через молоко матери. Меню для молодых мам специально составлено так, чтобы вы и ваш малыш чувствовали себя отлично.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-primary" href="{{url('menu/3')}}" role="button">Для мам</a>
              </div>
              <small class="text-muted">2200 ккал/день</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
