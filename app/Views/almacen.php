<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Almacenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Almacenes</h1>
        <a href="<?= base_url()?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Almacen
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Almacen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('nuevoalmacen') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_idalmacen" class="form-label">ID Almacen</label>
                                <input type="text" class="form-control" name="txt_idalmacen" placeholder="Ingrese ID Almacen">
                            </div>
                            <div class="mb-3">
                                <label for="txt_idtalmacen" class="form-label">Id Tipo Almacen</label>
                                <input type="text" class="form-control" name="txt_idtalmacen" placeholder="Ingrese ID Tipo Almacen">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txt_nombre" placeholder="Ingrese Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="txt_direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="txt_direccion" placeholder="Ingrese Direccion">
                            </div>
                            <div class="mb-3">
                                <label for="txt_telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="txt_telefono" placeholder="Ingrese Telefono">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="Guardar Talmacen">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped text-center">
            <thead>
                <tr class="table-primary">
                    <th>ID Almacen</th>
                    <th>ID Tipo Almacen</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_almacen as $registro):
                ?>
                    <tr>
                        <td><?= $registro['id_almacen'] ?></td>
                        <td><?= $registro['id_tipo_almacen'] ?></td>
                        <td><?= $registro['nombre'] ?></td>
                        <td><?= $registro['direccion'] ?></td>
                        <td><?= $registro['telefono'] ?></td>

                        <td>
                            <a href="<?= base_url('datos_almacen/' . $registro['id_almacen']) ?>"><i class="fa-solid fa-pencil"></i></a>
                            <a href="<?= base_url('eliminar_almacen/' . $registro['id_almacen']) ?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>