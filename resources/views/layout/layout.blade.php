<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <title>@yield('title')</title> 
  </head>
  <body>
	<nav class="navbar fix-top navbar-dark bg-primary">
	<div class="container">
	<nav class="navbar navbar-light bg-primary	">
		<span class="navbar-brand mb-0 h1">DGS</span>
	</nav>
</nav>
 </div>

    <header> @include('layout.header') </header> 
	<div class="container text-center">
	<div class="row">
	<div class="col">
	<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
	<div class="card-header">HTML</div>
	<div class="card-body">
    <p class="card-text text-left">sebuah bahasa markah yang digunakan untuk membuat 
	sebuah halaman web, menampilkan berbagai informasi.</p>
	</div>
	</div>
	</div>
	<div class="col">
	<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
	<div class="card-header">CSS</div>
	<div class="card-body">
    <p class="card-text text-left">untuk mengendalikan komponen dalam sebuah web sehingga lebih terstruktur.
	CSS bukan merupakan bahasa pemograman.</p>
	</div>
	</div>
	</div>
	<div class="col">
	<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
	<div class="card-header">JS</div>
	<div class="card-body">
    <p class="card-text text-left">bahasa skrip yang populer di internet dan dapat bekerja 
	di sebagian besar penjelajah web populer seperti Internet Explorer (IE), Mozilla Firefox.</p>
	</div>
	</div>
	</div>
	<div class="col">
	<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
	<div class="card-header">PHP</div>
	<div class="card-body">
    <p class="card-text text-left">bahasa skrip yang dapat ditanamkan atau disisipkan ke dalam HTML. 
	PHP banyak dipakai untuk memrogram situs web dinamis.</p>
	</div>
	</div>
	</div>
</ul>
</div>


@show
<nav class="navbar navbar-light bg-light">
<div class="container"> 
  <span class="navbar-text">
   
  </span>
</nav>
</div> 
	<nav class="navbar fixed-bottom navbar-dark bg-primary">
	<div class="container text">
	<nav class="navbar navbar-light bg-primary	">
		<span class="navbar-brand mb-0 h1 text-center">@yield('content')</span>
	</nav>
</nav>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
