<?php

include 'conn.php';

$id = $_GET['id'];

$select_query = "select * from password_details where id = $id";

$query = mysqli_query($con,$select_query);

$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $website = $_POST['website'];
    //$q = "INSERT INTO `user_details`(`username`, `password`, `website`) VALUES ('$username','$password','$website')";
    $q = "UPDATE `password_details` SET `id`= $id,`username`='$username',`password`='$password',`website`='$website' WHERE id=$id";
    $query = mysqli_query($con,$q);

    if($query){
        ?>
        <script>
            alert('Updated Succesfully')
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('Unable to Update!')
        </script>
        <?php
    }
}
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
    <script src="https://kit.fontawesome.com/2a9e904965.js" crossorigin="anonymous"></script>   
    
</head>
<body>

    <div class="col-lg-6 m-auto">

        <form action="" method="POST">

            <br><br><div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Your Details Here</h1>
                </div>
                <br><label>Website : </label>
                <input type="text" name="website" class="form-control" placeholder="Enter website name" value="<?php echo $result['website']; ?>" required>

                <br><label>Username : </label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" value="<?php echo $result['username']; ?>" required><br>

                <label>Password : </label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" value="<?php echo $result['password']; ?>" required><i class="fa fa-eye-slash" aria-hidden="true" id="show_hide_password" name="show_hide_password"></i><br>

                <a href="display.php" style = "text-decoration:none"><button type="submit" class="btn btn-success" name="submit">Update</button></a><br>
                </div>
                <script>
                            const show_hide_password = document.querySelector("#show_hide_password");
                            const password = document.querySelector("#password");

                            show_hide_password.addEventListener("click", function (e) {
                                // toggle the type attribute
                                const type = password.getAttribute("type") === "password" ? "text" : "password";
                                password.setAttribute("type", type);
                                
                                // toggle the icon
                                this.classList.toggle("fa-eye");
                            });
                </script>
           
        </form>
    </div>
</body>
</html>