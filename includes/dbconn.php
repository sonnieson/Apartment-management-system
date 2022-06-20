<?php
    $con=mysqli_connect("localhost", "root", "", "avms");
    if(mysqli_connect_errno()){
        echo "DB Connection Failed!".mysqli_connect_error();
    }
  ?>