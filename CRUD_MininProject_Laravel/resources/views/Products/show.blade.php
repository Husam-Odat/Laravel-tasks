{{-- This page to show Product Details --}}

{{-- This page to show Product Details --}}
<!doctype html>
<html lang="en">
    <head>
        <title>Product Details</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
            <a class="navbar-brand " style="color: white">Welcome</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('Products.index') }}">Dashboard</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">All Products  <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
            </div>
            <form class="form-inline">
                
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
<br><br><br>
        <div class="container">
            @foreach ($products as $product)
                <div class="card d-inline-block" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="https://npn360.com/wp-content/uploads/2020/02/custom-product-packaging-services.jpg" alt="Card image cap">
                        
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->category_name }}</p>
                        <h6 class="card-title">{{ $product->price }}</h6>
                        <a href="#" class="btn btn-info">Buy Now</a>
                    </div>
                </div>
            @endforeach
        </div>

        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>