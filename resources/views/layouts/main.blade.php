<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>GetFit.kz - всё о правильном питании</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
    <link href="/css/pricing.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-success" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">О сайте GetFit.kz</h4>
              <p class="text-white">Сайт посвящен Правильному питанию и готовым меню. Здесь вы сможете выбрать для себя подходящее меню и сразу же получить список продуктов для покупок. Мы расскажем вам о том, какую пищу стоит исключить из вашего рациона.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              @guest
                <h4 class="text-white">Навигация</h4>
              @else
                <h4 class="text-white">{{ Auth::user()->name }}</h4>
              @endguest
              <ul class="list-unstyled">
                @guest
                  <li><a href="{{ route('login') }}" class="text-white">Вход</a></li>
                  @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="text-white">Регистрация</a></li>
                  @endif
                @else
                  <li><a href="{{ route('dashboard') }}" class="text-white">Мое меню на неделю</a></li>
                  <li><a href="{{ route('recipes.create') }}" class="text-white">Добавить рецепт</li>
                  <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" class="text-white">
                     Выйти
                  </a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                @endguest
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-success box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>GetFit.kz</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">
    @yield('banner')
    @include('inc.messages')
    @yield('content')
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">К началу страницы</a>
        </p>
        <p>Сайт создан в качестве проектной работы на базе &copy; Bootstrap, с использованием PHP, Mysql, HTML и CSS.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../js/popper.min.js"></script>
    <script src="../../../../js/bootstrap.min.js"></script>
    <script src="../../../../js/holder.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
  </body>
</html>
