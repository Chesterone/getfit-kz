@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$recipe->title}}</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/recipes">Назад</a>
                </div>
    
                <div class="card-body">
                    {!!$recipe->body!!}
                </div>
                <div class="card-body">
                    <small>Дата создания {{$recipe->created_at}}</small>
                </div>
        </div>
        <hr />
        <a href="/recipes/{{$recipe->id}}/edit" class="btn btn-primary">Редактировать</a>
        {!!Form::open(['action' => ['RecipesController@destroy', $recipe->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
</div>
</div>
@endsection
