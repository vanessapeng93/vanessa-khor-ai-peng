<html>
<meta charset="utf-8">
	<title>Basic HTML File</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<style>
*{
  padding: 0;
  margin: 0;
}

.wrap {
  margin: 40px auto;
}

input {
  display: none;
}

.drop-down-button {
  border-radius: 5px;
  background-color: #26a69a;
  padding: 20px; 
  color: #fff;
  border: 1px solid #444;
  margin: 0 20px;
  padding: 20px 38px;
  font-size: 14px;
  cursor: pointer;
}

.dropdown li {
  list-style: none;
  width: 120px;
  padding: 10px;
  
}
.dropdown  {
  border: 1px solid #444;
  width: 140px;
  margin: 0 20px;
  display: none;
  position: absolute;
  top: 24px;
  left: 0; 
  z-index: 999;
  background-color: #fff;
}

.dropdown a {
  text-decoration: none;
  color: #26a69a;
}

.divider {
  border-bottom: 1px solid #444;
}

.wrap input:checked ~ label .dropdown {
  display: block;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic);

*{margin: 0px; padding: 0px}



h1, button{
  color:#fff;
  text-align: center;
  padding: 20px;
}







.sub-main{
  width: 30%;
  margin:22px;
  float: left;
}

.button-one, .button-two, .button-three{
  text-align: center;
  cursor: pointer;
  font-size:24px;
  margin: 0 0 0 100px;
}



/*Button One*/

.button-two {
  border-radius: 4px;
  background-color:#d35400;
  border: none;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
}


.button-two span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button-two span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button-two:hover span {
  padding-right: 25px;
}

.button-two:hover span:after {
  opacity: 1;
  right: 0;
}
@import url(https://fonts.googleapis.com/css?family=Audiowide);
@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700);

* {
  margin: 0;
  padding: 0;
}

body {
  background:#222;
  font-family: 'Audiowide', Helvetica;
  line-height: 26px;
  color:#94FFB8;
  text-shadow: 0 0 0.4em #2DE0DD;
  padding:15px;
}

.bar{
  background: #2DE0DD;
  box-shadow: 0px 0px 0 #2DE0DD,
    0px 0px 4px #2DE0DD,
    0px 0px 8px #2DE0DD,
    0px 0px 16px #FFF;
  border-radius: 4px;
  position: absolute;
}
.left{
  width: 2px;
  -webkit-animation: left 10s linear infinite;
  -moz-animation: left 10s linear infinite;
}
@-webkit-keyframes left{
  0%  {height: 0; top: 100%; left: 0;}
  20% {height: 100%; top: 0; left: 0;}
  40% {height: 0; top: 0; left: 0;}
}
@-moz-keyframes left{
  0%  {height: 0; top: 100%; left: 0;}
  20% {height: 100%; top: 0; left: 0;}
  40% {height: 0; top: 0; left: 0;}
}
.top{
  height: 2px;
  -webkit-animation: top 10s linear infinite;
  -moz-animation: top 10s linear infinite;
}
@-webkit-keyframes top{
  0%  {width: 0; top: 0; left: 0;}
  20% {width: 0; top: 0; left: 0;}
  40% {width: 100%; top: 0; left: 0;}
  60% {width: 0; top:0; left: 100%;}
}
@-moz-keyframes top{
  0%  {width: 0; top: 0; left: 0;}
  20% {width: 0; top: 0; left: 0;}
  40% {width: 100%; top: 0; left: 0;}
  60% {width: 0; top:0; left: 100%;}
}
.right{
  width: 2px;
  -webkit-animation: right 5s linear infinite;
  -moz-animation: right 5s linear infinite;
}
@-webkit-keyframes right{
  0%  {height: 0; top: 0; left: 100%;}
  40% {height: 0; top: 0; left: 100%;}
  60% {height: 100%; top: 0; left: 100%;}
  80% {height: 0; top: 100%;left: 100%;}
}
@-moz-keyframes right{
  0%  {height: 0; top: 0; left: 100%;}
  40% {height: 0; top: 0; left: 100%;}
  60% {height: 100%; top: 0; left: 100%;}
  80% {height: 0; top: 100%;left: 100%;}
}
.bottom{
  height: 2px;
  -webkit-animation: bottom 5s linear infinite;
  -moz-animation: bottom 5s linear infinite;
}
@-webkit-keyframes bottom{
  0%  {width: 0; top: 100%; left: 100%;}
  60% {width: 0; top: 100%; left: 100%;}
  80% {width: 100%; top:100%; left: 0px;}
  100% {width: 0px; top:100%; left: 0px;}
}
@-moz-keyframes bottom{
  0%  {width: 0; top: 100%; left: 100%;}
  60% {width: 0; top: 100%; left: 100%;}
  80% {width: 100%; top:100%; left: 0px;}
  100% {width: 0px; top:100%; left: 0px;}
}

