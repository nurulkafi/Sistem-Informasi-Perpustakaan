<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

<body>

<!-- NavBar -->
<nav class="navbar  navbar-expand-lg navbar-light fixed-top">
	<div class="container">
	  <a class="navbar-brand" href="#"><span>Informatika</span> Unjani</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-auto">
	      <a class="nav-item nav-link active" href="#">Login<span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" href="#">Register</a>

	    </div>
	  </div>
	</div>
</nav>
<!-- End Navbar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
	<h1 class="display-4">Selamat Datang Di <br> <span>KAHFILAH PERPUS</span><br>2019/2020</h1>
	<a href="" class="btn btn-daftar tombol">Daftar Sekarang</a>
  </div>
</div>
<!-- Akhir Jumbtron -->
<div class="row justify-content-center">
	<div class="container">
		<div class="col-10 info-panel">
			<div class="row">
				<div class="col-lg">
					<img src="{{asset('assets/dist/img/employee.png')}}" alt="" class="float-left">
					<h4>24 Hours</h4>
					<p>lorem ipsum dolor site amet.</p>
				</div>
				<div class="col-lg">
					<img src="{{asset('assets/dist/img/hires.png')}}" alt="" class="float-left">
					<h4>24 Hours</h4>
					<p>lorem ipsum dolor site amet.</p>
				</div>
				<div class="col-lg">
					<img src="{{asset('assets/dist/img/security.png')}}" alt="" class="float-left">
					<h4>24 Hours</h4>
					<p>lorem ipsum dolor site amet.</p>
				</div>
			</div>
		</div>
</div>
</div>
<!-- akhir info panel -->
<!-- content -->
<div class="row workingspace">

@foreach($books as $book)
<div class="col-lg-3">
<div class="card">

  <img class="card-img-top" src="{{$book->getCover()}}" alt="Card image cap" 
  height="500px">
  <div class="card-body">
    <h5 class="card-title">{{$book->judul}}</h5>
    <p class="card-text">{{Str::limit($book->deskripsi,50)}}</p>
  </div>

</div>
</div>
@endforeach
</div>
</body>
</html>
<!-- <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>