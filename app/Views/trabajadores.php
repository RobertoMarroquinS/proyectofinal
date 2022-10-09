<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabajadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Usuarios</h1>
        <a href="<?= base_url('') ?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Trabajador
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Datos del Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('nuevoTrabajador') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_idusuario" class="form-label">ID Usuario</label>
                                <input type="text" class="form-control" name="txt_idusuario" placeholder="Ingrese ID Usuario">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txt_nombre" placeholder="Ingrese Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="txt_apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="txt_apellido" placeholder="Ingrese Apellido">
                            </div>
                            <div class="mb-3">
                                <label for="txt_celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" name="txt_celular" placeholder="Ingrese Celular">
                            </div>
                            <div class="mb-3">
                                <label for="txt_dpi" class="form-label">DPI</label>
                                <input type="text" class="form-control" name="txt_dpi" placeholder="Ingrese DPI">
                            </div>
                            <div class="mb-3">
                                <label for="txt_email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="txt_email" placeholder="Ingrese Email">
                            </div>
                            <div class="mb-3">
                                <label for="txt_contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="txt_contraseña" placeholder="Ingrese Contraseña">
                            </div>
                            <div class="mb-3">
                                <label for="txt_id_tipo_usuario" class="form-label">ID Tipo Usuario</label>
                                <input type="text" class="form-control" name="txt_id_tipo_usuario" placeholder="Ingrese ID Tipo Usuario">
                            </div>
                            <div class="mb-3">
                                <label for="txt_id_almacen" class="form-label">ID Almacen</label>
                                <input type="text" class="form-control" name="txt_id_almacen" placeholder="Ingrese ID Almacen">
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
        <table class="table table-striped text-center">
            <thead>
            <tr class="table-primary">
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th>DPI</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>ID Tipo Usuario</th>
                <th>ID Tipo Almacen</th>
                <th>Acciones </th>
            </tr>
            </thead>
            <tbody> 
                <?php
                foreach($lista_trabajador as $registro ):
                ?>
            <tr>
                <td><?=$registro['id_usuario'] ?></td>
                <td><?=$registro['nombre'] ?></td>
                <td><?=$registro['apellido'] ?></td>
                <td><?=$registro['celular'] ?></td>
                <td><?=$registro['dpi'] ?></td>
                <td><?=$registro['email'] ?></td>
                <td><?=$registro['contrasena'] ?></td>
                <td><?=$registro['id_tipo_usuario'] ?></td>
                <td><?=$registro['id_almacen'] ?></td>
                <td>
                <a href="<?= base_url('datos_trabajadores/' . $registro['id_usuario']) ?>"><i class="fa-solid fa-pencil"></i></a>
                <a href="<?= base_url('eliminar_trabajador/' . $registro['id_usuario']) ?>"><i class="fa-solid fa-trash-can"></i></a>
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