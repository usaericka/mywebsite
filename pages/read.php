<?php

    include "../pages/connect.php"; 

    
    $sql = "SELECT * FROM `feedback` ORDER BY id";
    $result = mysqli_query($connection, $sql);