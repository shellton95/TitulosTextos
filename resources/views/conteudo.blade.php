<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{'../../css/app.css'}}">
    <title>Document</title>
</head>
<style>
    body{
        margin-left: 50px;
        margin-right: 50px;
        background-color: #8B8989;
       
    }
    .texto{
       
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
    }
    h2{
        padding: 20px;
    }
    p{
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 300px;
        padding-right: 300px;
    }
    .container-fluid{
        padding: 20px;
    }
    .container, .img{
        height: 400px;
        width: 400px;
        object-fit: contain;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-light">  
        <a class="btn btn-outline-danger" href="http://127.0.0.1:8000/albuns">Voltar</a>
</nav>
<body >
    <div class="texto">
       
        <h2 class="text-center">{{$ushow->titulo}}</h2>
        <div class="container">
            <img class="img" src="/storage/{{$ushow->imgcapa}}" alt=""> 
        </div> 
        <p>     
            {{$ushow->historia}}  
        </p>
    </div>
</body>
</html>
