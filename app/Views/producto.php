<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Productos</h1>
        <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a><br><br>
    <a href="<?= base_url('menuadministrador') ?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Productos
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('nuevoproducto') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_idproducto" class="form-label">ID Producto</label>
                                <input type="text" class="form-control" name="txt_idproducto" placeholder="Ingrese ID Almacen">
                            </div>
                            <div class="mb-3">
                                <label for="txt_idtproducto" class="form-label">ID Tipo Producto</label>
                                <input type="text" class="form-control" name="txt_idtproducto" placeholder="Ingrese ID Tipo Almacen">
                            </div>
                            <div class="mb-3">
                                <label for="txt_descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" name="txt_descripcion" placeholder="Ingrese Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="txt_punidad" class="form-label">Precio Unidad</label>
                                <input type="text" class="form-control" name="txt_punidad" placeholder="Ingrese Direccion">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="Guardar productos">Guardar</button>
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
                    <th>ID Producto</th>
                    <th>ID Tipo Producto</th>
                    <th>Descripción</th>
                    <th>Precio Unidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_producto as $registro):
                ?>
                    <tr>
                        <td><?= $registro['id_producto'] ?></td>
                        <td><?= $registro['id_tipo_producto'] ?></td>
                        <td><?= $registro['descripcion'] ?></td>
                        <td><?= $registro['precio_unidad'] ?></td>

                        <td>
                            <a href="<?= base_url('datos_producto/' . $registro['id_producto']) ?>"><i class="fa-solid fa-pencil"></i></a>
                            <a href="<?= base_url('eliminar_producto/' . $registro['id_producto']) ?>"><i class="fa-solid fa-trash-can"></i></a>
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