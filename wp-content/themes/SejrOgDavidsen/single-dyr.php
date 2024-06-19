<?php get_header();
// kører the loop for at tjekke om der er enkelte posts
while (have_posts()) {
 the_post();
?>

 <body>
  <!-- bruger echo site_url for at indsætte det slug, der skal puttes baseret i url -->
  <a href="<?php echo site_url('/adoption') ?>"><i class="fa-solid fa-arrow-left fa-2xl ITagIcons backArrow buttonHoverWhole"></i></a>
  <section id="intro" class="grid-System">
   <div id="intro-Img"> <?php the_post_thumbnail('dyrProfileImage'); ?></div>
   <h1 class="intro-Text"> <?php the_field('dyrets_navn'); ?> </h1>
   <h2 class="intro-Text">Alder:</h2>
   <h2 class="intro-Svar"> <?php the_field('dyrets_alder'); ?> <?php the_field('maneder_eller_ar'); ?> </h2>
   <h2 class="intro-Text">Race:</h2>
   <h2 class="intro-Svar"> <?php the_field('dyrets_race'); ?> </h2>
   <h2 class="intro-Text">Chipped:</h2>
   <h2 class="intro-Svar"> <?php the_field('chipped'); ?></h2>
   <h2 class="intro-Text">Steriliseret:</h2>
   <h2 class="intro-Svar"><?php the_field('steriliseret'); ?></h2>

   <?php
   if (get_field('dyrets_kon') == 'Hankøn') {
    // Hvis if statement er true, skal den echo nedenstående html kode som laver et han symbol
    echo ' <i class="fa-solid fa-2xl fa-mars intro-Text introTextGender"></i>';
   } else {
    // Hvis if statement er false, skal den echo nedenstående html kode som laver et hun symbol
    echo '<i class="fa-solid fa-2xl fa-venus intro-Text introTextGender"></i>';
   }
   ?>
  </section>

  <section class="grid-System" id="background">
   <h1 class="background-Title">Baggrund</h1>
   <p class="background-text">
    <?php the_field('dyrets_baggrund'); ?>
   </p>
   <h1 class="background-Title" id="background-padding">Personlighed</h1>
   <p class="background-text">
    <?php the_field('dyrets_personlighed'); ?>
   </p>
  </section>

  <section id="gallery" class="grid-System">
   <!-- Definere en række variabler der hver holder værdien for billedet, samt en variable der holder værdien for størrelsen på billedet -->
   <?php
   $galleri_midterste_billede = get_field('galleri_midterste_billede');
   $galleri_top_venstre = get_field('galleri_top_venstre');
   $galleri_top_hojre = get_field('galleri_top_hojre');
   $galleri_bund_venstre = get_field('galleri_bund_venstre');
   $galleri_bund_hojre = get_field('galleri_bund_hojre');

   $sizeMiddle = 'dyrGalleryMiddleImage';
   $sizeSides = 'dyrGalleriSideImage';
   ?>
   <!-- bruger wp_get_attachement_image til at printe variablen der holder billedet i den korrekte størrelse -->
   <div id="gallery-Pos1"> <?php echo wp_get_attachment_image($galleri_top_venstre, $sizeSides); ?> </div>
   <div id="gallery-Pos2"> <?php echo wp_get_attachment_image($galleri_top_hojre, $sizeSides); ?> </div>
   <div id="gallery-Pos3"> <?php echo wp_get_attachment_image($galleri_midterste_billede, $sizeMiddle); ?> </div>
   <div id="gallery-Pos4"> <?php echo wp_get_attachment_image($galleri_bund_venstre, $sizeSides); ?> </div>
   <div id="gallery-Pos5"> <?php echo wp_get_attachment_image($galleri_bund_hojre, $sizeSides); ?> </div>
  </section>


  <section id="adoption-Process" class="grid-System">
   <h1 id="adoption-Process-H1">Adoptionsprocessen</h1>

   <div id="adoption-Process-pos1">
    <h1>1.</h1>
    <p>
     Dyret kommer ind fra dyreværnssager eller fra et private hjem, hvor
     dyret ikke kan være mere på grund af fx. sygdom, skilsmisse, flytning,
     manglende tid eller dødsfald
    </p>
   </div>

   <div id="adoption-Process-pos2">
    <h1>2.</h1>
    <p>
     Dyret bliver sundhedsundersøgt, kastreret eller steriliseret de vil
     også blive chipmærket, øremærket og registreret i det danske dyre
     register, samt behandlet mod lopper, orm og vaccineret
    </p>
   </div>

   <div id="adoption-Process-pos3">
    <h1>3.</h1>
    <p>
     Ring og bestil tid til at besøge vores dyr, det er ikke alttid at alle
     dyr er blevet lagt op på hjemsiden så du behøver ikke at have bestem
     dig inden du kommer og ser på dem
    </p>
   </div>

   <div id="adoption-Process-pos4">
    <h1>4.</h1>
    <p>
     I mens du besøger so tage en snak med personalet om behov og
     forventninger omkring dyret du ønsker
    </p>
   </div>

   <div id="adoption-Process-pos5">
    <h1>5.</h1>
    <p>
     Hvis du finder et passende dyr under besøget, og vores personale også
     mener at det er et godt match kan du som regel få dyret med hjem men
     besøgt er altid uforpligtende fra begge parter
    </p>
   </div>

   <div id="adoption-Process-pos6">
    <h1>6.</h1>
    <p>
     Som hovedregel skal dyret have tid til at lande i sit nye hjem, selv
     hvis det skal gå ude dyr, skal det først opholde sig indendørs i
     længere tid for at sikre, at det kan find hjem igen. personalet
     vejleder gerne om processen
    </p>
   </div>
  </section>


 <?php
}

get_footer();
 ?>