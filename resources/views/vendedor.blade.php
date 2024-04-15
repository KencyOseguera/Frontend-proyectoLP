<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Productos - Vendedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .form-group{
            padding: 10px 0;
        }

        .list-group-item{
            padding: 1rem;
        }

    </style>

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 ">
                <h1 class="mb-4">Mis Productos en Venta</h1>
                <div class="list-group mb-4" id="lista-productos">
                    <!-- Ejemplo de un producto -->
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Nombre del Producto 1</h5>
                            <small>Precio: $100</small>
                        </div>
                        <p class="mb-1">Descripción breve del Producto 1.</p>
                        <small>Categoría: Ropa | Cantidad Disponible: 10</small>
                    </div>
                    <!-- Ejemplo de otro producto -->
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Nombre del Producto 2</h5>
                            <small>Precio: $50</small>
                        </div>
                        <p class="mb-1">Descripción breve del Producto 2.</p>
                        <small>Categoría: Zapatos | Cantidad Disponible: 5</small>
                    </div>
                </div>
                <!-- Botón para ver ventas -->
                <a href="{{route('vendedor-ventas')}}" class="btn btn-info">Ver Mis Ventas</a>
            </div>
            
            <div class="col-md-6">
                <h2 class="mb-4">Agregar Nuevo Producto</h2>
                <form action="/agregar_producto" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoría:</label>
                        <select class="form-control" id="categoria" name="categoria" required>
                            <option value="ropa">Ropa</option>
                            <option value="zapatos">Zapatos</option>
                            <option value="accesorios">Accesorios</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad Disponible:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen">
                    </div>
                    <a  type="submit" class="btn btn-success">Agregar Producto</a>
                </form>
                <br>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
