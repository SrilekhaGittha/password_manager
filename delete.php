<?php

include 'conn.php';

$id = $_GET['id'];

$delete_query = "delete from password_details where id = $id";

$query = mysqli_query($con,$delete_query);

if($query){
    ?>
    <script>
        alert('Deleted Succesfully')
    </script>
    <?php
    header('location:display.php');
}
else{
    ?>
    <script>
        alert('Unable to Delete!')
    </script>
    <?php
}



?>