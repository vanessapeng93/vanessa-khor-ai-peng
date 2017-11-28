<?php

	include("connect.php");
    $total = $_GET['total'];

	
	

	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>
<style>
	
.submit-button {
  margin-top: 10px;
}	

body{
	 background-color: #000000;
   padding: 0px;
   margin: 0px;
 }

#gradient
{
  width: 100%;
  height: 800px;
  padding: 0px;
  margin: 0px;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:600);


.text {
  position: absolute;
  width: 600px;
  left: 108%;
  margin-left: -225px;
  height: 40px;
  top: 11%;
  margin-top: -20px;
}

p {
  display: inline-block;
  vertical-align: top;
  margin: 0;
	font-size: 25px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
}

.word {
  position: absolute;
  width: 220px;
  opacity: 0;
	font-size: 25px;
}

.letter {
  display: inline-block;
  position: relative;
  float: left;
  transform: translateZ(25px);
  transform-origin: 50% 50% 25px;
	
}

.letter.out {
  transform: rotateX(90deg);
  transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.letter.behind {
  transform: rotateX(-90deg);
}

.letter.in {
  transform: rotateX(0deg);
  transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.wisteria {
  color: #8e44ad;
}

.belize {
  color: #2980b9;
}

.pomegranate {
  color: #c0392b;
}

.green {
  color: #16a085;
}

.midnight {
  color: #2c3e50;
}

</style>
<body>
	  <div id="gradient" />
	<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="phpprocess.php" method ="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
			  <h1>Check out</h1>
			  <div class="text">
  				<p>A great attitude becomes a</p>
  							<p>
    			<span class="word wisteria">great day.</span>
    		<span class="word belize">great month.</span>
   		 <span class="word pomegranate">great year.</span>
    	<span class="word green">great life.</span>
    	<span class="word midnight">great healthy.</span>
  	</p>
	</div>
			  <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text' name="name">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text' value="" name="card">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' value="" type='text' name="cvc">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' value="" name="month">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' value="" name="year">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'><?php echo $total?></span>
					<input   size='4' type='hidden' value="<?php echo $total?>" name="amount">
					
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit' name="submit">Pay »</button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
</body>
<script>
	
	var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
		cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
		nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 4000);


var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);
</script>
</html>