<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a><br><br>
    <a href="<?= base_url('cliente') ?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <h1>Actualizar Venta</h1>
        <form action="<?= base_url('actualizar_venta') ?>" method="post">
            <div class="mb-3">
                <label for="txt_idventa" class="form-label">ID Venta</label>
                <input type="text" class="form-control" name="txt_idventa" value="<?= $ventas['id_venta'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_idcliente" class="form-label">ID Cliente</label>
                <input type="text" class="form-control" name="txt_idcliente" value="<?= $ventas['id_cliente'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_idusuario" class="form-label">ID Usuario</label>
                <input type="text" class="form-control" name="txt_idusuario" value="<?= $ventas['id_usuario'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_fecha" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="txt_fecha" value="<?= $ventas['fecha'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_nofactura" class="form-label">Número de Factura </label>
                <input type="text" class="form-control" name="txt_nofactura" value="<?= $ventas['no_factura'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="btn_guardar_Cliente" value="Guardar Cambios">
            </div>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>