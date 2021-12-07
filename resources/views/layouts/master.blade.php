<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{ asset('image/logo.jpg') }}" type="image/icon type">
	
	<title>Sultan Dawet</title>

<!-- CSS bootstrap only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">	
<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<!-- fontawesome -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<!-- Slideshow -->
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('image/index.png') }}" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('image/index.png') }}" alt="Second slide">
    </div>

		<div class="carousel-item">
		<img class="d-block w-100" src="{{ asset('image/index.png') }}" alt="Third slide">
		</div>
	</div>

	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
	
<nav>
	<div>
		<img src="{{ asset('image/logo.png') }}">
	</div>
	<div>
		<button class="btn navigasi active" data-value="beranda"> Beranda </button>
		<button class="btn navigasi" data-value="tentang"> Tentang </button>
		<button class="btn navigasi" data-value="outlet"> Outlet </button>
		<button class="btn navigasi" data-value="menu"> Menu </button>
	</div>

	<div class="button-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
</nav>

<main>
	<div class="container">

		<div id="beranda" class="page-active">
			<div class="title">
				<h3 class="text-center">Beranda</h3>
			</div>
			<div class="beranda-body">
				<div class="promo-items active">
					<img src="{{ asset('image/img1.jpg') }}" alt="">
					<div class="promo-items-body">
						<span> Contoh 1 </span>
					</div>
				</div>
				<div class="promo-items sub-active">
					<img src="{{ asset('image/grab.png') }}" alt="">
					<div class="promo-items-body">
						<span>Contoh 2</span>
					</div>
				</div>
				<div class="promo-items sub-active">
					<img src="{{ asset('image/kopi3.jpg') }}" alt="">
					<div class="promo-items-body">
						<span>Contoh 3</span>
					</div>
				</div>
				<div class="promo-items">
					<img src="{{ asset('image/kopi2.jpg') }}" alt="">
					<div class="promo-items-body">
						<span>Contoh 4</span>
					</div>
				</div>
				<div class="promo-items">
					<img src="{{ asset('image/kopi1.jpg') }}" alt="">
					<div class="promo-items-body">
						<span>Contoh 5</span>
					</div>
				</div>
			</div>
			<div class="article">
				<div class="title">
					<h3 class="text-center">Contoh 1</h3>
					<img src="{{ asset('image/line.png') }}" class="breaker">
				</div>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit natus quos dolorem, hic a tenetur modi sed reiciendis eos, fugiat quam vel unde? Laboriosam quos nam deleniti accusantium beatae eveniet.</p>
			</div>
		</div>

		<div id="tentang" class="row">
			<div class="col-md-3">
				<img src="{{ asset('image/logo.png') }}" width="100%" height="270">
			</div>
			<div class="col-md-9 d-flex align-content-center flex-wrap about">
				<h3 class="text-center w-100">Tentang Kami</h3>
				<p> Sultan Dawet merupakan sebuah minuman yang mengadaptasi dari dawet ireng khas purworejo,
				yaitu sebuah minuman tradisional asli nusantara yang dikreasi dengan kuah sehat tanpa santan dan
				dikemas ala masa kini. <br> <br>
				Dengan visi mengangkat kembali budaya minuman lokal yang dimodernisasi dengan bahan pilihan
				yang sehat dan harga terjangkau untuk dapat bersaing dengan minuman modern dari dalam dan luar
				negeri..</p>
			</div>
		</div>

		<div class="menu-body" id="menu">
			<div class="title">
				<h3 class="text-center">Menu</h3>
			</div>
			<div class="menu-items">
				<img src="{{ asset('image/index.png') }}">
				<span>Es Teh</span>
				<span>Rp. 10.000</span>
			</div>
		</div>

		<div id="outlet">
			<div class="row justify-content-center">
				<div class="col-md-5">
					<img src="{{ asset('image/index.png') }}">
				</div>
				<div class="col-md-5 d-flex flex-wrap outlet-items">
					<span>Alamat</span>
					<ul>
						<li>Jalan Kebenaran no 1</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
	
	<div id="mitra" class="row justify-content-center">
		<div class="col-12"><h3 class="text-center">Temukan Kami di</h3></div>
		<div class="mitra-body">
			<div class="mitra-items">
				<img src="{{ asset('image/index.png') }}" class="mitra-img">
			</div>
			<div class="mitra-items">
				<img src="{{ asset('image/index.png') }}" class="mitra-img">
			</div>
			<div class="mitra-items">
				<img src="{{ asset('image/index.png') }}" class="mitra-img">
			</div>
		</div>
	</div>
</main>


<footer>
	<div class="fluid-container">
		<div class="row footer-body justify-content-center" style="padding: 5px;">
			<div class="col text-center" style="margin: auto;">
			<span>Copyright @ 2021 All Rights Reserved, SULTAN DAWET</span>
			</div>
		</div>
	</div>	
</footer>

<!-- JavaScript bootstap Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/master.js') }}"></script>
<script>

$(".navigasi").on('click', () => {
	var page = $(this).attr("data-value");

	$("#main-body").load(`../components/${page}.blade.php`);
});
</script>
</body>
</html>