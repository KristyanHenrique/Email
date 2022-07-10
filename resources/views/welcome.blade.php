<!DOCTYPE html>
<html>
<style>
    .row{
        margin-top: 5%;
    }
</style>
<body>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <div class="container">
        <div class="row">
            <div class="col s12 l12">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title center-align">{{$nome}}</span>
                        {{$conteudo}}
                    </div>
                    <div class="card-action center-align">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Clique Aqui imediatamente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    <p>Escrito Por: {{$nome}}</p><br>
    <p>Responder Para: <a href="mailto:{{$email}}">{{$email}}</a></p><br>
    <p>{{$conteudo}}</p>
</body>
</html>