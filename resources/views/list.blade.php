@extends('layout')
@section('contend')

<div class="container">

    @foreach($articles as $article)
    <div id="products" class="row list-group">
        <div class="item list-group-item">
            <img class="group list-group-image col-2" src="{{$article->img}}" alt="1" />

            <div class="thumbnail col">
                <div class="caption">
                    <h6 class="group inner list-group-item-heading">Автор: {{$article->user->name}}
                    </h6>

                    <h2 class="group inner list-group-item-text">
                        {{$article->text}}
                    </h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h6 class="lead">Дата создания:{{$article->created_at}}</h6>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a class="btn btn-success" href="blogs/{{$article->id}}">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
