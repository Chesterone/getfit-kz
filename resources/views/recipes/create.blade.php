@extends('layouts.main')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавить новый рецепт</div>
                    {!! Form::open(['action' => 'RecipesController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Название')}}
                            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Название'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('body', 'Рецепт')}}
                            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Рецепт'])}}
                        </div>
                        {{Form::submit('Добавить', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
