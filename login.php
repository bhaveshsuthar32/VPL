<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connection.php';
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `reg` WHERE username = '$user' and psaa = '$pass'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;

     //   header("location:welcome.php");
        header("location:home.php");   
    }
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --> 

         <!-- <link rel="stylesheet" href="./component/css/nav.css" class="css">
        <link rel="stylesheet" href="./component/css/footer.css" class="css"> -->
        <link rel="stylesheet" href="./css/reg.css">

        <?php 
            require './component/head.php';
        ?>

    <title>login</title>

    <style>
        ul #btn li:hover{
            border: none; 
            background-color: rgb(56, 56, 56);
        }  
    </style>

</head>
<body>
    <?php
    require './component/nav2.php';
    ?>

        <form action="login.php" method="post" >
            <div class="form">
            <div class="table">
                <div>
                    <h2>Login Form</h2>
                </div>
                <div>
                <label for="user">Username :</label>
                <input type="text" name="user" id="user">
                </div>
                <div>
                <label for="pass">Password :</label>
                <input type="text" name="pass" id="pass">
                </div> 
                <div class="btn">
                <input type="submit" value="Submit" name="sub">
                </div>            
            </div>
        </div>
        </form>
    

    <?php
         require './component/footer.php';
    ?>
</body>
</html>