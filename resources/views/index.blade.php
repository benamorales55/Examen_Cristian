<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >
<br><br><br>
    <h1 style="text-align:center">GESTION DE USUARIOS PARA EXAMEN DE VISION EN EL MUNICIPIO DE WASLALA</h1>
    <br/>
    <br/>
    <br/>
    <div style="text-align:right; padding-right:15px;">
        <a href="crear" type="button" class="btn btn-success">Crear</a>
    </div>
    <table class="table table-striped">
        <tr>
            <th style="text-align:center;">Id</th>
            <th style="text-align:center;">Nombre</th>
            <th style="text-align:center;">Apellido</th>
            <th style="text-align:center;">Cedula</th>
            <th style="text-align:center;">Direccion</th>
            <th style="text-align:center;">Telefono</th>
            <th style="text-align:center;">User</th>
            <th style="text-align:center;">Opciones</th>
        </tr>
        @foreach($persona as $per)
        <tr>
            <td style="text-align:center;">{{$per->Id}}</td>
            <td style="text-align:center;">{{$per->Nombre}}</td>
            <td style="text-align:center;">{{$per->Apellido}}</td>
            <td style="text-align:center;">{{$per->Cedula}}</td>
            <td style="text-align:center;">{{$per->Direccion}}</td>
            <td style="text-align:center;">{{$per->Telefono}}</td>
            <td style="text-align:center;">{{$per->user}}</td>
            <td style="text-align:center;">
            <a href="{{URL::action('PersonaController@editar',$per->Id)}}" type="button" class="btn btn-primary">Editar</a>
            <a href="{{URL::action('PersonaController@borrar',$per->Id)}}" type="button" class="btn btn-danger">Eliminar</a>
            </td>
                
            </tr>
        @endforeach
    </table>
</body>
</html>