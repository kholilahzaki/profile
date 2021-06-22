<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
  <link rel="shortcut icon" href="snowman.ico"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>

  <link href='https://fonts.googleapis.com/css?family=Zeyada' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Unica One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Delius Unicase' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Marck Script' rel='stylesheet'>

<style>
* {
  box-sizing: border-box;
}

body {
  padding: 50px;
  background: #fdef82;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  font-family: 'Satisfy' ;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #69e0a5, 0 0 40px #69e0a5, 0 0 50px #69e0a5, 0 0 60px #69e0a5, 0 0 70px #69e0a5;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #a8edcb, 0 0 40px #a8edcb, 0 0 50px #a8edcb, 0 0 60px #a8edcb, 0 0 70px #a8edcb, 0 0 80px #a8edcb;
  }
}


/* Left column */
.leftcolumn {   
  float: left;
  width: 25%;
}

.lefthalf{
  float: left;
  width: 50%;
}

.righthalf{
  float: left;
  width: 50%;
}

.fiquart{
    float: left;
    width: 25%;
}

.squart{
    float: left;
    width: 25%;
}

.tquart{
    float: left;
    width: 25%;
}

.foquart{
    float: left;
    width: 25%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 75%;
  padding-left: 20px;
}

.foto {
  width: 100%;
  padding: 20px;
}

/* Add a card effect for each collumn */
.card {
  background-color: #ffffd1;
  padding-bottom: 20px;
  font-family:'Unica One'; 
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#smalltext{
  font-family: 'Architects Daughter';
  word-spacing: 10px;
  color: black;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

</style>
</head>

<body>

<div class="glow">
  <h1 style="font-size: 50px;">Lila's Profile</h1>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
        <center><h3 style="color: #fff; background-color: #93e9be;">Picture of Me</h3></center>
            <div class="foto">
              <center>
                <img src="https://2.bp.blogspot.com/-o7kON6I-ISk/Xur80nf19WI/AAAAAAAAALA/4M4lUdfNnXgQ6vcoIY2e5aXYDyCzkm5FACLcBGAsYHQ/s320/foto-lila.jpeg" 
              style="width: 210px height: 70px;"></center>
            </div>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <center><h3 style="color: #fff; background-color: #93e9be;">Life Motto</h3></center>
      <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">It's okay to fail, you've tried your best, life goes on, let's move on. Sh*t happens anyway.</p></center>
    </div>
 
        <div class="row">
            <div class="lefthalf">
                <div class="card">
                    <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">Name</h3></center>
                    <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Kholilah Zaki Lismia</p></center>
                </div>
            </div>

            <div class="righthalf">
                <div class="card">
                    <center><h3 style="color: aliceblue; background-color: #93e9be; padding-top: 0px;">Date of Birth</h3></center>
                    <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Pati, 31 January 2000</p></center>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="lefthalf">
                <div class="card">
                    <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">Height</h3></center>
                    <center><p id="smalltext" style="font-size: 17px; padding-top: 25px; padding-bottom: 6px;">169 cm</p></center>
                </div>
            </div>

            <div class="righthalf">
                <div class="card">
                    <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">Blood Type</h3></center>
                    <center><p id="smalltext" style="font-size: 17px; padding-top: 25px; padding-bottom: 6px;">O+</p></center>
                </div>
            </div>
        </div>
  </div>
</div>

<div class="row">
    <div class="fiquart">
        <div class="card">
            <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">MBTI</h3></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">INFP</p></center>
        </div>
    </div>
    
    <div class="squart">
        <div class="card">
            <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">Zodiac</h3></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Aquarius</p></center>
        </div>
    </div>

    <div class="tquart">
        <div class="card">
            <center><h3 style="color: aliceblue; background-color: #93e9be; padding-top: 0px;">Hobby</h3></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Singing, fangirling</p></center>
        </div>
    </div>

    <div class="foquart">
        <div class="card">
            <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">Speciality</h3></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Eating, speak of devil</p></center>
        </div>
    </div>
</div>

<div class="row">
    <div class="lefthalf">
        <div class="card">
            <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">Likes</h3></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Food</p></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">BTS</p></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">DAY6</p></center>
        </div>
    </div>

    <div class="righthalf">
        <div class="card">
            <center><h3 style="color: #fff; background-color: #93e9be; padding-top: 0px;">Dislikes</h3></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Workout</p></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">BUGS!</p></center>
            <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">People with no respect</p></center>
        </div>
    </div>
</div>

<div class="row">
    <div class="card">
        <center><h3 style="color: aliceblue; background-color: #93e9be; padding-top: 0px;">Future Resolution</h3></center>
        <center><p id="smalltext" style="font-size: 17px; padding-top: 25px;">Successful enough till I could travel all around the world</p></center>
    </div>
</div>



</body>
</html>