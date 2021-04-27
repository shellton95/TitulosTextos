@extends('index')
@section('conteudo')
<div class="titulocorpo ">
    <h1 class="text-center ">Titulos</h1>
</div>
<br>

    <div class="row">
@foreach ($usuarios as $item)
        <div class="col-sm-3">
            <div class="card" id="card">
                <img src="/storage/{{$item->imgcapa}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $item->titulo }}</h5>
                    <div class="card-body2">
                        <p class="card-text" >Autor: {{ $item->autor }}</p>
                    </div>
                    <div class="botao">
                        <a id="abrir" href="/texto/{{$item->id}}" class="btn btn-outline-primary">Ler</a>
                        <a href="/albuns/{{$item->id}}" class="btn btn-outline-danger">Excluir</a>
                    </div>
                </div>
            </div> 
        </div>   
@endforeach   
        </div>
  
@endsection