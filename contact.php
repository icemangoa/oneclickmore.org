<!-- CONTACT -->

<section id="contact" class="dark_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="block-header">Contact form</h2>
        <p>We encourage your to get in touch with us and find out more.</p>
        <p id="social" class="text-center"> <a class="socialico-facebook" href="https://www.facebook.com/oneclickmore.org" target="_blank" title="Facebook">#</a> 
        <a class="socialico-twitter" href="#" title="Twitter">#</a> 
        <a class="socialico-google" href="https://plus.google.com/+OneclickmoreOrg/" target="_blank" title="Google">#</a>
         <a class="socialico-linkedin" href="https://www.linkedin.com/company/oneclickmore.org" title="Lindedin" target="_blank">#</a> </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-form">
          <form class="contact-form" action="index.php" method="post" id="contact_form">
            <p class="contact-form-name">
            <p id="name_error" class="error"><img src="assets/images/error.png"> Please write your name below</p>
            <input type="text" name="name" id="name" name="name" size="30" aria-required="true" class="form-control" placeholder="Your name" autocomplete="off">
            </p>
            <p class="contact-form-email">
            <p id="email_error" class="error"><img src="assets/images/error.png"> Please enter a valid email address below</p>
            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Your email" autocomplete="off" />
            </p>
            <p>
            <p id="subject_error" class="error"><img src='assets/images/error.png'> What is this in reference to?</p>
            <input type="text" name="subject" id="subject" name="subject" size="30" aria-required="true" class="form-control" placeholder="Subject" autocomplete="off">
            </p>
            <p>
            <p id="message_error" class="error"><img src="assets/images/error.png"> Forgot why you came here?</p>
            <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Your message" autocomplete="off"></textarea>
            </p>
            <p id="mail_success" class="success"><img src="assets/images/success.png"> Thank you for contacting us. We'll get back to you as soon as possible!</p>
            <p id="mail_fail" class="error"><img src="assets/images/error.png"> Something went wrong :/ Please try again later.</p>
            <p id="cf_submit_p" class="contact-form-submit text-center vertical-margin-60">
              <input type="submit" value="Send" id="send_message" name="contact_submit" class="theme_btn inverse" />
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END CONTACT -->