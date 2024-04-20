<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/cart.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cart</title>
</head>

<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">IMG_Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                
            </tbody>
        </table>
        <div class="pay">
            <a type="button" class="btn btn-success" href="{{route('login-cliente')}}" onclick="verificarUsuario(event)">Pagar</a>
            <a type="button" class="btn btn-primary" href="{{route('home-principal')}}">Regresar</a>
        </div>
    </div>

    <script>
        function verificarUsuario(event) {
            event.preventDefault(); // Evitar que el enlace se abra automáticamente

            let usuarioRegistrado = false; // Suponiendo que inicialmente el usuario no está registrado

            // Simulación de verificación de usuario (CAMBIAR EL VALOR PARA PROBAR)
            usuarioRegistrado = true;

            // Mostrar en la consola el resultado de la verificación
            console.log("Usuario registrado:", usuarioRegistrado);

            if (usuarioRegistrado) {
                // Si el usuario está registrado, redirigir a la página de pago
                window.location.href = "{{route('cart-pagar')}}";
            } else {
                // Si el usuario no está registrado, redirigir a la página de inicio de sesión
                window.location.href = "{{route('login-cliente')}}";
            }

            mostrarDatosCarrito();
        }
        
    </script>


    <script src="{{url('js/cart.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/54de7e7a33.js" crossorigin="anonymous"></script>

</body>
</html>
