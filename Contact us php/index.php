<?php require 'config.php';?>
<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Contact Us Form | CodingLab</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">
      <!-- <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.4650183034314!2d72.85955927456816!3d19.218555147483062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b70f60b3439f%3A0x5d31b19ec85ab1d7!2sBlauPlug%20Innovations%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1690876793296!5m2!1sen!2sin"
          width=""
          height="300px"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div> -->
      <div class="content">
        <!-- <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.4650183034314!2d72.85955927456816!3d19.218555147483062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b70f60b3439f%3A0x5d31b19ec85ab1d7!2sBlauPlug%20Innovations%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1690876793296!5m2!1sen!2sin"
            width=""
            height="200px"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div> -->
        <!-- <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.4650183034314!2d72.85955927456816!3d19.218555147483062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b70f60b3439f%3A0x5d31b19ec85ab1d7!2sBlauPlug%20Innovations%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1690876793296!5m2!1sen!2sin" width="" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Surkhet, NP12</div>
            <div class="text-two">Birendranagar 06</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+0000 0000 0000</div>
            <div class="text-two">+0000 0000 0000</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">coding@gmail.com</div>
            <div class="text-two">info.coding@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p>
            If you have any work from me or any types of quries related to my
            tutorial, you can send me message from here. It's my pleasure to
            help you.
          </p>


          <form method="post" id="contactForm" name="contactForm" >
            <div class="input-box">
              <input name="name" type="text" placeholder="Enter your name" required/>
            </div>
            <div class="input-box">
              <input name="email" type="email" placeholder="Enter your email" required/>
            </div>

            <div class="input-box">
              <input name="phone" type="number" placeholder="Enter your Phone" required/>
            </div>


            <div class="input-box message-box">
              <textarea name="message" placeholder="Enter your message"></textarea>
            </div>
            <div class="button">

            <button class="btn btn-primary" type="submit" id="btn2" style="background-color:#13505B;color:white;border:none;letter-spacing: normal;padding:10px;" ><span class="text"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND MESSAGE</span></button>

            </div> 
          </form>

          <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

          <script>
jQuery('#contactForm').on('submit', function (e) {
    jQuery('#btn2').html('<i class="fa fa-spinner fa-spin"></i> sending....');
    jQuery('#btn2').attr('disabled', true);
    jQuery.ajax({
        url: 'contact-submit.php',
        type: 'post',
        
        data: jQuery('#contactForm').serialize(),
        success: function (result) {
            jQuery('#contactForm')[0].reset();
            jQuery('#btn2').html('Done');
            jQuery('#btn2').attr('disabled', false);
            // Display thank-you message
            alert('Thank you for submitting the form!');
        },
        error: function () {
            // Display error message
            alert('An error occurred. Please try again later.');
            jQuery('#btn2').html('Submit'); // Reset button text
            jQuery('#btn2').attr('disabled', false);
        },
    });
    e.preventDefault();
});
</script>






        </div>
      </div>
    </div>

    <!-- <script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('map'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script> -->
  </body>
</html>
