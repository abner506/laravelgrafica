<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Editar estudiantes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div clas="container">
        <div class="row">
            <div class="col">
                <h2>Editar estudiantes</h2>
                <form method="post" action="{{route ('Lista.update' ,$estudiante)}}" >
                    @method('PATCH')
                    <div class="form-group">
                    <input type="text" name="Matricula" class="form-control" placeholder="Matricula" value="{{$estudiante->Matricula}}">
                </div>
                <div class="form-group">
                    <input type="text" name="Nombre" class="form-control"placeholder="Nombre" value="{{$estudiante->Nombre}}">
                </div>
                <div class="form-group">
                    <input type="text" name="Direccion" class="form-control"placeholder="Dirección" value="{{$estudiante->Direccion}}"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="Edad" class="form-control"placeholder="Edad" value="{{$estudiante->Edad}}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                    <input type= "submit" value="Cancelar" class="btn btn-primary">
                    {{ csrf_field() }}
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
