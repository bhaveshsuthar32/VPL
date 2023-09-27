<html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    require 'connection.php';
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if($pass == $cpass && !$pass==NULL){
        $sql = "INSERT INTO `reg` VALUES ('$user','$pass','$cpass')";
        $q = mysqli_query($con, $sql);
    }
    else{
        // echo "this is wrong password!";
    }
}
?>
<head>
  

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    
  <?php
        require './component/head.php';
  ?>
    <link rel="stylesheet" href="./css/reg.css">
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

        <form action="reg.php" method="post" >
            <div class="form">
            <div class="table sm:w-[455px] w-[300px] bg-red-600">
                <div>
                    <h2>Register Form</h2>
                </div>
                <div>
                    <label for="user">Username :</label>
                    <input type="text" name="user" id="user">
                </div>
                <div>
                    <label for="pass">Password :</label>
                    <input type="text" name="pass" id="pass">
                </div>
                <div>
                     <label for="cpass">Confirm Password :</label>
                     <input type="text" name="cpass" id="cpass">
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
