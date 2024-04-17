<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 3px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            background: white;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .invoice-details p {
            margin: 5px 0;
        }
        .invoice-items {
            border-collapse: collapse;
            width: 100%;
        }
        .invoice-items th, .invoice-items td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        .total {
            margin-top: 20px;
            text-align: right;
        }

        .print-button {
            position: absolute; /* Posicionamiento absoluto */
            top: 20px; /* Distancia desde la parte superior */
            right: 20px; /* Distancia desde el lado derecho */
        }
        .print-button button {
            padding: 10px 20px;
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            padding: 10px 20px;
            background-color: #008584;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

    </style>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <h1>Factura</h1>
            <p>Número de factura: #123456</p>
        </div>
        <div class="invoice-details">
            <p>Fecha: 16 de abril de 2024</p>
            <p>Cliente: Nombre del cliente</p>
        </div>
        <table class="invoice-items">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Subtotal</th>
                    <th>Descuento</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto 1</td>
                    <td>2</td>
                    <td>$50.00</td>
                    <td>$100.00</td>
                    <td>$10</td>
                    <td>$90.00</td>
                </tr>
                <tr>
                    <td>Producto 2</td>
                    <td>1</td>
                    <td>$95.00</td>
                    <td>$95.00</td>
                    <td>$20</td>
                    <td>$75.00</td>
                </tr>
                <!-- Agregar más filas según los productos en el carrito -->
            </tbody>
        </table>
        <div class="total">
            <p>Total a pagar: $165.00</p>
        </div>
        <div class="print-button">
            <button onclick="window.print()">Imprimir factura</button>
        </div>
    </div>
    <div class="back-button">
        <a href="{{route('home-principal')}}" class="btn btn-succes">Regresar a la página principal</a>
    </div>
</body>
</html>
