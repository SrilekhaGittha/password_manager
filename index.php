<?php

include 'conn.php';

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO `user_details`(`username`, `password`) VALUES ('$username','$password')";
    $query = mysqli_query($con,$q);

}
header('location:display.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Password Management Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

    <div class="col-lg-6 m-auto">

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

            <br><br><div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">LOGIN HERE TO VIEW YOUR PASSWORDS</h1>
                </div>

                <br><label>Username : </label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" required><br>

                <label>Password : </label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required><br>

                <a href="display.php" style = "text-decoration:none"><button type="submit" class="btn btn-success" name="submit">Submit</button></a><br>
                </div>
           
        </form>
    </div>
</body>
</html>