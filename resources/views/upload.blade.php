<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <form action="/upload/post" method="POST">
    @csrf
        <label for="">nama</label>
        <input type="text" name="name">
        <br><br>
        <label for="">image</label>
        <input type="text" name="image">
        <br><br>
        <label for="">size</label>
        <input type="text" name="size">
        <br><br>
        <label for="">category</label>
        <input type="text" name="category">
        <br><br>
        <label for="">harga</label>
        <input type="text" name="price">

        <br><br><br>
        <button type="submit">kirim</button>
    </form>
</body>
</html>