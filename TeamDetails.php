<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <?php
            require  "./component/head.php";
        ?>

    <link rel="stylesheet" href="./team_style.css">
    <title>Vpl-02</title>
</head>

<?php
    $con = mysqli_connect("localhost","root","","teamDetails");
    if(!$con){
        die("connection failed...".mysqli_connction_error());
    }else{
        // echo"successfull......";
    }
?>

<?php
    if(isset($_POST['save'])){
        $team = $_POST['t_name'];
        $vil = $_POST['village'];
        $sp1 = $_POST['sponsor1'];
        $sp2 = $_POST['sponsor2'];
        $phno = $_POST['phone'];

        $t_logo = "logo/";
        $lg1 = $t_logo.basename($_FILES['logo1']['name']);
        move_uploaded_file($_FILES['logo1']['tmp_name'],$lg1);

        $lg2 = $t_logo.basename($_FILES['logo2']['name']);
        move_uploaded_file($_FILES['logo2']['tmp_name'],$lg2);

        $sql = "INSERT INTO `team` (`TeamName`, `Village`, `Spon1`, `Spon2`, `Phno`, `Logo1`, `Logo2`) VALUES ('$team', '$vil', '$sp1', '$sp2', '$phno', '$lg1', '$lg2')";
        
        $result1 = mysqli_query($con,$sql);

        $table = "CREATE TABLE `teamdetails`.`$team` ( `Name` VARCHAR(50) NOT NULL ,  `f_name` VARCHAR(50) NOT NULL ,  `t_size` VARCHAR(3) NOT NULL ,  `t_no` INT(3) NOT NULL ,  `village` VARCHAR(50) NOT NULL ) ENGINE = InnoDB";
        $Reqult_1 = mysqli_query($con,$table);
        

        $name1 = $_POST['p_name1'];
        $f_name1 = $_POST['f_name1'];
        $t_size1 = $_POST['t_size1'];
        $t_no1 = $_POST['t_num1'];
        $vil1 = $_POST['vil1'];


        $sql_1 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name1', '$f_name1', '$t_size1', '$t_no1', '$vil1')";
        $res1 = mysqli_query($con,$sql_1);

        

        $name2 = $_POST['p_name2'];
        $f_name2 = $_POST['f_name2'];
        $t_size2 = $_POST['t_size2'];
        $t_no2 = $_POST['t_num2'];
        $vil2 = $_POST['vil2'];


        $sql_2 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name2', '$f_name2', '$t_size2', '$t_no2', '$vil2')";
        $res2 = mysqli_query($con,$sql_2);


        $name3 = $_POST['p_name3'];
        $f_name3 = $_POST['f_name3'];
        $t_size3 = $_POST['t_size3'];
        $t_no3 = $_POST['t_num3'];
        $vil3 = $_POST['vil3'];


        $sql_3 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name3', '$f_name3', '$t_size3', '$t_no3', '$vil3')";
        $res3 = mysqli_query($con,$sql_3);


        $name4 = $_POST['p_name4'];
        $f_name4 = $_POST['f_name4'];
        $t_size4 = $_POST['t_size4'];
        $t_no4 = $_POST['t_num4'];
        $vil4 = $_POST['vil4'];


        $sql_4 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name4', '$f_name4', '$t_size4', '$t_no4', '$vil4')";
        $res4 = mysqli_query($con,$sql_4);


        $name5 = $_POST['p_name5'];
        $f_name5 = $_POST['f_name5'];
        $t_size5 = $_POST['t_size5'];
        $t_no5 = $_POST['t_num5'];
        $vil5 = $_POST['vil5'];


        $sql_5 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name5', '$f_name5', '$t_size5', '$t_no5', '$vil5')";
        $res5 = mysqli_query($con,$sql_5);


        $name6 = $_POST['p_name6'];
        $f_name6 = $_POST['f_name6'];
        $t_size6 = $_POST['t_size6'];
        $t_no6 = $_POST['t_num6'];
        $vil6 = $_POST['vil6'];


        $sql_6 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name6', '$f_name6', '$t_size6', '$t_no6', '$vil6')";
        $res6 = mysqli_query($con,$sql_6);


        $name7 = $_POST['p_name7'];
        $f_name7 = $_POST['f_name7'];
        $t_size7 = $_POST['t_size7'];
        $t_no7 = $_POST['t_num7'];
        $vil7 = $_POST['vil7'];


        $sql_7 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name7', '$f_name7', '$t_size7', '$t_no7', '$vil7')";
        $res7 = mysqli_query($con,$sql_7);


        $name8 = $_POST['p_name8'];
        $f_name8 = $_POST['f_name8'];
        $t_size8 = $_POST['t_size8'];
        $t_no8 = $_POST['t_num8'];
        $vil8 = $_POST['vil8'];


        $sql_8 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name8', '$f_name8', '$t_size8', '$t_no8', '$vil8')";
        $res8 = mysqli_query($con,$sql_8);


        $name9 = $_POST['p_name9'];
        $f_name9 = $_POST['f_name9'];
        $t_size9 = $_POST['t_size9'];
        $t_no9 = $_POST['t_num9'];
        $vil9 = $_POST['vil9'];


        $sql_9 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name9', '$f_name9', '$t_size9', '$t_no9', '$vil9')";
        $res9 = mysqli_query($con,$sql_9);


        $name10 = $_POST['p_name10'];
        $f_name10 = $_POST['f_name10'];
        $t_size10 = $_POST['t_size10'];
        $t_no10 = $_POST['t_num10'];
        $vil10 = $_POST['vil10'];


        $sql_10 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name10', '$f_name10', '$t_size10', '$t_no10', '$vil10')";
        $res10 = mysqli_query($con,$sql_10);


        $name11 = $_POST['p_name11'];
        $f_name11 = $_POST['f_name11'];
        $t_size11 = $_POST['t_size11'];
        $t_no11 = $_POST['t_num11'];
        $vil11 = $_POST['vil11'];


        $sql_11 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name11', '$f_name11', '$t_size11', '$t_no11', '$vil11')";
        $res11 = mysqli_query($con,$sql_11);


        $name12 = $_POST['p_name12'];
        $f_name12 = $_POST['f_name12'];
        $t_size12 = $_POST['t_size12'];
        $t_no12 = $_POST['t_num12'];
        $vil12 = $_POST['vil12'];


        $sql_12 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name12', '$f_name12', '$t_size12', '$t_no12', '$vil12')";
        $res12 = mysqli_query($con,$sql_12);


        $name13 = $_POST['p_name13'];
        $f_name13 = $_POST['f_name13'];
        $t_size13 = $_POST['t_size13'];
        $t_no13 = $_POST['t_num13'];
        $vil13 = $_POST['vil13'];


        $sql_13 = "INSERT INTO `$team` (`Name`, `f_name`, `t_size`, `t_no`, `village`) VALUES ('$name13', '$f_name13', '$t_size13', '$t_no13', '$vil13')";
        $res13 = mysqli_query($con,$sql_13);




    }
