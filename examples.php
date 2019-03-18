<!DOCTYPE html>
<html>
    <head>
        <!-- Необходимые мета-теги -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- bootstrap-css -->
        <link rel="stylesheet" href="сss\bootstrap\bootstrap.css">
    </head>    
    <body>
        <!-- Navigation example -->
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <a href="#" class="navbar-brand">Brand</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">open</button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Photo</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Exit</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Modal example -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Modal</button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hello world!</h5>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forms example -->
        <div class="container">
            <form>
                <div class="form-group row"> 
                    <label class="col-sm-3 col-form-label" for="email">Email adress</label>
                    <div class="col-sm-9">
                        <input id="email" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group row"> 
                    <label class="col-sm-3 col-form-label" for="password">Password</label>
                    <div class="col-sm-9">
                        <input id="password" class="form-control" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 offset-sm-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>           
            </form>
        </div>
        <!-- List example -->
        <div class="container">
            <div class="list-group">
                <a href="#" class="list-group-item">Homepage</a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">Blog
                    <span class="badge badge-pill badge-primary">3</span>
                </a>
                <a href="#" class="list-group-item">About me</a>
                <a href="#" class="list-group-item">Photo</a>
            </div>
        </div>
        <!-- Cards example -->
        <div class="container">
            <div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/300" alt="">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap/bootstrap.js"></script>
    </body>
</html>