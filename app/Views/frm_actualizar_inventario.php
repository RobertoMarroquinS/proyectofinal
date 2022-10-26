<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a><br><br>
    <a href="<?= base_url('cliente') ?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <h1>Actualizar Inventario</h1>
        <form action="<?= base_url('actualizar_inventario') ?>" method="post">
            <div class="mb-3">
                <label for="txt_idinventario" class="form-label">ID Inventario</label>
                <input type="text" class="form-control" name="txt_idinventario" value="<?= $inventario['id_inventario'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_idproducto" class="form-label">ID Producto</label>
                <input type="text" class="form-control" name="txt_idproducto" value="<?= $inventario['id_producto'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_idalmacen" class="form-label">ID Almacen</label>
                <input type="text" class="form-control" name="txt_idalmacen" value="<?= $inventario['id_almacen'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_existencia" class="form-label">Existencia</label>
                <input type="text" class="form-control" name="txt_existencia" value="<?= $inventario['cantidad_existencia'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_fecha" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="txt_fecha" value="<?= $inventario['fecha'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="btn_guardar_Cliente" value="Guardar Cambios">
            </div>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>