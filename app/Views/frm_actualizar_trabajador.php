<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Trabajador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Trabajador</h1>
        <form action="<?= base_url('actualizar_trabajador') ?>" method="post">
            <div class="mb-3">
                <label for="txt_idusuario" class="form-label">ID Usuario</label>
                <input type="text" class="form-control" name="txt_idusuario" value="<?= $usuario['id_usuario'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txt_nombre" value="<?= $usuario['nombre'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="txt_apellido" value="<?= $usuario['apellido'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_celular" class="form-label">Celular</label>
                <input type="text" class="form-control" name="txt_celular" value="<?= $usuario['celular'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_dpi" class="form-label">DPI</label>
                <input type="text" class="form-control" name="txt_dpi" value="<?= $usuario['dpi'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="txt_email" value="<?= $usuario['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_contraseña" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="txt_contraseña" value="<?= $usuario['contrasena'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_id_tipo_usuario" class="form-label">ID tipo usuario</label>
                <input type="text" class="form-control" name="txt_id_tipo_usuario" value="<?= $usuario['id_tipo_usuario'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_id_almacen" class="form-label">ID tipo almacen</label>
                <input type="text" class="form-control" name="txt_id_almacen" value="<?= $usuario['id_almacen'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="btn_guardar" value="Guardar Cambios">
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>