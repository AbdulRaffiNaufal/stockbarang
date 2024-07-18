<?php
require 'function.php';

//cek login
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
//cocokan database
  $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email = '$email' and password = '$password'");
  //hitung jumlah data
  $hitung = mysqli_num_rows($cekdatabase);
  if ($hitung>0){
    $_SESSION['log'] = 'True';
    header('location:index.php');
  } else {
   header('location;login.php');
  };
};
 
if(!isset($_SESSION['log'])){

}else {
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                        <i class="fas fa-user-circle" style="font-size: 3em;"></i>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <form method = "post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name = "email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email Addressed</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name = "password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name = "login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>