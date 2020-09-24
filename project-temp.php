<?php include $_SERVER['DOCUMENT_ROOT']."/elements/header.php"; ?>
<section class="project-hero">
	<figure><img src="images/works02.jpg" alt="Image">
	<figcaption><h2>Fiverr App</h2></figcaption></figure>
</section>
<!-- end project-hero -->
<section class="content">
<div class="project-detail">
<div class="container">
	<div class="project-navbar">
  		<ul class="navbar">
  				<li><a href="#client">CLIENT</a></li>
  				<li><a href="#concept">CONCEPT</a></li>
  				<li><a href="#services">SERVICES</a></li>
  				<li><a href="#result">RESULT</a></li>
  			</ul>
			</div>
		<!-- end navbar -->
		<div class="project" id="client">
			<h2>Client</h2>
			<p class="lead">Entice Energy is a startup that aims to supply energy (starting with gas) to domestic household across the UK.</p>
			<p>So, the height and width is not fixed, and it is calculated dynamically according to the diminutions of the window.
Under that div, there is another one that has the ID header "navigation bar", the header is initially positioned relatively under div.fullscreen - however, I am trying to position it as Fixed when the top of the #header reaches the top of the browser window.

So here is what I am playing around, it toggles the Fixed style, but it does not toggle it at the right place...</p>
			<img src="images/logo-brand.png" alt="Image" class="client-logo">
			<figure>
			<img src="images/works01.jpg" alt="Image">
			</figure>
			
		</div>
		<!-- end project -->
		<div class="project" id="concept">
		<h2>Concept</h2>
			<p class="lead">Entice Energy is a startup that aims to supply energy (starting with gas) to domestic household across the UK.</p>
			<figure>
			<img src="images/detail01.jpg" alt="Image">
			</figure>
		</div>
		<!-- end project -->
		<div class="project" id="services">
		<h2>Services</h2>
			<p class="lead">Entice Energy is a startup that aims to supply energy (starting with gas) to domestic household across the UK.</p>
			<figure>
			<img src="images/detail02.jpg" alt="Image">
			</figure>
		</div>
		<!-- end project -->
		<div class="project" id="result">
		<h2>Result</h2>
			<p class="lead">Entice Energy is a startup that aims to supply energy (starting with gas) to domestic household across the UK.</p>
			<figure>
			<img src="images/detail03.jpg" alt="Image">
			</figure>
		</div>
		<!-- end project -->
		</div>
		<!-- end container -->
</div>
<!-- end project-detail -->
</section>
<!-- end content -->
<?php include $_SERVER['DOCUMENT_ROOT']."/elements/footer.php"; ?>