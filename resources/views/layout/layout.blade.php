<!doctype html>
<html lang="Es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>Home</title>
	</head>
	<body>
		<div class="container-fluid">
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<a class="navbar-brand" href="">Menu</a>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">							
							<li class="nav-item">
								<a class="nav-link" href="{{url('productos')}}">productos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">editar</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href='#'>categorias</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
			@yield ('contenido')
			<footer class="text-center text-white" style="background-color: #caced1;">
				  <!-- Grid container -->
				<div class="container p-4">
					<!-- Section: Images -->
					<section class="">
					  <div class="row">
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
						  <div
							class="bg-image hover-overlay ripple shadow-1-strong rounded"
							data-ripple-color="light"
						  >
							<img
							  src="https://mdbootstrap.com/img/new/fluid/city/113.jpg"
							  class="w-100"
							/>
							<a href="#!">
							  <div
								class="mask"
								style="background-color: rgba(251, 251, 251, 0.2);"
							  ></div>
							</a>
						  </div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
						  <div
							class="bg-image hover-overlay ripple shadow-1-strong rounded"
							data-ripple-color="light"
						  >
							<img
							  src="https://mdbootstrap.com/img/new/fluid/city/111.jpg"
							  class="w-100"
							/>
							<a href="#!">
							  <div
								class="mask"
								style="background-color: rgba(251, 251, 251, 0.2);"
							  ></div>
							</a>
						  </div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
						  <div
							class="bg-image hover-overlay ripple shadow-1-strong rounded"
							data-ripple-color="light"
						  >
							<img
							  src="https://mdbootstrap.com/img/new/fluid/city/112.jpg"
							  class="w-100"
							/>
							<a href="#!">
							  <div
								class="mask"
								style="background-color: rgba(251, 251, 251, 0.2);"
							  ></div>
							</a>
						  </div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
						  <div
							class="bg-image hover-overlay ripple shadow-1-strong rounded"
							data-ripple-color="light"
						  >
							<img
							  src="https://mdbootstrap.com/img/new/fluid/city/114.jpg"
							  class="w-100"
							/>
							<a href="#!">
							  <div
								class="mask"
								style="background-color: rgba(251, 251, 251, 0.2);"
							  ></div>
							</a>
						  </div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
						  <div
							class="bg-image hover-overlay ripple shadow-1-strong rounded"
							data-ripple-color="light"
						  >
							<img
							  src="https://mdbootstrap.com/img/new/fluid/city/115.jpg"
							  class="w-100"
							/>
							<a href="#!">
							  <div
								class="mask"
								style="background-color: rgba(251, 251, 251, 0.2);"
							  ></div>
							</a>
						  </div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
						  <div
							class="bg-image hover-overlay ripple shadow-1-strong rounded"
							data-ripple-color="light"
						  >
							<img
							  src="https://mdbootstrap.com/img/new/fluid/city/116.jpg"
							  class="w-100"
							/>
							<a href="#!">
							  <div
								class="mask"
								style="background-color: rgba(251, 251, 251, 0.2);"
							  ></div>
							</a>
						  </div>
						</div>
					  </div>
					</section>
					<!-- Section: Images -->
				  </div>
				  <!-- Grid container -->

				  <!-- Copyright -->
				  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
					© 2020 Copyright:
					<a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
				  </div>
				  <!-- Copyright -->
				</footer>
			
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>