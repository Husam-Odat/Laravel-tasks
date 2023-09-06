{{-- This page to add New Product --}}
<!doctype html>
<html lang="en">
    <head>
        <title>Add New Product</title>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('Products.index') }}">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Products.show') }}">All Products</a>
                        </li>
                    </ul>
            </div>
            <form class="form-inline">
                
                
                <a href="./create"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Add</button></a>
            </form>
        </nav><br><br><br>
        <div class="container">
            <form action="create" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter Product Name" name="productName">
                </div>
                <div class="form-group">
                    <label for="productDesc">Product Description</label>
                    <input type="text" class="form-control" id="productDesc" placeholder="Enter Product Description" name="productDesc">
                </div>
                <div class="form-group">
                    <label for="producrPrice">Product Price</label>
                    <input type="text" class="form-control" id="producrPrice" placeholder="Enter Product Price" name="productPrice">
                </div>
                <div class="form-group">
                    <label for="productCategory">Product Category</label>
                    <input type="text" class="form-control" id="productCategory" placeholder="Enter Product Category" name="productCategory">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Add</button>
            </form>

        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>