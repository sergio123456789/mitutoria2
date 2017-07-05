<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 3.1
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 17:37:10 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Ingresar</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>resources/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?=base_url()?>resources/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?=base_url()?>resources/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=base_url()?>resources/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?=base_url()?>resources/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=base_url()?>resources/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?=base_url()?>resources/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=base_url()?>resources/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <script>
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });

  </script>
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">

        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?=base_url()?>resources/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">INACAP</p>
          </div>
        </div>
        <form action="<?=site_url('Login_Controller/login')?>" method="post" class="login-form">
        <div class="row margin">
          <div class="input-field col s12">
            <input maxlength="10"  name="user" type="text" autofocus>
            <label for="Usuario" class="center-align">Usuario </label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input name="password" type="password">
            <label for="Contraseña  ">Contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
          <?php if (isset($error)): ?>
            <?=$error ?>
          <?php endif ?>
            <input type="submit" class="btn waves-effect waves-light col s12" velue="Entrar">
            
          </div>
          </div>
          </form>
<?php if (isset($error) ): ?>
      <div class="row section">
            <div class="col input-field col s12">
 
    <a class="waves-effect waves-light col s12 btn modal-trigger" href="#modal1">Recuperar Contraseña</a>
    
     </div>
      </div>

<?php endif ?>
      
<div id="modal1" class="modal " style="max-width: 360px; max-height:100% ">
  <div class="modal-content"  >
    <h4>Reiniciar contraseña </h4>
    
   <form action="<?=site_url('Login_Controller/Reiniciarclave')?>" method="post" class="login-form">
        <div class="row margin">
          <div class="input-field ">
            <input   name="Correo" required="required" type="text" autofocus>
            <label for="Usuario" class="center-align">Correo institucional </label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field ">
            <input maxlength="10"  name="rut" required="required" type="text" autofocus>
            <label for="Usuario" class="center-align">Rut </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12  ">
         
            <input type="submit" class="btn waves-effect waves-light col s12" velue="Entrar">
            
          </div>
          </div>
          </form>
  </div>
  <div class="modal-footer">
  </div>
</div>
    </div>

  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?=base_url()?>resources/js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?=base_url()?>resources/js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="<?=base_url()?>resources/js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?=base_url()?>resources/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?=base_url()?>resources/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?=base_url()?>resources/js/custom-script.js"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 17:37:12 GMT -->
</html>