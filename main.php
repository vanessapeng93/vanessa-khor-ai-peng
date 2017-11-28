<?php

	include("connect.php");
	
	

	$error ="";
	

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email= $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		
		
		
		$conditions = isset($_POST['conditions']);
		
		
		
		if(strlen($name) < 3)
		{
			$error = "First name is too short";
		}
		
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error="Please enter valid email address";
		}
		
		
		else
		{
			
			$insertQuery = "INSERT INTO customer(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
			if(mysqli_query($con, $insertQuery))
			{
				$error ="Records inserted successfully!";
			}
		
			
			else
			{
				$error = "Could not able to execute ";
			}
			
		}
		/*echo $firstName."<br/>".$lastName."<br/>".$email."<br/>".$password."<br/>".$passwordConfirm."<br/>".$image."<br/>".$imageSize;*/		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Computer</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
   	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/style1.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h3 class="wow fadeInDown" data-wow-delay="0.2s">YOUR FUTURE IS CREATED BY WHAT YOU DO TODAY</h3>
				<h1 class="wow fadeInDown">COMPUTER WORLD</h1>
				<a href="login.php" class="btn btn-danger wow fadeInUp" data-wow-delay="0.6s">Sign In</a>
				<a href="index.php" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="0.6s">Sign Up</a>
			</div>

		</div>
	</div>		
</section>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-default navbar-fixed-top sticky-navigation" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Computer World</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#about" class="smoothScroll">PRODUCT</a></li>
				<li><a href="#testimonial" class="smoothScroll">DEVELOPER</a></li>
				<li><a href="#blog" class="smoothScroll">BLOG</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>

	</div>
</section>


