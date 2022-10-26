<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Traslados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') ?>">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
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
    <div class="container"><br>
    <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a><br><br>
        <h1 class="text-center">Traslados</h1> 
    <a href="<?= base_url('menuadministrador') ?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Traslado
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Traslados</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('nuevotraslado') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_traslado" class="form-label">ID Traslado</label>
                                <input type="text" class="form-control" name="txt_traslado" placeholder="Ingrese ID Traslado">
                            </div>
                            <div class="mb-3">
                                <label for="txt_fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="txt_fecha" placeholder="Ingrese Fecha">
                            </div>
                            <div class="mb-3">
                                <label for="txt_idinventario" class="form-label">ID Inventario</label>
                                <input type="text" class="form-control" name="txt_idinventario" placeholder="Ingrese ID Inventario">
                            </div>
                            <div class="mb-3">
                                <label for="txt_adestino" class="form-label">Almacen de Destino</label>
                                <input type="text" class="form-control" name="txt_adestino" placeholder="Ingrese Almacen de Destino">
                            </div>
                            <div class="mb-3">
                                <label for="txt_cantidad" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" name="txt_cantidad" placeholder="Ingresar Cantidad">
                            </div>
                            <div class="mb-3">
                                <label for="txt_idusuario" class="form-label">ID Usuario</label>
                                <input type="text" class="form-control" name="txt_idusuario" placeholder="Ingrese ID Usuario">
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

        <table class="table table-striped pt-5 pb-5 text-center" id='dataTable'>
            <thead>
                <tr class="table-primary">
                    <th>ID Traslado</th>
                    <th>Fecha</th>
                    <th>ID Inventario</th>
                    <th>Almacen de Destino</th>
                    <th>Cantidad</th>
                    <th>Nombre Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_traslado as $registro):
                ?>
                    <tr>
                        <td><?= $registro['id_traslado'] ?></td>
                        <td><?= $registro['fecha'] ?></td>
                        <td><?= $registro['id_inventario'] ?></td>
                        <td><?= $registro['nombre_almacen'] ?></td>
                        <td><?= $registro['cantidad'] ?></td>
                        <td><?= $registro['nombre_usuario'] ?></td>

                        <td>
                            <a href="<?= base_url('datos_traslado/' . $registro['id_traslado']) ?>"><i class="fa-solid fa-pencil"></i></a>
                            <a href="<?= base_url('eliminar_traslado/' . $registro['id_traslado']) ?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!--datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    
     <!-- datatables JS -->
     <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js')?>"></script>
     <!-- para usar botones en datatables JS -->  
     <script src="<?= base_url('datatables/Buttons-1.5.6/js/dataTables.buttons.min.js')?>"></script>  
     <script src="<?= base_url('datatables/JSZip-2.5.0/jszip.min.js')?>"></script>    
     <script src="<?= base_url('datatables/pdfmake-0.1.36/pdfmake.min.js')?>"></script>    
     <script src="<?= base_url('datatables/pdfmake-0.1.36/vfs_fonts.js')?>"></script>
     <script src="<?= base_url('datatables/Buttons-1.5.6/js/buttons.html5.min.js')?>"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="<?= base_url('js/main.js')?>"></script>
</body>

</html>