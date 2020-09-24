<?php include $_SERVER['DOCUMENT_ROOT']."/elements/header.php"; ?>
</section>
<!-- end int-hero -->
<section class="content">
<div class="contact">
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 wow fadeInUp">
      <div class="titles">
        <h5>Say Hello</h5>
        <h2>Contact Us</h2>
        <p>We’d love to hear from you. Drop us a line and we’ll get back to you as soon as possible.</p>
      </div>
      <!-- end titles --> 
    </div>
    <!-- end col-12 -->
    <div class="col-md-6 col-sm-6 col-12 wow fadeIn">
      <div class="address">
      <h4>KIEV OFFICE</h4>
      <p>+ (0)520 111 5000<br>
        <a href="#">kiev-ua@anchor.ua</a><br>
        228 Cardigan Road, Leeds, LS6 1FN </p>
      <a data-fancybox="" data-src="#map" href="javascript:;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M12 22.31l-6.38-8.2A7.7 7.7 0 0 1 11.7 1.69h.6a7.7 7.7 0 0 1 6.08 12.42zm-.3-18.62A5.7 5.7 0 0 0 6 9.39a5.77 5.77 0 0 0 1.2 3.5l4.8 6.17 4.8-6.17a5.77 5.77 0 0 0 1.2-3.5 5.7 5.7 0 0 0-5.7-5.7z"></path>
        <circle cx="12" cy="9.69" r="2"></circle>
      </svg>
      GOOGLE MAPS</a>
      </div>
      <!-- end address -->
    </div>
    <!-- end col-3 -->
    <div class="col-md-6 col-sm-6 col-12 wow fadeIn">
       <div class="address">
      <h4>MOSCOW OFFICE</h4>
      <p>+ (0)330 111 5200<br>
        <a href="#">moscow-ru@anchor.ru</a><br>
        228 Cardigan Road, Leeds, LS6 1FN<br>
      </p>
      <a data-fancybox="" data-src="#map" href="javascript:;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M12 22.31l-6.38-8.2A7.7 7.7 0 0 1 11.7 1.69h.6a7.7 7.7 0 0 1 6.08 12.42zm-.3-18.62A5.7 5.7 0 0 0 6 9.39a5.77 5.77 0 0 0 1.2 3.5l4.8 6.17 4.8-6.17a5.77 5.77 0 0 0 1.2-3.5 5.7 5.7 0 0 0-5.7-5.7z"></path>
        <circle cx="12" cy="9.69" r="2"></circle>
      </svg>
      GOOGLE MAPS</a>
     </div>
      <!-- end address -->
    </div>
    <!-- end col-3 --> 
  </div>
  <!-- end row -->
  <div class="row justify-content-md-center">
    <div class="col-md-8 col-sm-12 col-12 wow fadeIn">
      <form class="row inner" id="contact" name="contact" method="post">
        <div class="form-group col-sm-6 col-12">
          <label><span>Your name</span></label>
          <input type="text" name="name" id="name" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Your surname</span></label>
          <input type="text" name="surname" id="surname" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Your e-mail</span></label>
          <input type="text" name="email" id="email" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Subject</span></label>
          <input type="text" name="subject" id="subject" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12">
          <label><span>Your message</span></label>
          <textarea name="message" id="message" required></textarea>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12 text-center">
          <button id="submit" type="submit" name="submit">SUBMIT</button>
        </div>
        <!-- end form-group -->
      </form>
      <!-- end form --> 
    </div>
    <!-- end col-8 -->
    <div class="col-md-8 col-sm-12 col-12">
        <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error --> 
      </div>
      <!-- end col-8 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="map" id="map"></div>
  <!-- end map --> 
</div>
<!-- end contact -->
</section>
<!-- end content -->
<?php include $_SERVER['DOCUMENT_ROOT']."/elements/footer.php"; ?>
