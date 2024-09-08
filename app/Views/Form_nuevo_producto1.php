<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Nuevo Producto</title>
</head>
<body class= "bg-primary bg-opacity-10 d-flex align-items-center" style="height: 100vh;">
    <div class="container my-5">
    <div class="card shadow-sm w-50 p-4">
        <h1 class="text-center mb-4">Nuevo Producto</h1>
        <form action="<?=base_url('guardar')?>" method="post">
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-4">
                    <label for="codigoproducto" class="col-form-label">Código de producto:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="codigoproducto" class="form-control" name="txtcodigo" aria-describedby="codigoHelp">
                    <small id="codigoHelp" class="form-text text-muted">Debes ingresar un código de producto.</small>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-4">
                    <label for="nombreprod" class="col-form-label">Nombre del producto:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="nombreprod" class="form-control" name="txtnombre" aria-describedby="nombreHelp">
                    <small id="nombreHelp" class="form-text text-muted">Ingresa el nombre del producto.</small>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-4">
                    <label for="descripcion" class="col-form-label">Descripción del producto:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="descripcion" class="form-control" name="txtdescripcion" aria-describedby="descripcionHelp">
                    <small id="descripcionHelp" class="form-text text-muted">Debes ingresar una descripción del producto.</small>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-4">
                    <label for="cantidad" class="col-form-label">Cantidad:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="cantidad" class="form-control" name="txtcantidad" aria-describedby="cantidadHelp">
                    <small id="cantidadHelp" class="form-text text-muted">Debes ingresar la cantidad disponible del producto.</small>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-4">
                    <label for="vencimiento" class="col-form-label">Fecha de vencimiento:</label>
                </div>
                <div class="col-md-8">
                    <input type="date" id="vencimiento" class="form-control" name="txtfechavencimiento" aria-describedby="vencimientoHelp">
                    <small id="vencimientoHelp" class="form-text text-muted">Debes ingresar la fecha de vencimiento del producto.</small>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-4">
                <div class="col-md-4">
                    <label for="tipoProducto" class="col-form-label">Tipo de producto:</label>
                </div>
                <div class="col-md-8">
                    <select name="tipo_producto" id="tipoProducto" class="form-select">
                        <?php foreach ($options as $option): ?>
                            <option value="<?= $option['tipos_producto_id']; ?>"><?= $option['nombre_id']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="btnGuardar">Guardar</button>
                <a href="<?= base_url('ver_productos')?>" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Regresar a Productos
                </a>
            </div>
        </form>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+f/w5P6Z/VsrtoEhKfuSIegm7pA" crossorigin="anonymous"></script>
</body>
</html>