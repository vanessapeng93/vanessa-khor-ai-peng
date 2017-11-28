<!doctype html>
<html>
<style>
	@import url(https://fonts.googleapis.com/css?family=Calligraffitti);
body{
  font-family: 'Montserrat', sans-serif;
  margin:0;
  background-image: linear-gradient(135deg, rgba(52, 152, 219,0.5) 0%,rgba(243, 65, 65, 0.4) 100%), url("http://i.imgbox.com/LmWSE419.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
  
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  align-content: center;
  flex-wrap: wrap;
  width: 80vw;
  margin: 0 auto;
  min-height: 100vh;
 


}
.btn {
  flex: 1 1 auto;
  margin: 10px;
  padding: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 10px;
 }

/* Demo Stuff End -> */

.parent {display: block;position: relative;float: left;line-height: 30px;background-color: #0f0c29;  /* fallback for old browsers */
background-color: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background-color: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;border-right:#CCC 1px solid;}
.parent a{margin: 10px;color: #36D1DC;  /* fallback for old browsers */
color: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
color: linear-gradient(to right, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;text-decoration: none;}
.parent:hover > ul {display:block;position:absolute;}
.child {display: none;}
.child li {background: #43C6AC;  /* fallback for old browsers */
background-color: -webkit-linear-gradient(to right, #191654, #43C6AC);  /* Chrome 10-25, Safari 5.1-6 */
background-color: linear-gradient(to right, #191654, #43C6AC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
.child li a{color: #000000;}
ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
ul ul ul{left: 100%;top: 0;margin-left:1px;}
li:hover {background-color: #95B4CA;}
.parent li:hover {background-color: #F0F0F0;}
.expand{font-size:12px;float:right;margin-right:5px;}


	
</style>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<div class="container" id="co">
	<ul id="menu">
	<li class="parent"><a href="adminmain.php?page=dashboard">Dashboard</a>
	</li>
	<li class="parent"><a href="#">Employee</a>
	<ul class="child">			
		<li><a href="#">Add</a></li>
		<li><a href="#">Modify</a></li>
		<li><a href="#">Delete</a></li>
	</ul>
	</li>
	<li class="parent"><a href="#">Customer</a>
	<ul class="child">			
		<li><a href="#">Add</a></li>
		<li><a href="#">Modify</a></li>
		<li><a href="#">Delete</a></li>
	</ul>
	</li>
	<li class="parent"><a href="#">Product</a>
	<ul class="child">			
		<li><a href="#">Add</a></li>
		<li><a href="#">Modify</a></li>
		<li><a href="#">Delete</a></li>
	</ul>
	</li>
	<li class="parent"><a href="#">History</a>
	<ul class="child">	
		<li><a href="#">Modify</a></li>
		<li><a href="#">Delete</a></li>
	</ul>
	</li>
	<li class="parent"><a href="#">Feedback</a>
	</li>
</ul>
<div id="content">

</div>
  <canvas id="c"></canvas>	
</div>
</body>
<script>
	
	(function() {

    var width, height, largeContainer, canvas, ctx, circles, target, animateHeader = true;

    // Main
    initHeader();
    addListeners();

    function initHeader() {
        width = window.innerWidth;
        height = window.innerHeight;
        target = {x: 0, y: height};
      
        largeContainer = document.getElementById('co');
        largeContainer.style.height = height+'px';

        canvas = document.getElementById('c');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        // create particles
        circles = [];
        for(var x = 0; x < width*0.5; x++) {
            var c = new Circle();
            circles.push(c);
        }
        animate();
    }

    // Event handling
    function addListeners() {
        window.addEventListener('scroll', scrollCheck);
        window.addEventListener('resize', resize);
    }

    function scrollCheck() {
        if(document.body.scrollTop > height) animateHeader = false;
        else animateHeader = true;
    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        largeContainer.style.height = height+'px';
        canvas.width = width;
        canvas.height = height;
    }

    function animate() {
        if(animateHeader) {
            ctx.clearRect(0,0,width,height);
            for(var i in circles) {
                circles[i].draw();
            }
        }
        requestAnimationFrame(animate);
    }

    // Canvas manipulation
    function Circle() {
        var _this = this;

        // constructor
        (function() {
            _this.pos = {};
            init();
            console.log(_this);
        })();

        function init() {
            _this.pos.x = Math.random()*width;
            _this.pos.y = height+Math.random()*100;
            _this.alpha = 0.1+Math.random()*0.3;
            _this.scale = 0.1+Math.random()*0.3;
            _this.velocity = Math.random();
        }

        this.draw = function() {
            if(_this.alpha <= 0) {
                init();
            }
            _this.pos.y -= _this.velocity;
            _this.alpha -= 0.0005;
            ctx.beginPath();
            ctx.arc(_this.pos.x, _this.pos.y, _this.scale*10, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'rgba(255,255,255,'+ _this.alpha+')';
            ctx.fill();
        };
    }

})();
</script>
</html>