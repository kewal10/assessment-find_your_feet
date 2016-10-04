<?php
  include('partial/head.php');
  include('partial/nav.php');
?>

<?php

if (isset($_POST['send_email']))  {
    
   $send_email = "example@example.com";
   $fullName = $_POST['fullname'];
   $email = $_POST['email'];
   $subject = 'Emial form find your feet';
   $content = $_POST['message'];
   $message = "A user has posted a message to your website ($email)\r\n"; 
   $message .= "-----------------------------------------------\r\n";
   $message .= $content;    

   $header = "Reply-To: $email";
    
    $headers = 'From: example@example.com' . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
   mail($send_email, $subject, $message, $headers);

   $result='<div class="alert alert-success">Thank you for contacting us! we will get back as soon as possible</div>';
 }

?>


<div class="container">
    <div class="form-group contact-us">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-5">
            <legend class="text-center">Contact Us</legend>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
          <form class="form-horizontal signupform" id="userForm" autocomplete="off" method="post" action="contact.php">
            <fieldset>

              <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-sm-12 col-md-9 col-md-offset-3">
                      <?php echo $result; ?>
                  </div>
              </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="fullname"></label>
                    <div class="col-sm-12 col-md-9 col-md-offset-3">
                        <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control input-md inputbox"> <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email"></label>
                    <div class="col-sm-12 col-md-9 col-md-offset-3">
                        <input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-md inputbox"> <span class="help-block"></span>
                    </div>
                </div>
                   <div class="form-group">
                    <label class="col-md-4 control-label" for="message"></label>
                    <div class="col-sm-12 col-md-9 col-md-offset-3">
                        <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea> <span class="help-block"></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-md-4 control-label" for="email"></label>
                    <div class="col-sm-12 col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-block" name="send_email" id="btn">Send Message</button> <span class="help-block"></span>
                    </div>
                </div>
            </fieldset>
          </form>


      </div>

      <div class="col-md-6">
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13251.376813890001!2d151.2012371366723!3d-33.867905790502164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae401e8b983f%3A0x5017d681632ccc0!2sSydney+NSW+2000!5e0!3m2!1sen!2sau!4v1472278510469" width=100% height="450" frameborder="0" style="pointer-events:none;border:0"></iframe>

        </div>
      </div>
    </div>
</div>


<?php
  include('partial/footer.php');
?>

<script>
    document.title = 'Find Your Feet | Contact Us';
</script>
