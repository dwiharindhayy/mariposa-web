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
      <form class="d-flex mx-auto" role="search" action="/search" method="GET">
        <input style="width:700px;" class="form-control" type="search" placeholder="Search" aria-label="Search" name="query">
      </form>
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

<div class="container d-flex mt-5" style="gap:100px;">
  <div class="detail-left">
    <div class="image-product-big">
      <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-fluid">
    </div>
  </div>
  <div class="detail-right">
    <div class="detail-product">
      <h1>{{$product->name}}</h1>
      <br>
      <h1 style='font-size:28px;'>Rp. {{$product->price}}</h1>
    </div>
    <div class="size-container mt-4">
      <h1>Size</h1>
      <form id="sizeForm" action="/product/{{$product->id_product}}/add" method="POST">
        @csrf
        <div class="btn-group btn-group-toggle d-flex flex-wrap" data-toggle="buttons">
          @foreach($sizes as $size)
            <label class="btn btn-outline-secondary flex-fill m-1">
              <input required type="radio" name="size" value="{{ $size }}" autocomplete="off"> {{ $size }}
            </label>
          @endforeach
        </div>

        <div class="description-container mt-4">
          <h1 style='font-size:28px; color:black;'>Keterangan</h1>
          <h2>{{$product->description}}</h2>
        </div>
        <br><br><br><br><br>
        <input type="hidden" name="price" value="{{$product->price}}">
        <div class="btn-add-cart mt-4">
          <button type="submit">Add to Cart</button>
        </div>
      </form>
    </div>
  </div>
</div>

<br><br><br>
<!-- <footer class="footer">
  <div class="container-footer">
    <div class="footer-left">
      <img src="{{ asset('asset/icon.png')}}" alt="Logo" width="150" height="90">
    </div>
  </div>
</footer> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>