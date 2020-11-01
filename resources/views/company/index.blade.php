<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('company.create') }}" class="btn btn-primary mt-5 mb-3">Crear nueva empresa</a>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>NIT</th>
                        <th>DIRECCIÓN</th>
                        <th>FECHA CREACIÓN</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->NIT }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->created_at }}</td>
                        <td>
                            <form action="{{ route('company.destroy',$company->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-sm btn-warning">Editar</a>
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                <a href="" class="btn btn-sm btn-info">Detalles</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
