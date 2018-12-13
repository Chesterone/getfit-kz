@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Рецепты</div>

                <div class="card-body">
                    @if(count($recipes) > 0)
                        @foreach($recipes as $recipe)
                            <div class="well">
                                <h3><a href="/recipes/{{$recipe->id}}">{{$recipe->title}}</a></h3>
                                <small>Создан {{$recipe->created_at}} пользователем {{$recipe->user->name}}</small>
                            </div>
                        @endforeach
                        {{$recipes->links()}}
                    @else
                        <p>Не найдено рецептов</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
