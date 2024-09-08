

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Productos</title>
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5 text-primary">Productos</h1>
                <p class="lead">Gestiona los registros de productos</p>
                <a href="<?= base_url('nuevo_producto1') ?>" class="btn btn-outline-success btn-lg my-3">
                    <i class="bi bi-database-add"></i> Agregar nuevo registro
                </a>
                <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary btn-lg my-3">
                    <i class="bi bi-arrow-left"></i> Regresar
                </a>
               
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Código de producto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fecha de vencimiento</th>
                            <th scope="col">Tipo de producto</th>
                            <th scope="col" colspan="2" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $producto): ?>
                        <tr>
                            <td><?= $producto['producto_id']; ?></td>
                            <td><?= $producto['nombre']; ?></td>
                            <td><?= $producto['descripcion']; ?></td>
                            <td><?= $producto['cantidad_existencia']; ?></td>
                            <td><?= $producto['fecha_vencimiento']; ?></td>
                            <td><?= $producto['tipo_producto_id']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('eliminar_producto/').$producto['producto_id']; ?>" class="btn btn-danger">
                                    <i class="bi bi-database-dash"></i> Eliminar
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('buscar_producto/').$producto['producto_id']; ?>" class="btn btn-warning">
                                    <i class="bi bi-tags"></i> Modificar
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>