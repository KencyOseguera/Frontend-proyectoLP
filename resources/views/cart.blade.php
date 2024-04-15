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
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="img-cart"></td>
                    <td>$200</td>
                    <td><button onclick="decrementar()" class="btn btn-outline-danger">-</button>
                        <span id="contador" class="mx-2">0</span>
                        <button onclick="incrementar()" class="btn btn-outline-success">+</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="img-cart"></td>
                    <td>$200</td>
                    <td><button onclick="decrementar()" class="btn btn-outline-danger">-</button>
                        <span id="contador" class="mx-2">0</span>
                        <button onclick="incrementar()" class="btn btn-outline-success">+</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="img-cart"></td>
                    <td>$200</td>
                    <td><button onclick="decrementar()" class="btn btn-outline-danger">-</button>
                        <span id="contador" class="mx-2">0</span>
                        <button onclick="incrementar()" class="btn btn-outline-success">+</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pay">
            <a type="button" class="btn btn-success" href="{{route('login-cliente')}}">Pagar</a>
            <a type="button" class="btn btn-primary" href="{{route('home-principal')}}">Regresar</a>
        </div>
    </div>

    <script>
        // Initialize the counter to 0
        let contador = 0;
        
        // Function to decrement the counter
        function decrementar() {
            contador--;
            document.getElementById("contador").innerHTML = contador;
        }
        
        // Function to increment the counter
        function incrementar() {
            contador++;
            document.getElementById("contador").innerHTML = contador;
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/54de7e7a33.js" crossorigin="anonymous"></script>

</body>
</html>
