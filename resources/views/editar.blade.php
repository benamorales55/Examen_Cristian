<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

{!!Form::model($persona,['method'=>'PUT','route'=>['persona.update',$persona->Id]])!!}

{{Form::token()}}

    <br><br><br>
    <h1 style="text-align:center;">Editar al Usuario {{$persona->Nombre}}</h1>
    <br><br><br>
        <div class="row" >
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="nombre"><b>Nombre</b></label>
                <input type="text" name="nombre" require value="{{$persona->Nombre}}" class ="form-control" >
            </div>
        </div>

        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="nombre"><b>Apellido</b></label>
                <input type="text" name="apellido" require value="{{$persona->Apellido}}" class ="form-control" >
            </div>
        </div>
            
      
        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="nombre"><b>Cedula</b></label>
                <input type="text" name="cedula" require value="{{$persona->Cedula}}" class ="form-control" >
            </div>
        </div>

        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="nombre"><b>Direccion</b></label>
                <input type="text" name="direccion" require value="{{$persona->Direccion}}" class ="form-control" >
            </div>
        </div>

        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="nombre"><b>Telefono</b></label>
                <input type="text" name="telefono" require value="{{$persona->Telefono}}" class ="form-control" >
            </div>
        </div>

        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="nombre"><b>User</b></label>
                <input type="text" name="user" require value="{{$persona->user}}" class ="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <input class="btn btn-success" type="submit"></input>
                <a href="/index" class="btn btn-danger">Cancelar</a>
            </div>   
        </div>
        {!!Form::close()!!}
</body>
</html>