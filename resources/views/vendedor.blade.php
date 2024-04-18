<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de control del vendedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa; 
            color: #333333;
        }
        .table-container {
            overflow-x: auto;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2; /* Fondo de filas impares */
        }
        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff; /* Fondo de filas pares */
        }
        .table th, td {
            color: #006666;
        }
        .form-group{
            padding: 10px 0;
        }

        .list-group-item{
            padding: 1rem;
        }

        .agregar-producto {
            background-color:#3ec0c0;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        #panel{
            background: #008584;
            color: white;
            padding: 10px;
            border-radius: 0.5rem;
        }

    </style>


</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Bienvenido, [Nombre del Vendedor]</h1>
                <br>
                <h2 id="panel">Panel de control del vendedor</h2>

                <!-- Botón para abrir el modal de edición de cuenta -->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editarCuentaModal">Editar cuenta</button>
                <br>
                <br>
                <h4>Inventario de productos</h4>
                <div class="form-group">
                    <label for="categoria">Filtrar por categoría:</label>
                    <select class="form-control" id="categoria" onchange="filtrarProductos(this.value)">
                        <option value="">Todos</option>
                        <option value="electrodomesticos">Zapatos</option>
                        <option value="ropa">Ropa</option>
                        <!-- Agregar más opciones de categorías-->
                    </select>
                </div>
                <div class="table-container">
                    <table id="tablaProductos" class="table table-striped table-hover mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad en stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Producto A</td>
                                <td>$50</td>
                                <td>100</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Producto A</td>
                                <td>$50</td>
                                <td>100</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Editar</a>
                                    <a href="#" class="btn btn-danger" onclick="eliminarProducto()">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="agregar-producto" style="width: 380px">
                <h4>Agregar nuevo producto</h4>
                <form action="/agregar_producto" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre del producto:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio" required min="0">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una breve descipcion" required></textarea>
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
                        <label for="cantidad">Cantidad en stock:</label>
                        <input type="number" class="form-control" id="cantidad" placeholder="Ingrese la cantidad en stock" required min="0">
                    </div>
                    
                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen" required>
                    </div>
                    <a  type="submit" class="btn btn-dark" onclick="alertaAgregar()">Agregar Producto</a>
                </form>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

     <!-- Modal de edición de cuenta -->
     <div class="modal fade" id="editarCuentaModal" tabindex="-1" aria-labelledby="editarCuentaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarCuentaModalLabel">Editar información de la cuenta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de edición de cuenta -->
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" value="Nombre del Vendedor" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion:</label>
                            <textarea type="text" class="form-control" id="descripcion" value="Descripcion del Vendedor"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" id="correo" value="[Correo del Vendedor]" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="contrasena">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>

        function filtrarProductos(categoria) {
            let tabla = document.getElementById('tablaProductos');
            let filas = tabla.getElementsByTagName('tr');
            for (let i = 1; i < filas.length; i++) {
                let categoriaProducto = filas[i].getElementsByTagName('td')[1].textContent; // Obtener la categoría del producto (suponiendo que está en la segunda columna)
                if (categoria === '' || categoriaProducto.toLowerCase().includes(categoria.toLowerCase())) {
                    filas[i].style.display = '';
                } else {
                    filas[i].style.display = 'none';
                }
            }
        }

        function alertaAgregar() {
            //IDEA SOLO DEBE DE MOSTRARLA SI SE LLENAN TODOS LOS CAMPOS
            alert("Se ha agregado un nuevo producto.");
        }

        function eliminarProducto() {
            if (confirm("¿Estás seguro de que quieres eliminar este producto?")) {
                // IDEA lógica para eliminar el producto
                alert("El producto ha sido eliminado correctamente.");
            }
        }

    </script>
     <!-- Scripts de Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</body>
</html>
