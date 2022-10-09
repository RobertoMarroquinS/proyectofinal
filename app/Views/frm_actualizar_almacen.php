<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Tipo de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Actualizar Tipo Almacen</h1>
        <form action="<?= base_url('actualizar_almacen') ?>" method="post">
            <div class="mb-3">
                <label for="txt_idalmacen" class="form-label">ID Almacen</label>
                <input type="text" class="form-control" name="txt_idalmacen" value="<?= $almacen['id_almacen'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_idtalmacen" class="form-label">ID Tipo Almacen</label>
                <input type="text" class="form-control" name="txt_idtalmacen" value="<?= $almacen['id_tipo_almacen'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txt_nombre" value="<?= $almacen['nombre'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="txt_direccion" value="<?= $almacen['direccion'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="txt_telefono" value="<?= $almacen['telefono'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="btn_guardar_Tproducto" value="Guardar Cambios">
            </div>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>