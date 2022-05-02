<?php

if (isset($_POST['submit'])){
    $username =  $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT `username`, `password` FROM `register` WHERE `username`= '$username' and `password`='$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)) {
        while($row =mysqli_fetch_assoc($result)){
            // session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
        }
        header("location:blank.php");
    }else{
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>!Hey</strong> You have entered wrong username
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }
} 

?>