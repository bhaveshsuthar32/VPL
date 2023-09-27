<html>
<head>
    <title>Player_Information</title>

</head>
<body style=" 

background-color:gray;
">
    <?php
        include "connection.php";
        include "navbar.php";
    ?>
    <div style="
             /* grid-row-gap: 1rem;
            grid-column-gap: 2rem; */
    display: grid;
    grid-template-columns: repeat(2, 5fr);
    grid-template-rows: repeat(1, 13fr);
    grid-gap: 3rem;
    margin: 51px 270px;
">
        
            <?php
                $sql = "SELECT * FROM `player`";
                $ab = mysqli_query($con,$sql);
                while($x = mysqli_fetch_array($ab)){
                    ?>
            <div style="
           
    border: 2px solid black;
    width: 330px;
    height: 350px;
    padding: auto;
    padding: 14px 35px;
    border-radius: 4px;
    margin: 12px 19px;
    background-color: #efe9e9;
">
                <table>
                    <div>
                    <tr><td colspan=2 align="center"><h2>Player Details </h2></td></tr>
                <tr ><td style="font-weight: bold;
                          font-size: 18px;
                          font-family: math;
                          ">Fisrt Name : </td>
                    <td style="    border: 2px solid #939393;
    margin: 22px 25px;
    padding: 0px 13px;
    height: 33px;
    color: black;
    width: 167px;
    font-family: math;
    border-radius: 4px;
    font-weight: bold;
    background-color: #dbdbeb;"><?php echo $x['first_name']; ?></td>
                </tr></div>
                <div>
                <tr><td style="font-weight: bold;
                          font-size: 18px;
                          font-family: math;
                          ">Last Name : </td>
                    <td style="    border: 2px solid #939393;
    margin: 22px 25px;
    padding: 0px 13px;
    height: 33px;
    color: black;
    width: 167px;
    font-family: math;
    border-radius: 4px;
    font-weight: bold;
    background-color: #dbdbeb;"><?php echo $x['last_name']; ?></td>
                </tr></div>
                <div>
                <tr><td style="font-weight: bold;
                          font-size: 18px;
                          font-family: math;
                          ">village : </td>
                    <td style="    border: 2px solid #939393;
    margin: 22px 25px;
    padding: 0px 13px;
    height: 33px;
    color: black;
    width: 167px;
    font-family: math;
    border-radius: 4px;
    font-weight: bold;
    background-color: #dbdbeb;"><?php echo $x['village']; ?></td>
                </tr></div>
                <div>
                <tr><td style="font-weight: bold;
                          font-size: 18px;
                          font-family: math;
                          ">aadhar No. : </td>
                    <td style="    border: 2px solid #939393;
    margin: 22px 25px;
    padding: 0px 13px;
    height: 33px;
    color: black;
    width: 167px;
    font-family: math;
    border-radius: 4px;
    font-weight: bold;
    background-color: #dbdbeb;"><?php echo $x['aadhar_card']; ?></td>
                </tr></div>
                <div>
                <tr><td style="font-weight: bold;
                          font-size: 18px;
                          font-family: math;
                          ">Image : </td>
                    <td style=""><img src="<?php echo $x['image'];  ?>" alt="" width="150" height="100" style="border-radius: 8px;
    margin: 8px 3px;
    width: 117px;
    height: 132px;"></td>
                </tr></div>
                </table>
           
                </div>  
            <?php
                }
                ?>
        
            </div>
</body>
</html>