<!-- about section
================================================== -->
<section id="about" class="paralla-section">
	<div class="container">
		<div class="row">
        
			<div class="col-md-6 col-sm-12">
				<img src="image1/laptop1.jpg" class="img-responsive" alt="about img 1">
			</div>
            
			<div class="col-md-6 col-sm-12">
				<div class="about-des">
					<h4>MSI STEALTH GS63 7RD-075 15.6" FHD Gaming Laptop Black    </h4>
					<h3>(i7-7700HQ, 8GB, 128GB+1TB, GTX1050 2GB, W10H)</h3>
					<center>Highlights</center>

					<center>Intel® Core™ i7-7700HQ processor + HM175</center>
					<center>8GB DDR4 2400</center>
    				<center>128GB SSD (NVMe M.2 SSD by PCIe Gen3 x4+1TB (SATA) 5400rpm 7mm</center>
					<center>15.6" Full HD (1920x1080),Anti-Glare IPS level panel</center>
					<center>Geforce GTX 1050, 2GB GDDR5</center>
					<center>Windows 10 Home</center>
					<center>2 Years MSI Warranty</center>

				</div>
			</div>

		</div>
        
        <div class="row">
			
			<div class="col-md-6 col-sm-12">
				<div class="about-des">
					<h4>Sharkoon VG4-W Blue Gaming PC </h4>
					<h3>( i5-7400 / H110M MOBO / 8GB RAM / GTX1060 3GB / 1TB HDD / 500W 80+ PSU )  </h3>
					<center>Gaming PC and Designer PC</center>
					<center>Intel i5 - 7400</center>
					<center>Intel H110M DDR4 Chipset Motherboard </center>
					<center>Nvidia GTX 1060 3GB DDR5 Graphic Card</center>
					<center>8GB DDR4 2400mhz RAM</center>
					<center>1TB 7200rpm Hard Disk </center>
					<center>ATX 500W 80+ Power Supply </center>
					<center>Sharkoon VG4-W Blue</center>
				</div>
			</div>
            
            <div class="col-md-6 col-sm-12">
				<img src="image1/cpu2.jpg" class="img-responsive" alt="about img 2">
			</div>

		</div>
	</div>
</section>

<!-- Testimonial section
================================================== -->
<section id="testimonial" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Service Owl Carousel section
			================================================== -->
			<div id="owl-testimonial" class="owl-carousel">

				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<img src="image1/develop1.jpg" class="img-responsive img-circle" alt="testimonial img">
							<h2>Bill Gates</h2>
							<p>Arguably one of the most popular computer programmers of all time, Bill Gates is an American business magnate, computer programmer, PC pioneer, investor, and philanthropist. He is the co-founder, ex-executive officer and current chairman of Microsoft, which is the world’s largest personal-computer software company. He is the best-known entrepreneurs of the personal computer revolution and helped develop Windows, which is the most used operating system in the world.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<img src="image1/develop2.jpg" class="img-responsive img-circle" alt="testimonial img">
							<h2>Guido van Rossum</h2>
							<p>Guido van Rossum is a Dutch computer programmer who is the author of the popular Python programming language that is wildly used today. His creation of Python lead him to being declared a “Benevolent Dictator For Life” the In the Python community which means that he continues to oversee the Python development process, making decisions where necessary, forever.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<img src="image1/develop3.jpg" class="img-responsive img-circle" alt="testimonial img">
							<h2>Linus Torvalds</h2>
							<p>Linus Benedict Torvalds s a Finnish American software engineer, who was the principal driving force behind the development of the Linux kernel. Its creation itself is attributed towards him and he later became the chief architect of the Linux kernel, and is now the project’s coordinator.</p>
						</div>
					</div>
				</div>
				
			</div>


		</div>
	</div>
</section>






<!-- blog section
================================================== -->
<section id="blog" class="paralla-section">
	<div class="container">
		<div class="row">

			<h2>OUR BLOG</h2>
			<h4>Learning new language</h4>

			<div class="blog-masonry masonry-true">

				<div class="post-masonry col-md-4 col-sm-6 wow fadeInUp">
					<div class="blog-wrapper">
						<h3><a href="#">C++</a></h3>
						<small>Has performance close to C and is used in many important projects like the Chrome Browser. C++ was an effort to make a language that was easier to build large projects with while still being fast and efficient.</small>
						<p>#include <iostream></p>

							<p>int main()</p>
							<p>{</p>
    						<center>std::cout << "Hello, world!\n";</center>
    						<center>return 0;</center>
							<p>}</p>
					</div>
				</div>
				<div class="post-masonry col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
					<div class="blog-wrapper">
						<h3><a href="#">Java</a></h3>
						<small>Something that made Java special is that it was designed so you could write code once and then allow it to run on any operation system. Java is the most popular programming language in the world. It’s used to teach students and in large companies. All Android apps are written in Java.</small>
						<p>class HelloWorldApp {</p>
						<center>public static void main(String[] args) {</center>
        				<center>System.out.println("Hello World!"); // Prints the string to the console.</center>
						<p>}</p>
						<p>}</p>
					</div>
				</div>
				<div class="post-masonry col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
					<div class="blog-wrapper">
						<h3><a href="#">PHP</a></h3>
						<small>PHP is the most popular language for building the backend of websites. It’s what Facebook and WordPress are written in. Facebook decided to create their own dialect of PHP called Hack.</small>
						<center>echo "Hello, World";</center>
					</div>
				</div>
				<div class="post-masonry col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<div class="blog-wrapper">
						<h3><a href="#">Python</a></h3>
						<small>Has a compact syntax needing far fewer lines of code than languages like Java or C++. It’s very popular and is used for websites and artificial intelligence (AI) tasks.</small>
						<center>print("Hello World")</center>
					</div>
				</div>
				<div class="post-masonry col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
					<div class="blog-wrapper">
						<h3><a href="#">Assembly language</a></h3>
						<small>This is the language that will get you the highest performing and most efficient software that is still human-readable. It’s so hard to write in that it only makes sense to use it for small parts of a programme that are performance-sensitive. You will find it in operating systems and 3D game engines.</small>
						<p>  global  _main</p>
						<p>	extern  _printf</p>

						<p>section .text</p>
						<center>_main:</center>	
    					<center>push    message</center>		
    					<center>call    _printf</center>		
    					<center>add     esp, 4</center>		
    					<center>ret</center>		
						<center>message:</center>		
    					<center>db  'Hello, World', 10, 0</center>		
					</div>
				</div>
				<div class="post-masonry col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.0s">
					<div class="blog-wrapper">
						<h3><a href="#">C</a></h3>
						<small>The most important language in the world. It’s what operating systems like Windows, MacOS, iOS, and Android are written in, as well as browsers and 3D games engines. Its syntax has influenced countless other programming languages.
						C maps closely to Assembly Language but you can write more complex programmes with it. If you need the highest performance possible without losing your mind then C is for you.
						</small>
						<p>#include <stdio.h></p>

						<p>int main(void)</p>
						<p>{</p>

    					<center>printf("hello, world\n");</center>
						<p>}</p>
					</div>
				</div>
				<div class="post-masonry col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.0s">
					<div class="blog-wrapper">
						<h3><a href="#">C#</a></h3>
						<small>Created when Microsoft built their .Net virtual machine. C# has become Microsoft premier programming language.</small>
						<p>using System;</p>

						<p>class Program</p>
						<p>{</p>	
    					<p>static void Main(string[] args)</p>	
    					<p>{</p>	
       					<center>Console.WriteLine("Hello, world!");</center>		 
    					<p>}</p>	
						<p>}</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Contact form section
			================================================== -->
			<div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay="0.6s">
				<form action="#" method="post">
					<div class="col-md-12 col-sm-12">
						<input type="text" class="form-control" placeholder="Name" name="name" id="name">
						<input type="email" class="form-control" placeholder="Email" name="email" id="email">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                        <textarea name="message" rows="8" class="form-control" id="message" placeholder="Message" message="message"></textarea>
					</div>
					<div class="col-md-6 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Send a message">
					</div>
				</form>
			</div>

			<!-- Contact detail section
			================================================== -->
			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="contact-detail">
					<h2>CONTACT US</h2>
						<div>
							<h4>Computer World</h4>
							<p>160 New Smooth Road, Georgetown, Penang,Malaysia</p>
						</div>
						<div>
							<h4>Talk to Us</h4>
							<p>Email: computerworld@gmail.com</p>
							<p>Tel: 060-488-2772 </p>
						</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<h2>Modern Town</h2>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa.</p>
				<p>Copyright &copy; 2016 Modern Town 
                
                | Design: <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
			</div>
			<div class="link-list col-md-2 col-sm-2 wow fadeInUp" data-wow-delay="0.6s">
				<h2>Company</h2>
				<a href="#about">About</a>
                <a href="#blog">Blog</a>
				<a href="#testimonial">Team</a>
				<a href="#">Career</a>
			</div>
			<div class="link-list col-md-2 col-sm-2 wow fadeInUp" data-wow-delay="0.6s">
				<h2>Support</h2>
				<a href="#contact">Email Us</a>
				<a href="#">FAQs</a>
				<a href="#">Service Terms</a>
				<a href="#">Licenses</a>
			</div>
			

		</div>
	</div>

	<div class="col-md-12 col-sm-12">
		<div class="copyright-text wow bounceIn">
			
		</div>
	</div>

</footer>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/counter.js"></script>
<script src="js/custom.js"></script>

</body>
</html>