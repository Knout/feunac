<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Metas -->
    <meta charset="utf-8">

    <title>Welcome to CodeIgniter</title>

    <!-- Links -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo less_url('index'); ?>" />

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>

  </head>
  <body>

    <div id="container">
      <h1>Welcome to CodeIgniter! Master ?</h1>

      <div id="body">
        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

        <p>If you would like to edit this page you'll find it located at:</p>
        <code>application/views/welcome_message.php</code>

        <p>The corresponding controller for this page is found at:</p>
        <code>application/controllers/Welcome.php</code>

        <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
      </div>

      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>

  </body>
</html>