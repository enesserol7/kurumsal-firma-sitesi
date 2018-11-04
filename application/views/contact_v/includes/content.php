<?php $settings = get_settings(); ?>
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-80">
      <h2 class="section-title text-uppercase">İletişim</h2>
      <p class="section-sub"></p>
    </div>
    <div class="row">
      <div class="col-md-8">
        <form name="contact-form" id="contactForm" action="#" method="POST">
          <div class="row">
            <div class="col-md-6">
              <div class="input-field">
                <input type="text" name="name" class="validate" id="name">
                <label>İsim & Soyisim</label>
              </div>
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
              <div class="input-field">
                <label class="sr-only" for="email">E-Posta</label>
                <input id="email" type="email" name="email" class="validate" >
                <label data-error="wrong" data-success="right">E-Posta</label>
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-md-6">
              <div class="input-field">
                <input id="phone" type="tel" name="phone" class="validate" >
                <label>Telefon</label>
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
          <div class="input-field">
            <textarea name="message" id="message" class="materialize-textarea" ></textarea>
            <label>Mesaj</label>
          </div>
          <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">Gönder</button>
        </form>
      </div><!-- /.col-md-8 -->
      <div class="col-md-4 contact-info">

        <address>
          <i class="material-icons brand-color">&#xE55F;</i>
          <div class="address">
            <?php echo $settings->address; ?>
            <hr>
          </div>

          <i class="material-icons brand-color">&#xE61C;</i>
          <div class="phone">
            <p>Fax: <?php echo $settings->fax_1; ?><br>
              Phone: <?php echo $settings->phone_1; ?></p>
            </div>
            <i class="material-icons brand-color">&#xE61C;</i>
            <div class="phone">
              <?php if ($settings->fax_2 != "") { ?>
                <p>Fax 2: <?php echo $settings->fax_2; ?></p>
              <?php } ?>
              <?php if ($settings->phone_2 != "") { ?>
                <p>Phone 2: <?php echo $settings->phone_2; ?></p>
              <?php } ?>
            </div>

            <i class="material-icons brand-color">&#xE0E1;</i>
            <div class="mail">
              <p><a href="mailto:<?php echo $settings->email; ?>"><?php echo $settings->email; ?></a><br>
              </div>
            </address>

          </div><!-- /.col-md-4 -->
        </div><!-- /.row -->

      </div>

    </section>
    <!-- contact-form-section End -->
    <div class="container-fluid map">
      <div class="row">
        <div class="col-md-12">
          <iframe class="googlemaps" src="<?php echo $settings->map_code; ?>" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <!-- map-section -->

        <!-- /.map-section -->