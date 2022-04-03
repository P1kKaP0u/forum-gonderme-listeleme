<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php $this->load->view("includes/header.php"); ?>

<body>

<section class="u-clearfix u-custom-color-2 u-section-1" id="carousel_55ba">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h4 class="u-text u-text-1">Şehrin En İyisi</h4>
                  <h2 class="u-text u-text-2">Taksi Rezervasyonu Yapmak İçin Lütfen Hızlı Rezervasyon Formunu Kullanın</h2>
                </div>
              </div>
              <div class="u-align-left u-black u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle">
                  <div class="u-expanded-width u-form u-form-1">
                    <form method="POST" action="<?php echo base_url("formapp/insert")?>"  class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 40px;" source="email" name="form">
                      <div class="u-form-group u-form-name">
                        <label for="name-a3f0" class="u-form-control-hidden u-label">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-a3f0" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-email u-form-group">
                        <label for="email-a3f0" class="u-form-control-hidden u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-a3f0" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-group u-form-phone u-form-group-3">
                      <label for="tel-a3f0" class="u-form-control-hidden u-label">Phone</label>
                        <input type="tel" placeholder="Enter your phone (e.g. 05438567412)" id="phone-aa19" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-group u-form-message">
                        <label for="message-a3f0" class="u-form-control-hidden u-label">Message</label>
                        <textarea placeholder="Enter your message" rows="4" cols="50" id="message-a3f0" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-submit">
                        <button type="submit" class="u-border-none u-btn u-btn-submit u-circle u-button-style u-hover-palette-2-base " >
                          <span>
                            Form Gönder
                          </span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php $this->load->view("includes/footer.php");?>

</body>
</html>
