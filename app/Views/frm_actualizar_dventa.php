<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Detalle Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a><br><br>
    <a href="<?= base_url('cliente') ?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <h1>Actualizar Detalle Venta</h1>
        <form action="<?= base_url('actualizar_dventa') ?>" method="post">
            <div class="mb-3">
                <label for="txt_correlativo" class="form-label">Correlativo</label>
                <input type="text" class="form-control" name="txt_correlativo" value="<?= $dventa['correlativo'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_idinventario" class="form-label">ID Inventario</label>
                <input type="text" class="form-control" name="txt_idinventario" value="<?= $dventa['id_inventario'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="txt_cantidad" value="<?= $dventa['cantidad'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="txt_precio" value="<?= $dventa['precio'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_idventa" class="form-label">ID Venta</label>
                <input type="text" class="form-control" name="txt_idventa" value="<?= $dventa['id_venta'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="btn_guardar_Cliente" value="Guardar Cambios">
            </div>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>