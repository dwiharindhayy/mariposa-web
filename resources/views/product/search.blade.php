<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariposa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="page-product-all">
<nav class="navbar navbar-expand-lg" style="background-color:#F5D5D7; border-style:solid; border-width:0px 0px 1px 0px">
  <div class="container-fluid">
    <a class="navbar-brand" href="/product/all">
      <img src="{{ asset('asset/icon.png')}}" alt="Logo" width="100" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="{{ asset('asset/Shopping cart.png')}}" alt="Logo" width="28" height="28">
          </a>
        </li>
        <li class="nav-item mt-1">
          <a class="nav-link disabled" href="/product/all">
            <p style="margin:0;"> | {{$nameUser}}</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
   <div class="row height d-flex justify-content-center align-items-center">
      <div class="col-md-6">
         <div class="form">
            <i class="fa fa-search">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
            </i>
            <form role="search" action="/search" method="GET">
              <input type="text" class="form-control form-input" placeholder="Search" name="query">
            </form>
         </div>
      </div>
   </div>
</div>

<br><br><br>

<div class="container-product-list">
  @foreach ($products as $product)
    <a href="{{ url('/product/' . $product->id_product) }}" class="product-link">
      <div class="product-view-home">
        <div class="image-product">
          <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        </div>
        <h1 class="title-product-home mt-3">{{ $product->name }}</h1>
        <h1 class="price-product-home mt-3">Rp {{ number_format($product->price, 0, ',', '.') }}</h1>
        <h1 class="size-product-home">Size: {{ strtoupper($product->size) }}</h1>
      </div>
    </a>
  @endforeach
</div>

<!-- <footer class="footer">
  <div class="container-footer">
    <div class="footer-left">
      <img src="{{ asset('asset/icon.png')}}" alt="Logo" width="150" height="90">
    </div>
  </div>
</footer> -->
<br><br><br>
</body>
</html>