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
          <a class="nav-link" aria-current="page" href="/admin/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/product/add">Add Product</a>
        </li>
      </ul>
    </div>
</div>
</nav>

<div class="container">
   <h1 class='fs-2 text mt-4'>Edit Product</h1>
   <div class="form-add">
      <form action="/admin/product/edit/{{ $product->id_product }}/post" method="post" enctype="multipart/form-data">
         @csrf
         <div class="mb-3 mt-4">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $product->name ?? '') }}">
         </div>
         <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
            @if(!empty($product->image))
            <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
            @endif
         </div>
         <div class="mb-3">
            <label class="form-label">Size</label>
            <input type="text" class="form-control" name="size" placeholder="XL, L, M, S" value="{{ old('size', $product->size ?? '') }}">
            <div class="form-text">Gunakan koma (,) untuk memisahkan size</div>
         </div>
         <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{ old('price', $product->price ?? '') }}">
         </div>
         <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Description</label>
              <input type="text" class="form-control" name='description' value="{{ old('price', $product->description ?? '') }}">
         </div>
         <div class="mb-4">
           <label for="exampleFormControlInput1" class="form-label">Category</label>
           <select class="form-select" name="category" aria-label="Default select example">
             <option value="bluss">Bluss</option>
             <option value="dress">Dress</option>
             <option value="bag">Bag</option>
             <option value="heels">Heels</option>
             <option value="make-up">Make Up</option>
             <option value="rok">Rok</option>
           </select>
         </div>
         <button class='btn-general-med mt-4' type="submit">Edit Product</button>
      </form>
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