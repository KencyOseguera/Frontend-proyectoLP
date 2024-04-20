<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/54de7e7a33.js" crossorigin="anonymous"></script>
    <title>Tienda Online</title>

</head>
<body>
    <div class="container">
        
        <div class="cart-icon">
            <a href="{{route('home-cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div style="padding: 10px">
        <a href="{{route('login-vendedor')}}" class=" btn btn-success" >Soy Vendedor</a>
        <a href="{{ route('login-cliente') }}" class="btn btn-outline-primary">
          <i class="fas fa-user"></i>Iniciar Sesion</a>

        </div>
      </div>
        
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <span class="boton-categoria" onclick="laptopsclick()">Computadoras</span>
            </li>
            <li class="nav-item">
                <span  class="boton-categoria" onclick="calzadoclick()">Calzado</span>
            </li>
            <li class="nav-item">
                <span  class="boton-categoria" onclick="ropaclick()">Ropa</span>
            </li>
        </ul>
          <div class="container-categories">
            <div class="container-laptops categorie" id="laptops">
                <div class="card">
                    <img src="{{url('img/Notebook-9-Pro-3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">PRECIO</h5>
                      <p class="card-text">NOMBRE</p>
                      <p class="card-text">DESCRIPCION</p>
                      <a href="#" class="btn btn-primary" onclick="addToCart('NOMBRE', 200, 'img/Notebook-9-Pro-3.jpg')">Add to cart</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="{{url('img/Notebook-9-Pro-3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$200</h5>
                      <p class="card-text">Windows Xp</p>
                      <p class="card-text">1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary"onclick="addToCart('windows xp2', 200, 'img/Notebook-9-Pro-3.jpg')">Add to cart</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="{{url('img/Notebook-9-Pro-3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$300</h5>
                      <p class="card-text">Windows Xp</p>
                      <p class="card-text">1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary" onclick="addToCart('windows xp3', 300, 'img/Notebook-9-Pro-3.jpg')">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="categorie-calzado categorie" id="calzado">
                    <div class="card">
                        <img src="{{url('img/matestation-x-series-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">$200</h5>
                          <p class="card-text">Windows Xp</p>
                          <p class="card-text">1GB RAM, 16 GB HDD,Celeron N300</p>
                          <a href="#" class="btn btn-primary" onclick="addToCart('windows xp', 200, 'img/matestation-x-series-1.jpg')">Add to cart</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="{{url('img/matestation-x-series-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">$200</h5>
                            <p class="card-text">Windows Xp</p>
                            <p class="card-text">1GB RAM, 16 GB HDD,Celeron N300</p>
                            <a href="#" class="btn btn-primary" onclick="addToCart('windows xp2', 200, 'img/matestation-x-series-1.jpg')">Add to cart</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="{{url('img/matestation-x-series-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">$300</h5>
                          <p class="card-text">Windows Xp</p>
                          <p class="card-text">1GB RAM, 16 GB HDD,Celeron N300</p>
                          <a href="#" class="btn btn-primary" onclick="addToCart('windows xp 3', 300, 'img/matestation-x-series-1.jpg')">Add to cart</a>
                        </div>
                      </div>
                </div>

                <div class="categorie-calzado categorie" id="ropa">
                  <div class="card">
                      <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">$100</h5>
                        <p class="card-text">Camisa estilo Polo</p>
                        <p class="card-text">DESCRIPCION</p>
                        <a href="#" class="btn btn-primary" onclick="addToCart('NOMBREPRODUCTO', 200)">Add to cart</a>
                      </div>
                    </div>
              </div>
          </div>
        </div>
    </div>
</body>


<script src="{{url('js/home.js')}}"> </script>

</html>