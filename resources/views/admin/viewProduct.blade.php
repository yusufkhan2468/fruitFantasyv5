<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <title>View Product</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Fruit Fantasy</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <a type="button" href="login.php" class="btn btn-outline-secondary mx-3"><i class="fa-solid fa-user"></i></a>
                <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-arrow-down"></i></button </div>
            </div>
    </nav>
    <div class="sidebar bg-secondary text-white">
        <div class="items">
            <li><i class="fa-solid fa-chart-pie"></i><a href="#">Dashboard</a></li>
            <li><i class="fa-solid fa-border-all"></i><a href="#">Categories</a></li>
            <li><i class="fa-solid fa-apple-whole"></i><a href="#">Products</a></li>
            <li><i class="fa-solid fa-users"></i><a href="userList.php">Users</a></li>
            <li><i class="fa-solid fa-cart-arrow-down"></i><a href="#">Order List</a></li>
            <li><i class="fa-solid fa-file-invoice-dollar"></i><a href="#">Invoice</a></li>
            <li><i class="fa-solid fa-star-half-stroke"></i><a href="#">Reviews</a></li>


        </div>
    </div>
    <div class="container ">
        <div class="justify-content-md-center pb-2">
            <div class="main">
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="mt3">
                                    Pink Lady
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-1">
                        <div class="card mb-3 content">
                            <h1 class="m-3 pt-3">About</h1>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Product Name</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        Pink Lady
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Category</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        Apple
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        Available Quantity
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        100
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        Description
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum debitis iusto temporibus modi maiores, quibusdam laborum perferendis! Eligendi cum dolorem eveniet, amet reiciendis, iusto maiores vel minima nulla nobis iste!
                                    </div>
                                </div>

                                <div class=" justify-content-center fs-3 mb-3">
                                    <a href="#" class="btn btn-secondary w-50 mt-5" type="submit">Edit</a>
                                    <a href="#" class="btn btn-success w-50 mt-1" type="submit">Back to List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>