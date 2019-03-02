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
                            {{Form::label('image_url', 'Фото')}}
                            {{Form::text('image_url', '', ['class' => 'form-control', 'placeholder' => 'Фото'])}}
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="menu_id" id="exampleRadios1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Меню для похудения
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="menu_id" id="exampleRadios2" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Спортивное меню
                                </label>
                                </div>
                                <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="menu_id" id="exampleRadios3" value="3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Меню для молодых мам
                                </label>
                                </div>
                            </div>
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
