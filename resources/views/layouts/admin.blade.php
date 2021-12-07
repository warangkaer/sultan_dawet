<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- CSS bootstrap only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">	
<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<!-- local -->
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="mb-3"> <h1 class="text-center"> Admin | <form action="/logout" method="post">@csrf<button type="submit">Logout</button></form></h1> </div>
<hr>

@if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid row">
    <div class="col-6">

        <h3>Upload Menu</h3>

        <form action="/admin/menu" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Menu</label>
                <input type="text" class="form-control" id="nama" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category"> 
                <option value="makanan">makanan</option>
                <option value="minuman">minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga(contoh 1000, 10.000, 100.000)</label>
                <input type="text" class="form-control" id="harga" name="price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Gambar</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <div class="col-6">

        <h3>Upload Product</h3>

        <form action="/admin/product" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Gambar</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

    

<!-- JavaScript bootstap Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>