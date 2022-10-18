<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="<?=base_url('css/jquery.dataTables.min.css') ?>">
    <style>
        .dataTables_length {
            margin-top: 3%;
            width: fit-content;
            white-space: nowrap;
        }
        .dataTables_filter {
            margin-top: -2.5%;
            width: fit-content;
            float: right;
            margin-bottom: 1%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Ventas</h1>
        <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a><br><br>
    <a href="<?= base_url('menuadministrador') ?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Ventas
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ventas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('nuevoventa') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_idventa" class="form-label">ID Venta</label>
                                <input type="text" class="form-control" name="txt_idventa" placeholder="Ingrese ID Venta">
                            </div>
                            <div class="mb-3">
                                <label for="txt_idcliente" class="form-label">ID Cliente</label>
                                <input type="text" class="form-control" name="txt_idcliente" placeholder="Ingrese ID Cliente">
                            </div>
                            <div class="mb-3">
                                <label for="txt_idusuario" class="form-label">ID Usuario</label>
                                <input type="text" class="form-control" name="txt_idusuario" placeholder="Ingrese ID Usuario">
                            </div>
                            <div class="mb-3">
                                <label for="txt_fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="txt_fecha" placeholder="Ingrese Fecha">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nofactura" class="form-label">Número de Factura</label>
                                <input type="text" class="form-control" name="txt_nofactura" placeholder="Ingrese No. Factura">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="Guardar Cliente">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped text-center" id='dataTable'>
            <thead>
                <tr class="table-primary">
                    <th>ID Venta</th>
                    <th>ID Cliente</th>
                    <th>ID Usuario</th>
                    <th>Fecha</th>
                    <th>Número de Factura</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_venta as $registro):
                ?>
                    <tr>
                        <td><?= $registro['id_venta'] ?></td>
                        <td><?= $registro['id_cliente'] ?></td>
                        <td><?= $registro['id_usuario'] ?></td>
                        <td><?= $registro['fecha'] ?></td>
                        <td><?= $registro['no_factura'] ?></td>

                        <td>
                            <a href="<?= base_url('datos_venta/' . $registro['id_venta']) ?>"><i class="fa-solid fa-pencil"></i></a>
                            <a href="<?= base_url('eliminar_venta/' . $registro['id_venta']) ?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/jquery-3.5.1.js');?>"> </script>
    <script src="<?= base_url('js/jquery.dataTables.min.js');?>"> </script>
    <script src="<?= base_url('js/configuracionDataTables.js');?>"> </script>
</body>

</html>