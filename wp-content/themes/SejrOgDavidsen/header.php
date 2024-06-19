<!-- OBS -->
<!-- Alle billeder med undtagelse af billederne brugt på post type dyr, er hentet fra colourbox. Billeder på post type dyr er taget af gruppe 5 -->
<!-- Ikoner er hentet ved hjælp af Fontawesome, font er hentet gennem google -->
<!-- Der bliver gjort brug af Google API og tilhørende javascript kode, for at hente kort -->
<!-- Grundet problemer med deployment med XAMPP som lokal server, er alle filer overført til en local by flywheel lokal server.
Dette betyder at tema navnet i den deployed version er davidsenogsejr, mens tema navnet i mappen uploaded på GitHub er Sejr&Davidsen.
Koden brugt i begge versioner er identiske -->

<!DOCTYPE html>
<html lang="da">
<!-- Definerer de forskellige metadata -->

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <!-- Henter google fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

 <!-- henter fontawesome ikoner -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

 <!-- henter google maps api key -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-rv8OK9k7iXuIFP2HtPzjndMy5jPFni0&callback=initMap&libraries=&v=weekly" defer></script>


 <!-- linker til style sheet -->
 <!-- Er blevet nødt til at fjerne functions.php for at oploaded til live server -->
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">

 <!-- Linker til javascript -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>

 <!-- skal være der for at css vil virke, ved ikke om den er nødvendig uden functions.php -->
 <?php wp_head(); ?>
</head>

<body>
 <!-- nav -->
 <header class="dropShadowWhole">
  <navbar class="nav-bar textHover">
   <ul>
    <li id="logoContainer">
     <!-- angiver at der ikke skal indsættes noget efter url, og den dermed går til front-page -->
     <a href="<?php echo site_url('/') ?>">
      <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
       <path fill="currentColor" d="M226.5 92.9c14.3 42.9-.3 86.2-32.6 96.8s-70.1-15.6-84.4-58.5s.3-86.2 32.6-96.8s70.1 15.6 84.4 58.5zM100.4 198.6c18.9 32.4 14.3 70.1-10.2 84.1s-59.7-.9-78.5-33.3S-2.7 179.3 21.8 165.3s59.7 .9 78.5 33.3zM69.2 401.2C121.6 259.9 214.7 224 256 224s134.4 35.9 186.8 177.2c3.6 9.7 5.2 20.1 5.2 30.5v1.6c0 25.8-20.9 46.7-46.7 46.7c-11.5 0-22.9-1.4-34-4.2l-88-22c-15.3-3.8-31.3-3.8-46.6 0l-88 22c-11.1 2.8-22.5 4.2-34 4.2C84.9 480 64 459.1 64 433.3v-1.6c0-10.4 1.6-20.8 5.2-30.5zM421.8 282.7c-24.5-14-29.1-51.7-10.2-84.1s54-47.3 78.5-33.3s29.1 51.7 10.2 84.1s-54 47.3-78.5 33.3zM310.1 189.7c-32.3-10.6-46.9-53.9-32.6-96.8s52.1-69.1 84.4-58.5s46.9 53.9 32.6 96.8s-52.1 69.1-84.4 58.5z" />
      </svg>
      <h1>Sejr & Davidsens</h1>
     </a>
    </li>
    <!-- echo site_url angiver hvad der skal insættes efter url -->
    <!-- if statement tjekker om post type på siden er 'pensionat', hvis denne er true skal den indsætte classen current_page -->
    <li><a href="<?php echo site_url('/pensionat') ?>" <?php if (get_post_type() == 'pensionat') echo 'class="current_page"' ?>> Pensionat </a></li>
    <li><a href="<?php echo site_url('/adoption') ?>" <?php if (get_post_type() == 'dyr') echo 'class="current_page"' ?>> Adoption </a></li>
    <li><a href="">Produkter & Priser</a></li>
    <li><a href="">Forum</a></li>
    <!-- if statement tjekker om den nuværende side har slug 'om-os', hvis dette er true skal den indsætte classen current_page -->
    <li> <a href="<?php echo site_url('/om-os') ?>" <?php if (is_page('om-os')) echo 'class="current_page"' ?>>Om Os</a></li>
   </ul>
  </navbar>
 </header>