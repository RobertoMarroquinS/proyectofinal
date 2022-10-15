<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tproducto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>

<body>
    <div class="container"><br>
    <a href="<?= base_url();?>/logout" class="btn btn-primary"> &lt;&lt; Cerrar Sesion</a>
        <h1 class="text-center">Tipos de Productos</h1>
        <a href="<?= base_url('menuadministrador');?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Tipos de Productos
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tipos de Productos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('nuevotproducto') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_idtproducto" class="form-label">ID Tipo de Producto</label>
                                <input type="text" class="form-control" name="txt_idtproducto" placeholder="Ingrese ID Tipo del Producto">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txt_nombre" placeholder="Ingrese Nombre">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="Guardar Tproducto">Guardar</button>
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
                    <th>ID Tipo Producto</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_tproducto as $registro):
                ?>
                    <tr>
                        <td><?= $registro['id_tipo_producto'] ?></td>
                        <td><?= $registro['nombre'] ?></td>
                        <td>
                            <a href="<?= base_url('datos_tproducto/' . $registro['id_tipo_producto']) ?>"><i class="fa-solid fa-pencil"></i></a>
                            <a href="<?= base_url('eliminar_tproducto/' . $registro['id_tipo_producto']) ?>"><i class="fa-solid fa-trash-can"></i></a>
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