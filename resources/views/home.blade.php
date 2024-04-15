<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/public/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/54de7e7a33.js" crossorigin="anonymous"></script>
    <title>Tienda Online</title>

    <style>
    .container {
    display: flex;
    position: relative;
    padding: 10px;
    place-content: center;
    z-index: 0;
    margin: auto;
  }
  .cart-icon{
    font-size: 40px;
  }
  .container-categories{
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .boton-categoria{
    cursor: pointer;
  }
  .categorie {
    display: flex;
    justify-content: center;
    padding: 10px;
  }
  .search-container {
    position: relative;
    width: 70%;
    height: 50px;
    border-radius: 50px;
    background: linear-gradient(135deg, rgb(218, 232, 247) 0%, rgb(214, 229, 247) 100%);
    padding: 5px;
    display: flex;
    align-items: center;
    margin-right: 30px;
  }
  
  .search-container::after, .search-container::before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: inherit;
    position: absolute;
  }
  
  .search-container::before {
    top: -1px;
    left: -1px;
    background: linear-gradient(0deg, rgb(218, 232, 247) 0%, rgb(255, 255, 255) 100%);
    z-index: -1;
  }
  
  .search-container::after {
    bottom: -1px;
    right: -1px;
    background: linear-gradient(0deg, rgb(163, 206, 255) 0%, rgb(211, 232, 255) 100%);
    box-shadow: rgba(79, 156, 232, 0.7019607843) 3px 3px 5px 0px, rgba(79, 156, 232, 0.7019607843) 5px 5px 20px 0px;
    z-index: -2;
  }
  
  .input {
    padding: 10px;
    width: 100%;
    background: linear-gradient(135deg, rgb(218, 232, 247) 0%, rgb(214, 229, 247) 100%);
    border: none;
    color: #9EBCD9;
    font-size: 20px;
    border-radius: 50px;
  }
  
  .input:focus {
    outline: none;
    background: linear-gradient(135deg, rgb(239, 247, 255) 0%, rgb(214, 229, 247) 100%);
  }
  
  .search__icon {
    width: 40px;
    border-top: 3px solid transparent;
    border-bottom: 3px solid transparent;
    border-radius: 50%;
    padding-left: 12px;
    margin-right: 10px;
  }
  
  .search__icon:hover {
    border-left: 3px solid white;
  }
  
  .search__icon path {
    fill: white;
  }

  .nav{
    background: cadetblue;
    color: white;
  }
  
  .nav li{
    padding-right: 30px;
    padding: 20px 10px
  }

  .card {
    padding: 10px;
    margin: 0 10px;
    width: 18rem;
    border-radius: 0 1rem;
  }
    </style>

</head>
<body>
    <div class="container">
        <div class="search-container">
            <input class="input" type="text">
            <svg viewBox="0 0 24 24" class="search__icon">
            <g>
                <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                </path>
            </g>
        </svg>
        </div>
        <div class="cart-icon">
            <a href="{{route('home-cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div style="padding: 10px">
        <a href="{{route('login-vendedor')}}" class=" btn btn-success" >Soy Vendedor</a>
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
                    <img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$200</h5>
                      <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$200</h5>
                      <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.ed-29-ckMum--DpdlJRKHgHaFW?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">$200</h5>
                      <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                      <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="categorie-calzado categorie" id="calzado">
                    <div class="card">
                        <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">$200</h5>
                          <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                          <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">$200</h5>
                            <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">$200</h5>
                          <p class="card-text">Windows Xp, 1GB RAM, 16 GB HDD,Celeron N300</p>
                          <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                      </div>
                </div>

                <div class="categorie-calzado categorie" id="ropa">
                  <div class="card">
                      <img src="https://th.bing.com/th/id/OIP.Fr2Bnn6IHEDC0BX5nm89BwHaFM?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">$100</h5>
                        <p class="card-text">Camisa estilo Polo</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                      </div>
                    </div>
              </div>
          </div>
        </div>
    </div>
</body>

<script>
    function laptopsclick() {
      document.getElementById('laptops').style.display='block';
      document.getElementById('calzado').style.display='none';
    }
    function calzadoclick(){
      document.getElementById('laptops').style.display='none';
      document.getElementById('calzado').style.display='block';
        
    }

    function ropaclick(){
      document.getElementById('calzado').style.display='block';
      document.getElementById('laptops').style.display='none';
      document.getElementById('calzado').style.display='none';
        
    }
</script>

<script src="/resources/js/home.js"></script>
</html>