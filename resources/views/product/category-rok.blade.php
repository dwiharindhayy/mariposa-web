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
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="{{ asset('asset/Shopping cart.png')}}" alt="Logo" width="28" height="28">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="{{ asset('asset/User.png')}}" alt="Logo" width="30" height="30">
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
            <form action="" method="post">
              <input type="text" class="form-control form-input" placeholder="Search">
            </form>
         </div>
      </div>
   </div>
</div>

<br><br><br>

<div class="font-label-big">
  <h1>Kategori Pilihan</h1>
</div>

<div class="container-category mt-3">
  <div class="container-icon">
    <a href="/product/bluss">
      <img src="{{ asset('asset/baju.png')}}" alt="category" width="70" height="70">
      <h1>Bluss</h1>
    </a>
  </div>

  <div class="container-icon">
    <a href="/product/dress">
      <img src="{{ asset('asset/dress.png')}}" alt="category" width="70" height="70">
      <h1>Dress</h1>
    </a>
  </div>

  <div class="container-icon">
    <a href="/product/rok">
      <img src="{{ asset('asset/rok.png')}}" alt="category" width="70" height="70">
      <h1>Rok</h1>
    </a>
  </div>  
  
  <div class="container-icon">
    <a href="/product/make-up">
      <img src="{{ asset('asset/make up.png')}}" alt="category" width="70" height="70">
      <h1>Make up</h1>
    </a>
  </div>

  <div class="container-icon">
    <a href="/product/heels">
      <img src="{{ asset('asset/heels.png')}}" alt="category" width="70" height="70">
      <h1>Heels</h1>
    </a>
  </div>

  <div class="container-icon">
    <a href="/product/bag">
      <img src="{{ asset('asset/tas.png')}}" alt="category" width="70" height="70">
      <h1>Bag</h1>
    </a>
  </div>
</div>

<div class="font-label-big" style="margin-top:200px;">
  <h1>Rok</h1>
</div>

<div class="container-product-list">
  <div class="product-view-home">
    <div class="image-product">
      <img src="https://awsimages.detik.net.id/customthumb/2014/02/21/10/jokowikaget.jpg" alt="">
    </div>
    <h1 class="title-product-home mt-3">Gigot Sleeve Ruffle Hem Blouse</h1>
    <h1 class="price-product-home mt-3">Rp 999.000</h1>
    <h1 class="size-product-home">size: S, M, L, XL</h1>
  </div>

  <div class="product-view-home">
    <div class="image-product">
      <img src="https://awsimages.detik.net.id/customthumb/2014/02/21/10/jokowikaget.jpg" alt="">
    </div>
    <h1 class="title-product-home mt-3">Gigot Sleeve Ruffle Hem Blouse</h1>
    <h1 class="price-product-home mt-3">Rp 999.000</h1>
    <h1 class="size-product-home">size: S, M, L, XL</h1>
  </div>

  <div class="product-view-home">
    <div class="image-product">
      <img src="https://awsimages.detik.net.id/customthumb/2014/02/21/10/jokowikaget.jpg" alt="">
    </div>
    <h1 class="title-product-home mt-3">Gigot Sleeve Ruffle Hem Blouse</h1>
    <h1 class="price-product-home mt-3">Rp 999.000</h1>
    <h1 class="size-product-home">size: S, M, L, XL</h1>
  </div>
</div>

<!-- <footer class="footer">
  <div class="container-footer">
    <div class="footer-left">
      <img src="{{ asset('asset/icon.png')}}" alt="Logo" width="150" height="90">
    </div>
  </div>
</footer> -->

</body>
</html>