<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="header">

   <a href="index.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="index.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location" required>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" id="arrivalDate" onChange="changeDate();" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" id="leavingDate" name="leaving" required>
         </div>
      </div>
      <input type="hidden" id="current_date" name="currentDate">
      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> abc@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> pune, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/MandeepDalavi" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/MandeepDalavi" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/mandeepdalavi/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/mandeepdalavi" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Mandeep Dalavi</span> | all rights reserved! </div>

</section>
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

<script>
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth();
    var day = date.getDate();
    var weekDay = date.getDay();
    var monthArr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var weekDayArr = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    month = monthArr[month];
    weekDay = weekDayArr[weekDay];
    document.getElementById("current_date").value = weekDay + ", " + month + " " + day + ", " + year;

    var dd = date.getDate() + 1;
    var mm = date.getMonth() + 1; //January is 0!
    var yyyy = date.getFullYear();
    if(dd<10){
      dd='0'+dd
    } 
    if(mm<10){
      mm='0'+mm
    }
    
    var tomorrow = yyyy+'-'+mm+'-'+dd;
    document.getElementById("arrivalDate").setAttribute("min", tomorrow);
    yyyy++;
    var endDate = yyyy+'-'+'01'+'-'+31;
    document.getElementById("arrivalDate").setAttribute("max", endDate);

    var arrival = document.getElementById("arrivalDate");
    var leaving = document.getElementById("leavingDate");
    function changeDate() {
      var arrivalD = new Date(arrival.value);
      var leaveDD = arrivalD.getDate() + 1;
      var leaveMM = arrivalD.getMonth() + 1; //January is 0!
      var leaveYYYY = arrivalD.getFullYear();
      if(leaveDD<10){
        leaveDD='0'+leaveDD
      }
      if(leaveMM<10){
        leaveMM='0'+leaveMM
      }
      
      var minleaveDate = leaveYYYY+'-'+leaveMM+'-'+leaveDD;
      leaving.setAttribute("min", minleaveDate);
    }
   
</script>
</body>
</html>