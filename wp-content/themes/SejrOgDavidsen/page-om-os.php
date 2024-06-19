<?php get_header(); ?>
<!-- Henter banner billedet fra fil hierakiet -->
<div class="heroBanner" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/COLOURBOX608223.jpg') ?>);"> </div>

<h1 class="h1Title">Om Os</h1>
<main>
 <section id="mainAboutSection">
  <p>
   <?php the_field('om_os_tekst') ?>
  </p>
  <!-- laver en container til tidslinjen og laver en tidslinje, med indhold der er skiftevis på hver side af punkterne-->
  <section id="timelineContainer">

   <div class="content content-right">
    <p>Stiftes i 1993</p>
   </div>

   <div class="timeline-middle">
    <div class="timeline-point"></div>
   </div>

   <div class="timeline-middle">
    <div class="timeline-point"></div>
   </div>

   <div class="content">
    <p>Udvidelse i 1995</p>
   </div>

   <div class="content content-right">
    <p>Tusind dyr reddet i 1998</p>
   </div>

   <div class="timeline-middle">
    <div class="timeline-point"></div>
   </div>

   <div class="timeline-middle">
    <div class="timeline-point"></div>
   </div>

   <div class="content">
    <p>Tilføjelse af pensionat i 2002</p>
   </div>

   <div class="content conte content-right">
    <p>Dyrebeskyttelse pris i 2009</p>
   </div>

   <div class="timeline-middle-bottom">
    <div class="timeline-point"></div>
   </div>

  </section>

 </section>
</main>

<section class="karrusel">
 <!--Karrusel start-->
 <!-- Karrusel er lavet med inspiration fra videoen: https://www.youtube.com/watch?v=0wvrlOyGlq0&embeds_referring_euri=https%3A%2F%2Fwww.codingsnow.com%2F&source_ve_path=MjM4NTE&feature=emb_title -->
 <div class="slideshow">
  <div class="slideImages">
   <!--radio buttons start, den styrer slide, MÅ IKKE SLETTES -->
   <input type="radio" name="radio-btn" id="position1" checked />
   <input type="radio" name="radio-btn" id="position2" />
   <input type="radio" name="radio-btn" id="position3" />
   <input type="radio" name="radio-btn" id="position4" />
   <input type="radio" name="radio-btn" id="position5" />
   <!--radio buttons slut-->
   <!--slide images start-->
   <div class="slideImage first">
    <img src="<?php the_field('slideshow_billede_1') ?>" />
   </div>
   <div class="slideImage">
    <img src="<?php the_field('slideshow_billede_2') ?>" />
   </div>
   <div class="slideImage">
    <img src="<?php the_field('slideshow_billede_3') ?>" />
   </div>
   <div class="slideImage">
    <img src="<?php the_field('slideshow_billede_4') ?>" />
   </div>
   <div class="slideImage">
    <img src="<?php the_field('slideshow_billede_5') ?>" />
   </div>
   <!--slide images slut-->
  </div>
 </div>
</section>

<h1 class="h1Title">Her kan du finde os</h1>
<section id="contactSec">
 <!-- laver en div med id til at indsætte indholdet fra javascript -->
 <div id="googleMap"></div>

 <section id="contactDivsH2">
  <div class="contactDiv">
   <i class="fa-solid fa-2xl fa-location-dot ITagIcons"></i>
   <a href="#">
    <p>
     <?php the_field('adresse') ?>
    </p>
   </a>
  </div>
  <div class="contactDiv">
   <i class="fa-solid fa-2xl fa-phone ITagIcons"></i>
   <a href="#">
    <p>
     <?php the_field('telefon_nummer'); ?>
    </p>
   </a>
  </div>
  <div class="contactDiv">
   <i class="fa-solid fa-2xl fa-envelope ITagIcons"></i>
   <a href="#">
    <p>
     <?php the_field('mail'); ?>
    </p>
   </a>
  </div>
 </section>
</section>

<?php get_footer(); ?>