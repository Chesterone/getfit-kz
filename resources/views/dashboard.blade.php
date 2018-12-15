@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Мои рецепты</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('recipes.create') }}">Добавить рецепт</a>
                </div>

                <div class="card-body">
                @if(count($recipes) > 0)
                        <table class="table table-striped">
                        @foreach($recipes as $recipe)
                            <tr>
                                <td><a href="/recipes/{{$recipe->id}}">{{$recipe->title}}</a></td>
                                <td><a href="/recipes/{{$recipe->id}}/edit" class="btn btn-primary">Редактировать</a></td>
                                <td>
                                {!!Form::open(['action' => ['RecipesController@destroy', $recipe->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Удалить', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    @else
                        <p>У вас пока нет рецептов</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
