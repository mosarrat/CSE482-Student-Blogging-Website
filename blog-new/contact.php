<?php include('path.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Front awesome link-->
    <script
      src="https://kit.fontawesome.com/4e17d14c86.js"
      crossorigin="anonymous"
    ></script>
    <!--Google fonts link-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Trirong"
    />
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>NSU Blogs</title>
  </head>
  <body>

  <!--header connection-->
  <?php include(ROOT_PATH. "/app/include/header.php")?>
  
    <div class="message-form">
      <div class="input-field">
        <h2>Contact Us</h2>

        <input type="text" class="field" placeholder="Your Name" />
        <input type="email" class="field" placeholder="Your Email" />
        <input type="text" class="field" placeholder="Your Phone" />
      </div>
      <div class="message">
        <textarea placeholder=" Message"></textarea>
        <div class="btn">Send</div>
      </div>
    </div>

    <!--footer connection-->
    <?php include(ROOT_PATH. "/app/include/footer.php")?>
    
    <!--Jquary-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!--Slick corsousel-->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <!--custom scrip-->
    <script src="assets/js/scripts.js"></script>
  </body>
</html>
