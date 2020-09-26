<?php include "./elements/header.php"; ?>
</section>
<!-- end int-hero -->
<section class="content">
<div class="contact">
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 wow fadeInUp">
      <div class="titles">
        <h2>Bize Ulaşın</h2>
      </div>
      <!-- end titles --> 
    </div>
    <!-- end col-12 -->
    <div class="col-md-6 col-sm-6 col-12 wow fadeIn">
      <div class="address">
      <h4>Ankara Ofisi</h4>
      <p><a href="tel:+905321726700">+90 532-172-6700</a>
        <br><a href="mailto:iletisim@jestmedya.com">iletisim@jestmedya.com</a>
      </p>
      </div>
      <!-- end address -->
    </div>
    <!-- end col-3 -->
    </div>
    <!-- end col-3 --> 
  </div>
  <!-- end row -->
  <div class="row justify-content-md-center">
    <div class="col-md-8 col-sm-12 col-12 wow fadeIn">
      <form class="row inner" id="contact" name="contact" method="post">
        <div class="form-group col-sm-6 col-12">
          <label><span>Adınız</span></label>
          <input type="text" name="name" id="name" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Soyadınız</span></label>
          <input type="text" name="surname" id="surname" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>E-posta Adresiniz</span></label>
          <input type="text" name="email" id="email" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Konu</span></label>
          <input type="text" name="subject" id="subject" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12">
          <label><span>Mesajınız</span></label>
          <textarea name="message" id="message" required></textarea>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12 text-center">
          <button id="submit" type="submit" name="submit">GÖNDER</button>
        </div>
        <!-- end form-group -->
      </form>
      <!-- end form --> 
    </div>
    <!-- end col-8 -->
    <div class="col-md-8 col-sm-12 col-12">
        <div id="success" class="alert alert-success" role="alert"> Mesaj başarıyla gönderildi. En kısa sürede sizinle iletişime geçeceğiz. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger" role="alert"> Bir hatayla karşılaştık. Lütfen tekrar göndermeyi deneyin. </div>
        <!-- end error --> 
      </div>
      <!-- end col-8 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
</div>
<!-- end contact -->
</section>
<!-- end content -->
<script src="js/contact.form.min.js"></script>
<?php include "./elements/footer.php"; ?>
