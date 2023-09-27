<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        require "./component/head.php";
    ?>

    <title>Document</title>
</head>
<body>



<div class="">
    <div class="h-[50px] w-full absolute" style=" z-index: 1;">

    <?php 
        require "./component/nav.php";
    ?>

    </div>
    <div class=" mt-[100px] w-full h-[500px] text-white" style=" position: absolute; z-index: 1;">
      <h1 class="text-[30px] font-bold text-center">Contact Us</h1>
      <p class=" w-[650px] m-auto text-center mt-2">Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Rerum, non laboriosam amet quia vitae fuga corrupti sint dicta, libero ipsum id. Fuga
        repellendus consectetur culpa suscipit vitae architecto esse amet.</p>

      <div class="grid w-[800px] mt-[30px] mx-auto" style=" grid-template-columns: 9fr 4fr;">

        <div class=" text-white text-[20px] font-bold px-[70px] py-[20px] rounded-lg" style="border: 1px solid white;">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="">
            <button class="bg-blue-700 text-white font-semibold py-[5px] px-[15px] rounded-md" ><a href="">Submit</a></button>
          </div>
        </div>
        <div class="mt-[20px] px-[10px] font-semibold">
          <p>Address : Vishwakram colony railway station bagra</p>
          <p>Contact No. : 91 +3432245534</p>
        </div>
      </div>
    </div>

  </div>
  <img class="w-screen h-screen " style="position: relative; opacity:.9;"
    src="https://img.freepik.com/premium-vector/football-arena-field-with-bright-stadium-lights-illumination_34982-123.jpg"
    alt="">
  </div>
    <?php 
        // require "./component/footer.php";  
    ?>
</body>
</html>