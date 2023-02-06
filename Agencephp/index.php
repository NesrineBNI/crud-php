<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Php Procedural - Modal Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="image" width="70" height="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#popular">Most Popular</a>
            </li>

        </div>
    </nav>
    <slide>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                <h1>Est notare quam littera gothica, quam nunc.</h1>
				<h2>At wisi enim ad minim veniam, quis nostrud.</h2>
                </div>
            </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/banner1.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                <h1>Est notare quam littera gothica, quam nunc.</h1>
				<h2>At wisi enim ad minim veniam, quis nostrud.</h2>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/banner2.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                <h1>Est notare quam littera gothica, quam nunc.</h1>
				<h2>At wisi enim ad minim veniam, quis nostrud.</h2>
                </div>
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
    </slide>
    <form action="index.php" method="post">
        <div class="input-group mt-5 container">
        <label for="exampleFormControlSelect1">Type Annonce :  </label>
        <select class="form-control" id="exampleFormControlSelect1" name="type">
            <option value="">Select type Annonce </option>
            <option value="locattion" > Location </option>
            <option value="vente"> Vente </option>
        </select>
        <div class="input-group-prepend">
            <span class="input-group-text">Montant Min and Max</span>
        </div>
        <input type="number" name="min" class="form-control" min="0" required placeholder="Min">
        <input type="number" name="max" class="form-control" min="0" required placeholder="Max">
        
        <button type="submit" name="submit" class="btn btn-success">
            Search
        </button>
    </form>
        <div class="card-deck mt-5">
            <?php
            if(isset($_POST['submit'])) {
                // declarier les names des inputs
                $type = $_POST['type'];
                $min = $_POST['min'];
                $max = $_POST['max'];

                $insert = "SELECT * FROM `annonce` WHERE `montant` >= $min AND `montant` <= $max AND `type` LIKE '$type'";
                $get_data_qry = mysqli_query($conn, $insert);
                $num = 1;
                while($row = mysqli_fetch_array($get_data_qry)) {
            ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" height="250">
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['titre'] ?></h5>
                <p class="card-text"><?php echo $row['montant'] ?> DH</p>
                <p class="card-text"><small class="text-muted"><?php echo $row['superficie'] ?> m</small></p>
                <p class="card-text"><?php echo $row['type'] ?></p>
                <p class="card-text"><?php echo $row['description'] ?></p>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $row['id'] ?>">
                Edit
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $row['id'] ?>">
                Delete
                </button>
                </div>
            </div>
            
            <?php
                include 'delete-modal.php';
                include 'edit-modal.php';
                $num++; 
                }
            }
            ?>
        </div>
    </div>
    <div class="container">
        <br><br>
        <h1 class="text-center" id="popular">Most Popular</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        Add Annonce
        </button>

        <br> <br>
        <!-- <table class="table-bordered table table-hover"> -->
        <div class="card-deck">
            <?php
                $get_data = "SELECT * FROM annonce";
                $get_data_qry = mysqli_query($conn, $get_data);
                $number = 1;
                while($rows = mysqli_fetch_array($get_data_qry)) {
            ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo $rows['image'] ?>" alt="Card image cap" height="250">
                <div class="card-body">
                <h5 class="card-title"><?php echo $rows['titre'] ?></h5>
                <p class="card-text"><?php echo $rows['montant'] ?> DH</p>
                <p class="card-text"><small class="text-muted"><?php echo $rows['superficie'] ?> m</small></p>
                <p class="card-text"><?php echo $rows['type'] ?></p>
                <p class="card-text"><?php echo $rows['description'] ?></p>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $rows['id'] ?>">
                Edit
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $rows['id'] ?>">
                Delete
                </button>
                </div>
            </div>
            
            <?php
                include 'delete-modal.php';
                include 'edit-modal.php';
                $number++; 
                } 
            ?>
        </div>
</div>

    <?php include 'add-modal.php'; ?>
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</html>