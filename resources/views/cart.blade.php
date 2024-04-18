<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cart</title>
</head>

    <style>
    .img-cart{
        width: 150px;
        height: 150px;
    }

    .table th{
        background: aliceblue!important;
    }
    </style>

<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="img-cart"></td>
                    <td>$200</td>
                    <td><button onclick="decrementar(1)" class="btn btn-outline-danger">-</button>
                        <span id="contador1" class="mx-2">0</span>
                        <button onclick="incrementar(1)" class="btn btn-outline-success">+</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="img-cart"></td>
                    <td>$200</td>
                    <td><button onclick="decrementar(2)" class="btn btn-outline-danger">-</button>
                        <span id="contador2" class="mx-2">0</span>
                        <button onclick="incrementar(2)" class="btn btn-outline-success">+</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="img-cart"></td>
                    <td>$200</td>
                    <td><button onclick="decrementar(3)" class="btn btn-outline-danger">-</button>
                        <span id="contador3" class="mx-2">0</span>
                        <button onclick="incrementar(3)" class="btn btn-outline-success">+</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pay">
            <a type="button" class="btn btn-success" href="{{route('login-cliente')}}" onclick="verificarUsuario(event)">Pagar</a>
            <a type="button" class="btn btn-primary" href="{{route('home-principal')}}">Regresar</a>
        </div>
    </div>

    <script>
        // Inicializar el contador en 0
        let contador1 = 0;
        let contador2 = 0 ;
        let contador3 = 0;
    
        // Function para decrementar, no va a decrementar si el contador esta esta en 0
        function decrementar(producto) {
        if (producto === 1 && contador1 > 0) {
            contador1--;
            document.getElementById("contador1").innerHTML = contador1;
        } else if (producto === 2 && contador2 > 0) {
            contador2--;
            document.getElementById("contador2").innerHTML = contador2;
        }else if (producto === 3 && contador3 > 0) {
            contador3--;
            document.getElementById("contador3").innerHTML = contador3;
        }
    }
    
        // Function para incrementar el contador
        function incrementar(producto) {
        if (producto === 1) {
            contador1++;
            document.getElementById("contador1").innerHTML = contador1;
        } else if (producto === 2) {
            contador2++;
            document.getElementById("contador2").innerHTML = contador2;
        }else if (producto === 3) {
            contador3++;
            document.getElementById("contador3").innerHTML = contador3;
        }
        
    }



    //Para Verificar si el usuario inicio sesion antes IDEA
    function verificarUsuario(event) { 

        let usuarioRegistrado = false; // Suponiendo que inicialmente el usuario no está registrado

        // Función para verificar si el usuario está registrado antes de pagar
        function verificarUsuario(event) {
            event.preventDefault(); // Evitar que el enlace se abra automáticamente

            if (usuarioRegistrado) {
                // Si el usuario está registrado, redirigir a la página de pago
                window.location.href = "{{route('cart-pagar')}}";
            } else {
                // Si el usuario no está registrado, redirigir a la página de inicio de sesión
                window.location.href = "{{route('login-cliente')}}";
            }
        }
    }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/54de7e7a33.js" crossorigin="anonymous"></script>

</body>
</html>
