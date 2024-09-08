<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modificar Producto</title>
</head>
<body class="bg-info-subtle d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light p-5 rounded">
                <h1 class="text-center mb-4">Modificar Producto</h1>
                <form action="<?=base_url('modificar_productos')?>" method="post">
                    <div class="mb-3">
                        <label for="txtcodigo" class="form-label">Código de producto:</label>
                        <input type="text" id="txtcodigo" name="txtcodigo" class="form-control" value="<?=$datos['producto_id']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtnombre" class="form-control" value="<?=$datos['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label">Descripción:</label>
                        <input type="text" id="txtDescripcion" name="txtdescripcion" class="form-control" value="<?=$datos['descripcion']?>">
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad:</label>
                        <input type="text" id="cantidad" name="txtcantidad" class="form-control" value="<?=$datos['cantidad_existencia']?>">
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha de vencimiento:</label>
                        <input type="date" id="fecha" name="txtfechavencimiento" class="form-control" value="<?=$datos['fecha_vencimiento']?>">
                    </div>
                    <div class="mb-3">
                        <label for="tipo_producto" class="form-label">Tipo de producto:</label>
                        <select id="tipo_producto" name="tipo_producto" class="form-select">
                            <?php foreach ($options as $option): ?>
                                <option value="<?= $option['tipos_producto_id']; ?>"><?= $option['nombre_id']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
                        <a href="<?= base_url('ver_productos')?>" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Regresar a Productos
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
