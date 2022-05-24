<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Passwords</title>
    <?php include 'links.php'; ?>
    <?php include 'style.css'; ?>
</head>
<body>
    <div class="main-div">
        <h1>Your passwords</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <th>S.no</th>
                        <th>Website</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th colspan="2">Operation</th>
                        <th><a href="insert.php"><i class="fa fa-plus"></i></a></th>
                    </thead>
                    <tbody>
                    <?php

                    include 'conn.php';

                    $select_query = "select * from password_details";

                    $query = mysqli_query($con,$select_query);

                    while($result = mysqli_fetch_assoc($query)){
                   
                    ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>

                            <td class="web-style"><?php echo $result['website']; ?></td>
                            
                            <td><?php echo $result['username']; ?></td>

                            <td><input class="inp" type="password" name="password" id="password" value="<?php echo $result['password']; ?>" readonly><i class="fa fa-eye-slash" aria-hidden="true" id="show_hide_password" name="show_hide_password"></i></td>

                            <!-- <script src="show_password.js"></script> -->

                            <td><a href="update.php?id=<?php echo $result['id'] ?>"><i class="fa fa-edit"></i></a></td>

                            <td><a href="delete.php?id=<?php echo $result['id'] ?>"><i class="fa fa-trash"></i></a></td>

                            <td><a href="insert.php"><i class="fa fa-plus"></i></a></td>
                        </tr>
                        
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
                        <!-- <script>
                        var x = document.getElementById("show_hide_password");
                        var y = document.getElementById("password");
                        x.onclick = function myFunction() {
                            if (y.type == "password") {
                                y.type = "text";
                            } else {
                                y.type = "password";
                            }
                        }
                        </script> -->
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php


?>