.cs{
  font-family: 'Audiowide', Helvetica;
  font-size: 3em;
  line-height: 26px;
  color:#2DE0DD;
  text-shadow: 0 0 0.4em #2DE0DD;
  padding-bottom:10px;
  padding-left:25px;
  margin-top:50px;
  margin-left:20%;
  margin-right: 20%;
  position:relative;
  z-index:4;
  border-bottom:3px dotted #E6E6E6;
  border-left:25px solid #E6E6E6;
  opacity:.9;
  //display:none;
}

@-webkit-keyframes blink{
  0%  {border-left:25px solid #E6E6E6;}
  50% {border-left:25px solid #222;}
  100% {border-left:25px solid #E6E6E6;}
}
@-moz-keyframes blink{
  0%  {border-left:25px solid #E6E6E6;}
  50% {border-left:25px solid #222;}
  100% {border-left:25px solid #E6E6E6;}
}

.cs:hover{
  opacity:1;
  text-shadow: 0 0 .6em #2DE0DD;
  -webkit-animation: blink 1s ease infinite;
  -moz-animation: blink 1s ease infinite;
}

p{
  color:#2DE0DD;
}

.circle.cir{
  position:absolute;
  left:13%;
  height:75px;
  width:75px;
  border-radius: 75px;
  -moz-border-radius: 75px;
  -webkit-border-radius: 75px;
  background:#2DE0DD;
  z-index:4;
  box-shadow: 0px 0px 15px #2DE0DD;
}

.c{
  position:relative; 
  color:#222;
  font-size:3em;
  line-height: 27px;
  left:17px;
  top:25px;
  text-shadow: 0 0 0.4em #222;
}

.wrapper {
  width: 70%;
  padding: 1%;
  margin: 2% auto;
  border:1px solid #2DE0DD; 
  border-radius:5px;
  box-shadow: 0px 0px 15px #447B82;
  position:relative;
  z-index:2;
  background: rgba(60,115,114,.6);
  opacity:.9;
  display: none;
  min-height: 500px;
}

.galleryItem {
  float: left;
  width: 32%;
  height: 32%;
  margin-top: 2%;
  margin-right: 1%;
  overflow: hidden;
  cursor: pointer;
  //background:#200;
}

.image {
  width: 95%;
  height:300px;
  color: rgba(0, 0, 0, 0.2);
  background-repeat:no-repeat;
}

.image img{
  width:110%;
  min-height:100%;
  min-width:100%;
  position:relative;
  left:-40px;
  top:0px;
  opacity: 0.2;
}

.galleryOverlay {
  position: absolute;
  width: 25%;
  height: 20px;
  padding: 10px;
  margin-top: -45px;
  color: #666;
  overflow: hidden;
  z-index: 10;
  //background:rgba(250, 250, 250, 0.4);
}


.itemTitle {
  display: block;
  height: 40px;
  font-size: 22px;
  line-height: 30px;
  font-family: 'Lato', sans-serif;
  font-weight:100;
  color: #FFF;
  text-shadow: 0 0 0.4em #FFF;
}

.clear {
  clear: both;
}

.circle.one {
border: 15px solid;
top: -27px;
left: -27px;
position: absolute;
border-color: rgba(200,200,255,0.3) rgba(200,200,255,0.3) rgba(0,0,0,0) rgba(0,0,0,0);
border-radius: 50%;
margin: 0px;
height: 100px;
width: 100px;
z-index:-1;
  
 animation: move 10s ease infinite;
-moz-animation: move 10s ease infinite;
-webkit-animation: move 10s ease infinite;
-o-animation: move 10s ease infinite;
}

.circle.two {
border: 3px dotted;
padding: 0px;
margin: 0px;
border-color: rgba(68,123,130,0.7) rgba(0,0,0,0);
border-radius: 50%;
top: -66px;
left: -40px;
height: 150px;
width: 150px;
position:relative;  
  
animation: move 15s ease infinite;
-moz-animation: move 15s ease infinite;
-webkit-animation: move 15s ease infinite;
-o-animation: move 15s ease infinite;
}


.circle.three {
color: #000;
border: 25px solid;
padding: 0px;
margin: 10px;
position: absolute;
z-index:-1;
border-color: rgba(255,255,255,0.7) rgba(0,0,0,0) rgba(0,0,0,0) rgba(0,0,0,0);
border-radius: 50%;
top: -6px;
left: -6px;
height: 90px;
width: 90px;
animation: move 25s ease infinite;
-moz-animation: move 25s ease infinite;
-webkit-animation: move 25s ease infinite;
-o-animation: move 25s ease infinite;
}
 
@keyframes move
{
0%   {transform: rotate(0deg);}
50%{transform: rotate(200deg);}
100% {transform: rotate(0deg);}
}

@-webkit-keyframes move 
{
0%   {-webkit-transform: rotate(0deg); -webkit-transform-origin: center;}
50%{-webkit-transform: rotate(200deg); -webkit-transform-origin: center;}
100% {-webkit-transform: rotate(0deg); -webkit-transform-origin: center;}
}

@-moz-keyframes move 
{
0%   { -moz-transform: rotate(0deg);}
50%{ -moz-transform: rotate(200deg);}
100% { -moz-transform: rotate(0deg);}
}

@-o-keyframes move
{
0%   {-o-transform: rotate(0deg);}
50%{-o-transform: rotate(200deg);}
100% {-o-transform: rotate(0deg);}
}

/*menu stuff*/

.menu{
  margin:0 auto;
  padding:20px;
  margin-top:25px;
  display:none;
  width:20%;
  height:20px;
  text-align:center;
  background:#3C7372;
  border-radius:4px;
  border:1px solid #2DE0DD;
  font-family: 'Lato', Helvetica;
  font-weight: 300;
  position:relative;
  color:#FFFFFF;
  z-index:3;
  opacity:.7;
  min-width:450px;
}
.menu:hover{
  text-shadow: 0 0 1em #FFF;
  color:#FFF;
}

#navButton {
  cursor:pointer;
  position:relative;
  display:block;
  margin:0 auto;
  margin-top:10px;
  width:130px;
  height:30px;
  color:#222;
  border-left:1px solid #FFF;
  border-top:1px solid #2DE0DD;
  box-shadow-left: 0px 0px 10px #404040;
  //background: #162020;
  border-radius:5px;
  text-align:center;
  margin-top:25px;
  //margin-bottom:25px;
  padding-top:5px;
  padding-left:3px;
  padding-right:3px;
  font-family: 'Lato', Helvetica;
  font-size: 25px;
  font-weight: 400;
  z-index:1;
}

#navButton:hover{
  text-shadow: 0 0 1em #FFF;
  color:#FFF;
}

a:link {
  text-decoration:none;
  color: #FFFFFF;
}
a:visited {text-decoration:none; color: #FFFFFF;}



</style>
<?php

	include("connect.php");
    include("functions.php");
	
	
	if(logged_in())
	{
		
	?>
		<div class="wrap">
  <input type="checkbox" id="drop-down">
  <label for="drop-down" class="drop-down-button" >Settings</label>

    <label for="drop-down" >
    <ul class='dropdown'>
    <li><a href="changepassword.php">Change Password</a></li>
    <li><a href="logout.php">Log Out</a></li>
    
    </ul>
    </label>
    </div>
		
		<?php
		
	}
	else
	{
		header("location:login.php");
		exit();
	
	}
?>


<body>

<?php if($_SESSION['role'] == "admin"):?>
 <p>
        <a href="http://localhost/Login/dunno/main1.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Admin 
        </a>
      </p> 
 <?php endif ;?>
 
 <div class="menu">
  <a href="dunno/index.php">Menu</a> 
 </div>

<p id="wrap">
  <div id="navButton" class="closed">- Menu -
  <div class="bar left"></div>
  <div class="bar top"></div>
  <div class="bar right"></div>
  <div class="bar bottom"></div>
</div>
</p>

<h1 class="cs">Computer Science</h1>

<div class="circle cir"><p class="c">C</p>
<div class="circle one"></div>
<div class="circle two">
    <div class="circle three">
</div>
</div>
</div>

<div class="wrapper">
  <div class="bar left"></div>
  <div class="bar top"></div>
  <div class="bar right"></div>
  <div class="bar bottom"></div>
  <div class="galleryItem">
    <div class="image"><img src="http://www.nandnor.net/img/platformer/overall.png"></img></div>
    <div class="galleryOverlay">
      <h2 class="itemTitle">Ridiculous: Platformer</h2>
      <p class="">>> "The most Ridiculous game in the world was created in unity with models imported from unity. All art was orginal and created in Illustrator</p>
    </div>
  </div>
  <div class="galleryItem">
    <div class="image">
      <img src="http://www.kanersan.com/images/Connect4.JPG">
    </div>
    <div class="galleryOverlay">
      <h2 class="itemTitle">Connect Four: AI</h2>
      <p class="">>> Created Connect Four game in C++. Could be played against programed AI or against another player</p>
    </div>
  </div>
  <div class="galleryItem">
    <div class="image"> 
      <img src="http://www.keithcully.com/images/FPS2.PNG">
    </div>
    <div class="galleryOverlay">
      <h2 class="itemTitle">PokeShooter: FPS</h2>
      <p class="">>> First person shooter created in C++ using GLUT to create the maze like levels and pokemon. All art and models were original</p>
    </div>
  </div>
  <div class="galleryItem">
    <div class="image">
      <img src="http://www.arcade-museum.com/images/118/118124214343.png">
    </div>
    <div class="galleryOverlay">
      <h2 class="itemTitle">Pac People: Strategy</h2>
      <p class="">>> Turn Based Startegy game based on Pacman. Created in C++ with graphics using GLUT. Could be played PvP or against computers</p>
    </div>
  </div>
  <div class="clear"></div>
</div>
 
 
</body>
<script>

$(document).ready(function(){ 
    $('.wrapper').slideDown('slow'); 
    $('#navButton').click(function(){
        $('.menu').slideToggle('slow');
      togglemenu();
    });
});

function togglemenu() {
var div = document.getElementById("navButton");
  
if (div.className == "closed") {open();}
else{close();}
}

function open() {
document.getElementById("navButton").innerHTML="- Close -   <div class=\"bar left\"></div><div class=\"bar top\"></div><div class=\"bar right\"></div><div class=\"bar bottom\"></div>";
document.getElementById("navButton").className = "open";
}

function close() {
document.getElementById("navButton").innerHTML="- Menu - <div class=\"bar left\"></div><div class=\"bar top\"></div><div class=\"bar right\"></div><div class=\"bar bottom\"></div>";
document.getElementById("navButton").className="closed";
}

//gallery stuff

$(".galleryItem").mouseenter(function() {
  var thisoverlay = $(this).find('.galleryOverlay');
  
  thisoverlay.stop(true, true).animate({
    height: '200',
    marginTop: '-230px'
  });
});

$(".galleryItem").mouseleave(function() {
  var thisoverlay = $(this).find('.galleryOverlay');
  
  thisoverlay.stop(true, true).animate({
    height: '20',
    marginTop: '-45px'
  });
});
</script>
</html>


