<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page of vpl</title>

  <?php 
    require './component/head.php';
  ?>
  
</head>

<body>
  <?php 
  require './component/nav.php';

  ?>

  <!-- End Navbar -->


  <!-- for desktop -->
  <div class="hidden sm:block">
    <div class="relative">
      <img class="w-full h-[500px]"
        src="https://t4.ftcdn.net/jpg/02/40/55/93/360_F_240559322_SwdyNXJeFsmWbPpMrU2jJveE3B5FVS5o.jpg" alt="">
    </div>
    <div class="absolute mt-[-400px] ml-[750px]">
      <h1 class="text-[150px] font-bold font-serif text-orange-500">VPL-1</h1>
      <h1 class="text-[60px] font-bold mt-[-20px] ml-[80px] text-slate-900">Tournament</h1>
    </div>
  </div>

  <!-- for mobile -->
  <div class="block sm:hidden">
    <div class="relative">
      <img class="w-full h-[300px]"
        src="https://media.istockphoto.com/id/165724569/vector/victory-cricket-background.jpg?s=612x612&w=0&k=20&c=4_E5008J_aNHsA1guY7sxPhOXMFJMl8O27L78e0U_I4="
        alt="">
    </div>
    <div class="absolute mt-[-190px] ml-[250px]">
      <h1 class="text-[50px] font-bold font-serif text-slate-700">VPL-1</h1>
      <h1 class="text-[25px] font-bold mt-[-15px] ml-[10px] text-slate-800">Tournament</h1>
    </div>
  </div>


  <!-- Part-2  -->

  <div class="sm:grid sm:grid-cols-2 gap-[50px] p-4 md:mt-[100px] mb-[30px] sm:mb[50px]"
    style="grid-template-columns: 5fr 4fr;">
    <div class=" h-[550px] sm:pl-[50px] sm:py-[12px] py-[40px]">
      <div class="text-orange-500 text-[22px] font-semibold  ">
        <h2>|| <span class="text-[19px] font-normal"> &nbsp; ABOUT US</span></h2>
      </div>
      <div class=" ml-[15px] sm:mt-[10px] mt-[10px]  ">
        <h1 class="text-[40px] font-semibold text-slate-800" style="font-family: 'Kanit', sans-serif;">What is VPL?</h1>
        <P class="pr-[15px] text-slate-700 mt-[4px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque rem
          totam doloribus voluptatum, reprehenderit
          enim dolore minus perspiciatis. Assumenda id a magni ex enim velit iusto sapiente quae hic optio.</P>
      </div>
      <div class=" ml-[15px]">
        <img class="w-[90px] h-[90px] rounded-md mt-10 ml-[10px]"
          src="https://st4.depositphotos.com/2751237/25328/v/1600/depositphotos_253281766-stock-illustration-player-batsman-in-cricket-championship.jpg"
          alt="">
        <h1 class="mt-[10px] font-bold text-[19px] sm:text-[25px] text-slate-700">Cricket</h1>
        <p class="text-slate-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis.</p>
        <h1 class="sm:text-[25px] text-[19px] font-bold text-slate-700 mt-[15px]">Team Registration</h1>
        <button class=" bg-sky-600 mt-[10px] font-bold p-[10px] text-white sm:mb-[0px] mb-[20px]"><a href="TeamDetails.php">Registration</a></button>
      </div>

    </div>
    <div class=" h-[300px] sm:h-[500px] sm:px-[50px] sm:mr-[10px] sm:mt-[0px] mt-[30px] ">
      <img class="bg-cover h-full"
        src="https://images.pexels.com/photos/3601184/pexels-photo-3601184.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
    </div>
  </div>

  <!-- End part-2  -->


  <!-- part-3  -->
  <div class=" h-[640px] sm:h-[500px] w-full bg-indigo-400 mb-[100px]" style="background-color: rgb(232, 232, 232);">
    <div class="border-2 text-center">
      <p class="text-[30px] mt-[30px] font-bold"> Feature Of Crickte </p>
    </div>
    <div class=" flex flex-wrap justify-center sm:px-[50px] sm:py-[30px] px-[10px] py-[10px]">
      <div
        class="border-2 border-slate-150 sm:w-[200px] sm:h-[280px] w-[160px] h-[210px] sm:mx-[40px] mx-[15px] sm:px-[15px] p-[10px] bg-white rounded-md sm:my-[40px] my-[30px]"
        style="border:none">
        <img class="border-2 border-slate-600  sm:h-[100px] sm:w-[100px] w-[70px] m-auto rounded-full"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_M6vlMnx8berFjQP6XBe-cZ18D9wNUPueVQ&usqp=CAU  "
          alt="">
        <p class="text-[15px] sm:text-[18px] sm:mt-[10px] font-bold text-slate-700">Tennis Ball</p>
        <p class="text-[13px] font-semibold sm:text-[15px] text-slate-700 ">The softer tennis ball is used for safety
          reasons, especially in informal and unregulated games.</p>
      </div>
      <div
        class="border-2 border-slate-150 sm:w-[200px] sm:h-[280px] w-[160px] h-[210px] sm:mx-[40px] mx-[15px] sm:px-[15px] p-[10px] bg-white rounded-md sm:my-[40px] my-[30px]"
        style="border:none">
        <img class="border-2 border-slate-600 sm:w-[100px]  w-[70px] m-auto rounded-full"
          src="https://static.vecteezy.com/system/resources/previews/010/851/579/original/3d-illustration-cricket-ball-and-ball-bat-png.png"
          alt="">
        <p class="text-[15px] sm:text-[18px] sm:mt-[10px] font-bold text-slate-700">Bat</p>
        <p class="text-[13px] font-semibold sm:text-[15px] text-slate-700 ">Players may use regular cricket bats. The
          wood used is from the Kashmir or English willow tree.</p>
      </div>
      <div
        class="border-2 border-slate-150 sm:w-[200px] sm:h-[280px] w-[160px] h-[210px] sm:mx-[40px] mx-[15px] sm:px-[15px] p-[10px] bg-white rounded-md sm:my-[40px] my-[30px]"
        style="border:none">
        <img class="border-2 border-slate-600 sm:w-[100px] sm:h-[100px]  h-[70px] w-[70px] m-auto rounded-full"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk4ihOe45DFBGs0Wy7M_GLLPwcg5kaWotGX0DGA92dVxVbZHev9N_K45OLxNdVvwO6O1M&usqp=CAU"
          alt="">
        <p class="text-[15px] sm:text-[18px] sm:mt-[10px] font-bold text-slate-700">Pitch</p>
        <p class="text-[13px] font-semibold sm:text-[15px] text-slate-700 ">The pitch in tennis ball cricket is
          generally shorter and made of a variety of surfaces.</p>
      </div>
      <div
        class="border-2 border-slate-150 sm:w-[200px] sm:h-[280px] w-[160px] h-[210px] sm:mx-[40px] mx-[15px] sm:px-[15px] p-[10px] bg-white rounded-md sm:my-[40px] my-[30px]"
        style="border:none">
        <img class="border-2 border-slate-600 sm:w-[100px]  w-[70px] m-auto rounded-full"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmV2l4N_ld0SEuAAXDh65atfLTUxgtb6IUwYq6t-Ug2g5uBvFietKa1v29ibMr8C8Vad4&usqp=CAU"
          alt="">
        <p class="text-[15px] sm:text-[18px] sm:mt-[10px] font-bold text-slate-700">Limited Overs</p>
        <p class="text-[13px] font-semibold sm:text-[15px] text-slate-700 ">Tennis ball cricket games are often played
          with a limited number of overs per side. </p>
      </div>
    </div>

    <!-- part-3 end -->

    <!-- part-4 start -->

    <div class=" px-[40px] sm:h-[500px] h-[1100px] mt-[60px]">
      <div class=" text-center mb-[30px]">
        <p class="text-[30px] font-bold text-orange-500 ">|| &nbsp;<span class="underline">IMAGES OF VPL</span> </p>
      </div>
      <div class="sm:grid flex flex-wrap sm:h-[400px] h-[1000px]"
        style="grid-template-columns: 1fr 1fr 1fr; gap:25px; ">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3OOfrBLXPZKaVZ-nwC8p9_dYGFi3jY4ktjQ&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRCIq1WFIqckI69eGZ67ugLdfxchy96eLR7w&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT73Hx3joXluMeacnnC_5P92ZM4zbZq6-VYvWGrgPwLmEWlLRepRH1jYOGoQyHJYbviEnU&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
          </div>

        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3OOfrBLXPZKaVZ-nwC8p9_dYGFi3jY4ktjQ&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRCIq1WFIqckI69eGZ67ugLdfxchy96eLR7w&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT73Hx3joXluMeacnnC_5P92ZM4zbZq6-VYvWGrgPwLmEWlLRepRH1jYOGoQyHJYbviEnU&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
          </div>

        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3OOfrBLXPZKaVZ-nwC8p9_dYGFi3jY4ktjQ&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRCIq1WFIqckI69eGZ67ugLdfxchy96eLR7w&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT73Hx3joXluMeacnnC_5P92ZM4zbZq6-VYvWGrgPwLmEWlLRepRH1jYOGoQyHJYbviEnU&usqp=CAU"
                class=" h-[300px] w-full sm:h-[380px]" alt="...">
            </div>
          </div>

        </div>


      </div>
    </div>

    <!-- part-4 end -->

    <?php 
      require './component/footer.php';
    ?>
    <!-- part-5 start footer part -->


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>