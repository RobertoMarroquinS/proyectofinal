<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Tipo de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container"><br>
    <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a><br><br>
    <a href="<?= base_url('producto')?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <h1>Actualizar Tipo Producto</h1>
        <form action="<?= base_url('actualizar_producto') ?>" method="post">
            <div class="mb-3">
                <label for="txt_idproducto" class="form-label">ID Producto</label>
                <input type="text" class="form-control" name="txt_idproducto" value="<?= $productos['id_producto'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_idtproducto" class="form-label">ID Tipo Producto</label>
                <input type="text" class="form-control" name="txt_idtproducto" value="<?= $productos['id_tipo_producto'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="txt_descripcion" value="<?= $productos['descripcion'] ?>">
            </div>
            <div class="mb-3">
                <label for="txt_punidad" class="form-label">Precio Unidad</label>
                <input type="text" class="form-control" name="txt_punidad" value="<?= $productos['precio_unidad'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="btn_guardar_Tproducto" value="Guardar Cambios">
            </div>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>