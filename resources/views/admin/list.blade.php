<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de Usuarios</title>
    @include ('admin.head')
</head>
<body>
<div class="container-scroller">
<div class="container-fluid page-body-wrapper">
@include ('admin.menu')
@include ('admin.sidebar')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <table class= table table-stripped success>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Actualización</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </tead>
                    @foreach($lista_usuarios as $lista)
                    <tbody>
                    <tr>
                        <td>{{$lista -> id}}</td>
                        <td>{{$lista -> name}}</td>
                        <td>{{$lista -> email}}</td>
                        <td>{{$lista -> password}}</td>
                        <td>{{$lista -> created_at}}</td>
                        <td>{{$lista -> updated_at}}</td>
                        <td>Editar</td>
                        <td>Eliminar</td>

                    </tr>
                    </tbody>
                    @endforeach
                </table>
              </div>
        </div>
    </div>         
</div>

@include ('admin.script')
</div>         
</div>
</body>
<footer>
@include ('admin.footer')
</footer>
</html>