?>

<body>
<?php
require  "./component/nav.php";
?>
    <!-- https://form.jotform.com/232032646656456 -->
    <div id="all">
        <div id="heading">
            <h1>VPL-2 REGISTRATION FORM</h1>
            <p id="p">For any enquiry related to registration please contact 9001136652, 9799594110,
                9636103808, 9967747458</p>
        </div>
        <hr>
        <div id="part-1">
            <ol type="1">
                <li>VPL का यह द्वितीय संस्करण बोड़ा और ढंढार परगना के तत्वाधान में आयोजित किया जायेगा</li>
                <li>इस संस्करण में कुल 12 टीमें ही भाग लेगी, जिनमे शरुआती मैच लीग रहेंगे।</li>
                <li>इस टूर्नामेंट में दोनों परगनो (बोड़ा और ढंढार ) के खिलाडी ही मान्य होंगे।</li>
                <li>प्रत्येक टीम की एंट्री तय राशि (11,000) जमा करवाने के बाद और उसके भामाशाह(Sponsor) के द्वारा ही
                    मान्य होगी।</li>
                <li>टीम रजिस्ट्रेशन की अंतिम तिथि 13-08-2023 रहेगी | उसके बाद किसी भी टीम की एंट्री मान्य नहीं होगी |
                </li>
                <li>प्रत्येक गाँव का खिलाडी उसके गाँव की टीम को
                    प्राथमिकता देगा , अन्यथा अपने टीम कप्तान की सहमति से किसी अन्य टीम से खेल सकता हैं |</li>
                <li>हर टीम अपनी टीम में कोई भी 4 खिलाडी दोनों परगने में से ले सकते हैं।</li>
                <li>अपनी एंट्री फी आप निचे दिए गए QR कोड को स्कैन करके जमा करावे।
                </li>
            </ol>
            <div id="img">
                <img src="https://picsum.photos/seed/picsum/200/300" alt="">
            </div>
            <br>
            <hr class="hr1">
        </div>

        <div id="part-2">
            <form action="" method="post" id="phoneForm" enctype="multipart/form-data">
                <div id="form">
                <div>
                    <label for="t_name">Team Name</label><br>
                    <input type="text" name="t_name" id="t_name" required>
                </div>
                <div>
                    <label for="vill">Village</label><br>
                    <input type="text" name="village" id="vill" required>
                </div>
                <div id="sp">
                    <label for="spn1">Sponsor Name</label><br>
                    <input type="text" name="sponsor1" id="spn1" placeholder="Name-1" required>
                    <input type="text" name="sponsor2" id="spn2" placeholder="Name-2" required>
                </div>
                <div>
                    <label for="phno">Captain Phone text</label><br>
                    <input type="tel" name="phone" id="phno" placeholder="(+91) 000-000-0000" required
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                </div>
                <!-- <button type="submit">Submit</button> -->
                </div>
            

            <div id="p_list">
              
                <table id="table">
                    <tr>
                        <th class="th_Empty">No.</th>
                        <th class="t_N">Name</th>
                        <th class="t_F">Father Name</th>
                        <th class="t_S">T-shirt size</th>
                        <th class="t_N">T-shirt No.</th>
                        <th class="t_r">Village</th>
                    </tr>
                    <tr>
                        <td class="td_n">1</td>
                        <td><input type="text" name="p_name1" required></td>
                        <td><input type="text" name="f_name1" required></td>
                        <td>
                            <select name="t_size1" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num1" maxlength="3" required></td>
                        <td><input type="text" name="vil1" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">2</td>
                        <td><input type="text" name="p_name2" required></td>
                        <td><input type="text" name="f_name2" required></td>
                        <td>
                            <select name="t_size2" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num2" maxlength="3" required></td>
                        <td><input type="text" name="vil2" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">3</td>
                        <td><input type="text" name="p_name3" required></td>
                        <td><input type="text" name="f_name3" required></td>
                        <td>
                            <select name="t_size3" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num3" maxlength="3" required></td>
                        <td><input type="text" name="vil3" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">4</td>
                        <td><input type="text" name="p_name4" required></td>
                        <td><input type="text" name="f_name4" required></td>
                        <td>
                            <select name="t_size4" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num4" maxlength="3" required></td>
                        <td><input type="text" name="vil4" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">5</td>
                        <td><input type="text" name="p_name5" required></td>
                        <td><input type="text" name="f_name5" required></td>
                        <td>
                            <select name="t_size5" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num5" maxlength="3" required></td>
                        <td><input type="text" name="vil5" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">6</td>
                        <td><input type="text" name="p_name6" required></td>
                        <td><input type="text" name="f_name6" required></td>
                        <td>
                            <select name="t_size6" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num6" maxlength="3" required></td>
                        <td><input type="text" name="vil6" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">7</td>
                        <td><input type="text" name="p_name7" required></td>
                        <td><input type="text" name="f_name7" required></td>
                        <td>
                            <select name="t_size7" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num7" maxlength="3" required></td>
                        <td><input type="text" name="vil7" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">8</td>
                        <td><input type="text" name="p_name8" required></td>
                        <td><input type="text" name="f_name8" required></td>
                        <td>
                            <select name="t_size8" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num8" maxlength="3" required></td>
                        <td><input type="text" name="vil8" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">9</td>
                        <td><input type="text" name="p_name9" required></td>
                        <td><input type="text" name="f_name9" required></td>
                        <td>
                            <select name="t_size9" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num9" maxlength="3" required></td>
                        <td><input type="text" name="vil9" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">10</td>
                        <td><input type="text" name="p_name10" required></td>
                        <td><input type="text" name="f_name10" required></td>
                        <td>
                            <select name="t_size10" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num10" maxlength="3" required></td>
                        <td><input type="text" name="vil10" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">11</td>
                        <td><input type="text" name="p_name11" required></td>
                        <td><input type="text" name="f_name11" required></td>
                        <td>
                            <select name="t_size11" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num11" maxlength="3" required></td>
                        <td><input type="text" name="vil11" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">12</td>
                        <td><input type="text" name="p_name12" required></td>
                        <td><input type="text" name="f_name12" required></td>
                        <td>
                            <select name="t_size12" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num12" maxlength="3" required></td>
                        <td><input type="text" name="vil12" required></td>
                    </tr>
                    <tr>
                        <td class="td_n">13</td>
                        <td><input type="text" name="p_name13" required></td>
                        <td><input type="text" name="f_name13" required></td>
                        <td>
                            <select name="t_size13" id="" required>
                                <option value=""></option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input type="text" name="t_num13" maxlength="3" required></td>
                        <td><input type="text" name="vil13" required></td>
                    </tr>
                </table>
            </div>
        </div>

        <?php

        ?>

        <div id="part-3">
            <div id="sp_logo1">
                <h3 style="margin-bottom: 10px;">Sponsor Logo -1</h3>
                <label for="SP1">
                    <div id="btn1">
                        <h1>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </h1>
                        <h2>Browse File</h2>
                        <p>Drag and Drop files here</p>
                    </div>
                </label>
                <input type="file" name="logo1" id="SP1">
            </div>
            </label>
            <div id="sp_logo2">
                <h3 style="margin-bottom: 10px;">Sponsor Logo -2</h3>
                <label for="SP2">
                    <div id="btn2">
                        <h1>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </h1>
                        <h2>Browse File</h2>
                        <p>Drag and Drop files here</p>
                    </div>
                </label>
                <input type="file" name="logo2" id="SP2">
            </div>
        </div>
        <div id="last">
            <input type="submit" value="Register" name="save">
        </div>

        </form>
    </div>
</body>
<script src="../js/script.js"></script>

</html>