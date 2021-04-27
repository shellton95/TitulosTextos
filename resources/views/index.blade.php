<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta  name="csrf-token" content="{{csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .body{
        margin: 50px;
    }
    .titulocorpo{
      background-color:#FFE4E1;
      padding: 5px;
    }
    .card{
      height: 400px;
      width: 250px;
      overflow: hidden;
      position: relative;
    }
    .card:hover{
      top: -3px;
      border: solid 2px #FF0000;
    }
    
    .card-img-top{
      height: 60%;
      width: 100%;
      object-fit: cover; /*Preenche toda o espçaõ apliando a imagem*/
     /*object-fit: contain; /* ele reduz o tamanho da imagem deixando em branco */
    }
    .card-body2{
      height: 60px;
      padding: 5px;
      overflow: hidden;
    }
    .card-title{
      font-weight: bolder;
    }
    .titulocorpo{
      border-radius:10px;
    }
    h1{
      font-family: 'Comic Sans MS, Comic Sans, cursive';
    }
    .botaoNovo{
   margin-left: 1300px;
    }
 
</style>

<body >
  <div class="navbar navbar-expand-lg navbar-light bg-light ">
    <button  type="button" class="botaoNovo btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Novo
    </button> 
  </div>

      <div class="body">
        @yield('conteudo')
      </div>

      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
              <section class="jumbotron ">
                <div class="container">
                    <h4 class="text-center">Cadastrar Album</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label"> Digite o titulo do album</label>
                            <input type="text" class="form-control {{ $errors->has('titulo') ? 'is-invalid' : ''}}" 
                            name="titulo" placeholder="Titulo">
            @if ($errors->has('titulo'))
                            <div class="invalid-feedback">
                {{$errors->first('titulo')}}      
                            </div>
            @endif
                        </div> 
                        <div class="mb-3">
                            <label for="" class="form-label">Autor</label>
                            <input type="text" class="form-control {{ $errors->has('autor') ? 'is-invalid' : ''}}" 
                            name="autor" placeholder="Autor">
            @if ($errors->has('autor'))
                            <div class="invalid-feedback">
                {{ $errors->first('autor')}}
                            </div>
            @endif
                        </div> 
                        <div class="mb-3">
                            <label for="" class="form-label">Historia</label>
                            <textarea class="form-control {{ $errors->has('areatexto') ? 'is-invalid' : ''}}" 
                                name="areatexto" id="areatexto" cols="5" rows="20" ></textarea>
            @if ( $errors->has('areatexto'))
                                <div class="invalid-feedback">
                {{ $errors->first('areatexto')}}
                                </div>
            @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Escolha a foto de capa</label><br>
                            <input type="file" class="custon-file-input {{ $errors->has('arquivo') ? 'is-invalid' : ''}}" name="arquivo"> 
            @if ( $errors->has('arquivo'))
                            <div class="invalid-feedback">
                {{ $errors->first('arquivo')}}
                            </div>
                
            @endif
                        </div>
                        <button class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </section>  

            </div>
          </div>
        </div>
      </div>

  
</body>
</html>