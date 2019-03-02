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
                    {!!$recipe->body!!}
                </div>
                <div class="card-body">
                    <small>Создан {{$recipe->created_at}} пользователем {{$recipe->user->name}}</small>
                </div>
        </div>
</div>
</div>
@endsection
