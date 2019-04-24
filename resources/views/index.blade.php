<!DOCTYPE html>
<html>
<head>
	<title>Laravel Ecommerce Project</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

	<div class="wrapper">
		<!-- Navigation Start -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
  				<a class="navbar-brand" href="#">Navbar</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  				</button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Link</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">

				     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				     <div class="input-group mb-3">
				       <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
				       <div class="input-group-append">
				         <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
				       </div>
				     </div>

				    </form>
				  </div>
  			</div>
		</nav>
		<!-- Navigation End -->
		<!-- Start Sidebar + Content  -->
		<div class="container margin-top-20">
			<div class="row">
				<div class="col-md-4">
					<ul class="list-group">
					  <li class="list-group-item">First item</li>
					  <li class="list-group-item">Second item</li>
					  <li class="list-group-item">Third item</li>
					</ul> 					
				</div>
				<div class="col-md-8">
					<div class="widget">
						<h3>Featured Products</h3>
						<div class="row">
							<div class="col-md-3">
								<div class="card">
								  <img class="card-img-top feature-img" src="{{asset('images/products/'.'sumsung.jpg')}}" alt="Card image">
								  <div class="card-body">
								    <h4 class="card-title">John Doe</h4>
								    <p class="card-text">Some example text.</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card">
								  <img class="card-img-top feature-img" src="{{asset('images/products/'.'sumsung.jpg')}}" alt="Card image">
								  <div class="card-body">
								    <h4 class="card-title">John Doe</h4>
								    <p class="card-text">Some example text.</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
								</div>
							</div><div class="col-md-3">
								<div class="card">
								  <img class="card-img-top feature-img" src="{{asset('images/products/'.'sumsung.jpg')}}" alt="Card image">
								  <div class="card-body">
								    <h4 class="card-title">John Doe</h4>
								    <p class="card-text">Some example text.</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
								</div>
							</div><div class="col-md-3">
								<div class="card">
								  <img class="card-img-top feature-img" src="{{asset('images/products/'.'sumsung.jpg')}}" alt="Card image">
								  <div class="card-body">
								    <h4 class="card-title">John Doe</h4>
								    <p class="card-text">Some example text.</p>
								    <a href="#" class="btn btn-primary">See Profile</a>
								  </div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<!-- End Sidebar + Content  -->
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>