<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container"><br>
    <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a>
        <h1 class="text-center">Menú Administrador</h1>
        <div class="list-group"><br>
           <u><b><a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Menú Principal
            </a></b></u>
            <a href="<?=base_url('trabajador') ?>" class="list-group-item list-group-item-action">Usuarios</a>
            <a href="<?=base_url('talmacen') ?>" class="list-group-item list-group-item-action">Tipos Almacenes</a>
            <a href="<?=base_url('almacen') ?>" class="list-group-item list-group-item-action">Almacenes</a>
            <a href="<?=base_url('tproducto') ?>" class="list-group-item list-group-item-action">Tipos Productos</a>
            <a href="<?=base_url('producto') ?>" class="list-group-item list-group-item-action">Productos</a>
            <a href="<?=base_url('') ?>" class="list-group-item list-group-item-action">Inventarios</a>
            <a href="<?=base_url('') ?>" class="list-group-item list-group-item-action">Traslado</a>
            <a href="<?=base_url('') ?>" class="list-group-item list-group-item-action">Detalle de Ventas</a>
            <a href="<?=base_url('') ?>" class="list-group-item list-group-item-action">Venta</a>
            <a href="<?=base_url('') ?>" class="list-group-item list-group-item-action">Clientes</a>




        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>