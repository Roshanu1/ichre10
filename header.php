<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./styles/style.css">
    <title>ICHRE 2019</title>
</head>
<body>
<nav>
    <div class="wrap">
        <div class="flex jcsb ci">
            <div class="one" >
                <div class="flex ci">
                    <i onClick="toggleSidebar();" class="fas fa-bars"></i>
                    <a href="index.php"><img class="ml-4 ichr_logo" src="images/logo.png" alt=""></a>
                    <img class="one_none visit_nepal_logo" src="images/visit_nepal.png" alt="">
                </div>
            </div>
            <div class="two">
              <a href="https://www.ku.edu.np">
                <img class="ku_logo" src="images/ku.png" alt=""></a>
            </div>
            <div class="three"><a href="hhttps://www.westernsydney.edu.au/">
                <img class="wsu_logo" src="images/wsu_logo.png" alt=""></a>
            </div>
            <div class="four">
              <a href="https://www.welcomenepal.com">
                <img  class="visit_nepal_logo" src="images/visit_nepal.png" alt=""></a>
            </div>
        </div>
    </div>
</nav>
<aside id="sidenav">
  <div style="background-color: navy;" class="sidebar" id="sideNavContents">
    <header style="background-color: yellow;"  class="pt-5">
      <div class="wrap" style="width: 70%;">
      <a href="index.php"><img style="width: 200px;" src="images/logo.png" alt=""></a>
      </div>
    </header>
    <br>
    <div class="wrap" style="width: 70%;">
    <div class="content">
      <ul>
        <li><a href="#">HomePage</a></li>
        <li><a href="regs.php">Registration</a></li>
        <li><a href="speaker.php">Speakers</a></li>
        <li><a href="abstract.php">Abstract</a></li>
        <li><a href="about.php">About Conference</a></li>
        <li><a href="prev_ichre.php">Previous ICHREs</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Organizers</a></li>
        <li><a href="ku.php">Kathmandu Universiy</a></li>
        <li><a href="ichre.php">ICHRE</a></li>
        <li><a href="#">Program</a></li>
        <li><a href="#">More</a></li>
        <li><a href="https://marriott.com/hotels/travel/ktmmc-kathmandu-marriott-hotel/">Accomodation</a></li>
        <li><a href=""></a></li>
        <li><a href="https://www.welcomenepal.com">Visit Nepal 2020</a></li>


        <li><a href="registration.php">Contact</a></li>
      </ul>
    </div>
    </div>
  </div>
  <div onClick="toggleSidebar();" class="overlay"></div>
</aside>