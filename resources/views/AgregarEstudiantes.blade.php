<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Agregar estudiantes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div clas="container">
        <div class="row">
            <div class="col">
                <h2>Agregar estudiantes</h2>
                <form method="post" action="{{route ('estudiante.store')}}"><div class="form-group">
                    @if (count($errors) > 0)
                    <div class= "alert alert=danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <input type="text" name="Matricula" class="form-control" placeholder="Matricula" value="{{old('Matricula')}}">
                </div>
                <div class="form-group">
                    <input type="text" name="Nombre" class="form-control"placeholder="Nombre" value="{{old('Nombre')}}">
                </div>
                <div class="form-group">
                    <input type="text" name="Direccion" class="form-control"placeholder="Dirección" value="{{old('Direccion')}}"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                    {{ csrf_field() }}
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
