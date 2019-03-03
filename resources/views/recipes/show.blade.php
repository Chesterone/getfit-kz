@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$recipe->title}}</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" onclick="history.back()">Назад</a>
                </div>
    
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        <img class="card-img-top" src="{{$recipe->image_url}}" alt="{{$recipe->title}}">
                    </h1>
                    <p>
                    {!!$recipe->body!!}
                    </p>
                    <small>Создан {{$recipe->created_at}} пользователем {{$recipe->user->name}}</small>
                </div>
        </div>
</div>
</div>
@endsection
