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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('company.store') }}" method="post">

                 @csrf
                <div class="form-group">
                    <label for="name">Nombre de la empresa</label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="NIT">NIT de la empresa</label>
                    <input type="text" id="NIT" class="form-control" name="NIT">
                </div>
                <div class="form-group">
                    <label for="address">Dirección de la empresa</label>
                    <input type="text" id="address" class="form-control" name="address">
                </div>
                <hr>
                <button class="btn btn-primary">Guardar Empresa</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
