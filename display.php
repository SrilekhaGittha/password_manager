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

                    </thead>

                    <tbody>

                    <?php

                    include 'conn.php';

                    $select_query = "select * from password_details";

                    $query = mysqli_query($con,$select_query);

                    ?>

                    <tr>

                    <td colspan="6"><a href="insert.php" style="text-decoration:none"><i class="fa fa-plus"></i></a></td>

                    </tr>

                    <?php

                    while($result = mysqli_fetch_assoc($query)){
                   
                    ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>

                            <td class="web-style"><?php echo $result['website']; ?></td>
                            
                            <td><?php echo $result['username']; ?></td>

                            <td><input class="inp" type="password" name="password" id="password" value="<?php echo $result['password']; ?>" readonly><span><i class="fa fa-eye-slash" aria-hidden="true" id="eye" onclick="toggle()"></i></span></td>

                            <td><a href="update.php?id=<?php echo $result['id'] ?>"><i class="fa fa-edit"></i></a></td>

                            <td><a href="delete.php?id=<?php echo $result['id'] ?>"><i class="fa fa-trash"></i></a></td>
                        </tr>

                        
                        <script>

                            const eye = document.querySelector("#eye");
                            const password = document.querySelector("#password");

                            eye.addEventListener("click", function (e) {
                                // toggle the type attribute
                                const type = password.getAttribute("type") === "password" ? "text" : "password";
                                password.setAttribute("type", type);
                                
                                // toggle the icon
                                this.classList.toggle("fa-eye");
                            });

                        </script>

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