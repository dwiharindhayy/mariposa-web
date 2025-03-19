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
  </div>
</nav>
<br><br>
<div class="container">
    <div class="title-cart">
        <h1>Cart</h1>
    </div>

    <form action="/cart/checkout/post" method="POST">
    @csrf
    <div class="contaner-cart d-flex gap-4">
        <div class="left">
            <div class="container-address mt-2 mb-4">
                <div class="mt-2">
                    <label for="address" class="form-label">Alamat Pengiriman</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
            </div>
            <br>
            @foreach($carts as $cart)
<div class="product-on-cart">
    <div class="checkbox-cart">
        <input class="form-check item-checkbox" checked type="checkbox" name="cart_ids[]" value="{{ $cart->id_cart }}" style="width: 25px; height: 25px; background-color: black; accent-color: white">
    </div>
    <div class="container-product-cart d-flex gap-4">
        <div class="left mt-4">
            <img src="{{ asset('storage/' . $cart->image) }}" alt="Product Image" class="img-fluid">
        </div>
        <div class="right mt-4">
            <h1 style="font-size: 24px; width:412px;">{{ $cart->name }}</h1>
            <input type="hidden" name="hidden-name[]" value="{{ $cart->name }}">
            <h1 style="font-size: 20px; color:#808080;">Size: {{ $cart->size }}</h1>
            <input type="hidden" name="hidden-size[]" value="{{ $cart->size }}">
            <br>
            <div class="container-bawah mt-4 d-flex gap-4">
                <div class="left">
                    <input type="number" class="form-control quantity" name="quantities[]" data-price="{{ $cart->price }}" value="1" min="1">
                </div>
                <div class="right mt-1">
                    <h1 class="total-price" style="font-size: 20px;">Rp {{ number_format($cart->price, 0, ',', '.') }}</h1>
                    <input type="hidden" class="hidden-price" value="{{ $cart->price }}">
                </div>
            </div>
                <button type="submit" class="btn btn-danger delete-cart mt-3" data-id="{{ $cart->id_cart }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                </svg>
                </button>
        </div>
    </div>
</div>
@endforeach
        </div>
        <div class="right">
            <div class="container-jumlah">
                <h1>Jumlah Pesanan</h1>
                <br><br>
                <div class="subtotal d-flex">
                    <div class="label">
                        <h1>Subtotal</h1>
                    </div>
                    <div class="value">
                        <h1 id="total-value">Rp 0</h1>
                    </div>
                    <input type="hidden" name="hidden-subtotal" id="hidden-subtotal">
                </div>
                <div class="pengiriman-info mt-4">
                    <div class="label">
                        <h1>Pengiriman</h1>
                    </div>
                    <div class="value">
                        <h1 style='color:#808080'>Dari Mariposa Store</h1>
                    </div>
                </div>
            </div>
            <div class="btn-checkout">
                <button type="submit">Checkout</button>
            </div>
        </div>
    </div>
</form>
</div>
<script>
   document.addEventListener('DOMContentLoaded', function () {
       function formatRupiah(number) {
           return new Intl.NumberFormat('id-ID', {
               style: 'currency',
               currency: 'IDR'
           }).format(number).replace(',00', '')
       }
   
       function updateTotal() {
           let total = 0
           document.querySelectorAll('.product-on-cart').forEach(product => {
               const checkbox = product.querySelector('.item-checkbox')
               const quantity = parseInt(product.querySelector('.quantity').value) || 1
               const price = parseFloat(product.querySelector('.hidden-price').value)
   
               if (checkbox.checked) {
                   total += price * quantity
               }
   
               const totalPrice = price * quantity
               product.querySelector('.total-price').textContent = formatRupiah(totalPrice)
           })
   
           document.getElementById('total-value').textContent = formatRupiah(total)
       }
   
       document.querySelectorAll('.quantity, .item-checkbox').forEach(input => {
           input.addEventListener('input', updateTotal)
       })
   
       updateTotal()
   })
</script>

<script>
    document.getElementById('address').addEventListener('input', function() {
        document.getElementById('hidden-address').value = this.value
    })
</script>

<script>
    function formatNumber(value) {
        return parseInt(value.replace(/\D/g, '')) || 0
    }

    function updateHiddenSubtotal() {
        const totalValue = document.getElementById('total-value').textContent
        document.getElementById('hidden-subtotal').value = formatNumber(totalValue)
    }

    const observer = new MutationObserver(updateHiddenSubtotal)
    observer.observe(document.getElementById('total-value'), { childList: true, subtree: true })

    updateHiddenSubtotal()
</script>

<script>
    document.querySelectorAll('.delete-cart').forEach(button => {
        button.addEventListener('click', function () {
            const idCart = this.getAttribute('data-id');

            fetch('/cart/delete', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ id_cart: idCart })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                }
            });
        });
    });
</script>

<br><br><br>
</body>
</html>