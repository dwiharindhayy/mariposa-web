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
</head>
<body>
<nav class="navbar bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand ms-auto" href="#">
      <img src="{{ asset('asset/icon.png')}}" alt="Logo" width="60" height="30">
    </a>
  </div>
</nav>

<div class="container">
    <div class="title-auth">
        <h1>Login</h1>
    </div>

    <div class="btn-register d-flex gap-3">
        <div class="btn-google">
            <button class="d-flex gap-1">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png" alt="" width="22" height="22">
                <p style="margin:0; font-size: 12px;">Sign In With Google</p>
            </button>
        </div>

        <div class="btn-facebook">
            <button class="d-flex gap-1">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1280px-Facebook_f_logo_%282019%29.svg.png" alt="" width="22" height="22">
                <p style="margin:0; font-size: 12px;">Sign In With Facebook</p>
            </button>
        </div>
    </div>

    <div class="form-register">
        <form action="/login/post" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input required type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input required type="password" name="password" class="form-control">
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
    <br>
    <div class="disclamer">
        <p>Dont have an account? <a style="color:#EDBADC; text-decoration:none;" href="/register">register</a></p>
    </div>
</div>


</body>
</html>