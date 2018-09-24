<!DOCTYPE html>
<html>

<?php include 'header.php'; ?>

<body>
	
	<!-- start navigation -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">  Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
        </ul>
      </div>
    </nav>

        <!-- Page header -->

<div id="page-header">
 <header class="header">
      <div class="header-container container-fluid">
      	<div class="row">
      	  <div class="col sm-12 text-center">
      	  	<div class="header-content">
        <h1>Awesome Design</h1>
        <h4>Simple One Page Design</h4> 
            </div>
          </div>
        </div>
      </div>
    </header>
</div>

<!-- section 1 -->
<section id="intro">
   <div class="flex-container">
  <div class="row">
    <div class="col sm-4">
      <img src="https://www.free-css.com/assets/files/free-css-templates/preview/page196/conquer/assets/img/1-1.jpg">
      <h3 class="col-content" style="color:green">Responsive Designs</h3>
      <p>responsive design provide more positive user experience and prevent content conflicts on web page</p>
      <button type="button" class="btn0 btn-primary ">Read More</button>
    </div>
    <div class="col sm-4">
      <img src="https://www.free-css.com/assets/files/free-css-templates/preview/page196/conquer/assets/img/1-2.jpg">
      <h3 class="col-content" style="color:blue">Bootstrap</h3>
      <p>bootstrap is a fantastic framework that contains a huge library of responsive designs
        that makes designing more easy and interface more applicable</p>
        <button type="button" class="btn1 btn-primary">Read More</button>
    </div>
    <div class="col sm-4">
      <img src="https://www.free-css.com/assets/files/free-css-templates/preview/page196/conquer/assets/img/1-3.jpg">
      <h3 class="col-content">Parallax Layout</h3>
      <p> Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text </p>
      <button type="button" class="btn2 btn-primary">Read More</button>
    </div>
  </div>
</div>
  </section>

<!-- start section 2 -->

<section id="services">
	<div class="flex-container">
	   <div class="row">
	   	<div class="col sm-6">
	   		<img src="https://www.free-css.com/assets/files/free-css-templates/preview/page196/conquer/assets/img/2-1.jpg">
	   		<h3 class="col-content">Left side column</h3>
	   		<p>Some text Some text Some text Some text Some text<br> Some text Some text Some text Some text Some text<br> Some text
	   		Some text Some text Some text Some text<br> Some text Some text</p>
	   		<button type="button" class="btn3 btn-primary">Read More</button>
	   	</div>
	   	<div class="col sm-6">
	   		<img src="https://www.free-css.com/assets/files/free-css-templates/preview/page196/conquer/assets/img/2-2.jpg">
	   		<h3 class="col-content">Right side column</h3>
	   		<p>Some text Some text Some text Some text Some text<br> Some text Some text Some text Some text Some text<br> Some text
	   		Some text Some text Some text Some text<br> Some text Some text</p>
	   		<button type="button" class="btn4 btn-primary ">Read More</button>
	   	</div>
	  </div>
	</div>
</section>

<!-- end sextion 2 -->

<section id="About">
	<div class="container-fluid text-center">
	  <div class="row">
		<div class="col sm-12">
			<h1>About Creator</h1>
			<h5>this template build with own hands of the designer AS</h5>
		</div>
	  </div>
   </div>
</section>

<script>
	
$(document).ready(function(){
	$("button").mouseenter(function(){
		$("button").css("color,gray");
	});
});


</script>

<?php include 'footer.php';?>
</html>