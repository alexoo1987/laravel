@extends('layout')
@section('contend')

    <div class="container">


            <div id="products" class="row list-group">
                <div class="item">
                    <div class="thumbnail">
                        <div class="caption">
                            <img class="group list-group-image clo-2" src="{{$article->img}}" alt="1" />

                            <h6 class="group inner list-group-item-heading">Автор: {{$article->user->name}}</h6>
                            <h1 class="group inner list-group-item-text">
                                {{$article->text}}
                            </h1>
                            <h3>  {{$article->description}}  </h3>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h6 class="lead">Дата создания: {{$article->created_at}}</h6>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-xs-12 col-md-6">
            <a class="btn btn-success" href="/blogs">На главную</a>
        </div>
    </div>

@endsection
