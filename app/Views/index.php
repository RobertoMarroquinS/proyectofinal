<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA -Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><br><br><br><br>
        <div class="imagen">
            <center><img src="https://i.pinimg.com/564x/43/e8/54/43e854f97a077a802409e6af4090ac2b.jpg" width="160" height="160"></center>
        </div><br>
        <div class="row">
            <div class="col-md-4 offset-md-4 bg-light border rounded-2"><br>
                <form action="<?=base_url('usuario') ?>"method="post"> 
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Email</label>
                        <input type="text" class="form-control" name="txtemail" placeholder="Ingrese su Email">
                    </div>
                    <div class="mb-3">
                        <label for="txtpass" class="form-label">Password</label>
                        <input type="password" class="form-control" name="txtpass" placeholder="Ingrese Contraseña">
                    </div>
                    <div class="mb-3">
                    <center><button type="submit" class="btn btn-primary" name="btn_sesion">Ingresar</button></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>