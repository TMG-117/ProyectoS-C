<!doctype html>
<html lang="Es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
		<title>@yield ('title')</title>
		<style>
			img{
				height:140px;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<a class="navbar-brand" href="{{url('productos/')}}">Menu</a>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">							
							<li class="nav-item">
								<a class="nav-link" href="{{url('productos/create')}}">crear</a>
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
							  src="https://media.elmostrador.cl/2019/03/Captura-de-pantalla-2019-03-25-a-las-07.14.26-468x272.png"
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
							  src="https://s1.significados.com/foto/tecnologia-dura-fa.jpg"
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
							  src="https://cdn-3.expansion.mx/dims4/default/f0ee3fe/2147483647/strip/true/crop/1000x667+0+0/resize/1200x800!/format/webp/quality/90/?url=https%3A%2F%2Fcdn-3.expansion.mx%2Ff0%2F1d%2Fd0b7fd994e67a9f48564db5f7507%2Fistock-856757428-copy.jpg"
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
							  src="https://conceptodefinicion.de/wp-content/uploads/2021/01/tecnologia-.jpg"
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
							  src="https://academiadiplomatica.cl/wp-content/uploads/2020/12/Tecnologia-1.jpg"
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
							  src="https://www.latino-news.com/wp-content/uploads/2019/01/tecnologia.png"
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
					<a class="text-white" href="https://mdbootstrap.com/">S&C MDBootstrap.com</a>
				  </div>
				  <!-- Copyright -->
				</footer>
			
		</div>
		
		<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>