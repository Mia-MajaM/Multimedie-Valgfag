<?php get_header(); ?>

<!-- Henter banner billedet fra fil hierakiet -->
<div class="heroBanner" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/Pensionat-Banner.jpg') ?>);">
  <a href="#prices"><button class="btn btn_TopPensionat dropShadowWhole buttonHoverWhole">
      Book nu
    </button>
  </a>
</div>

<h1 class="pensionatHeadline">Pensionat</h1>

<section class="sectionBackground">
  <h2 class="pensionatSectionHeadline">Hvad tilbyder vi?</h2>
  <p>
    <?php the_field('hvad_tilbyder_vi'); ?>
  </p>
</section>

<section>
  <h2 class="pensionatHeadline">Dyrenes hverdag</h2>
  <div class="pensionatFlex">
    <p>
      <?php the_field('dyrenes_hverdag'); ?>
    </p>
    <!-- bruger files til at få en url der bruges til videoen, muted gør at der ikke er lyd på, autoplay og loop gør at den selv starter og kører i loop -->
    <video src="<?php the_field('pensionat_video'); ?>" id="pensionatHverdagVideo" muted autoplay loop></video>
  </div>
</section>

<section class="sectionBackground" id="prices">
  <h2 class="pensionatSectionHeadline">Priser</h2>
  <div class="prisFlex">
    <ul class="pensionatUl">
      <li class="pUppercase">Typer</li>
      <!-- Vi bruger while til at hente posts hver gang der er et post, da vi er på en archive side tjekker den alle posts -->
      <?php
      while (have_posts()) {
        the_post();
      ?>
        <!-- vi bruger custom field til at lave service informationen og the_field til at hente dataen fra de posts der bruger dette field -->
        <li><?php the_field('service'); ?></li>
      <?php
      }
      ?>
    </ul>
    <ul class="pensionatUl">
      <li class="pUppercase">Pris pr. dag</li>
      <!-- kører while igen med samme princip som ovenstående, kører den seperat for ikke at kører ovenstående html koden for hver post -->
      <?php
      while (have_posts()) {
        the_post();
      ?>
        <li> <?php the_field('pris'); ?> </li>
      <?php
      }
      ?>
    </ul>
  </div>

  <button class="btn dropShadowWhole buttonHoverWhole">Book nu</button>
</section>

<section>
  <h1 class="pensionatHeadline">Hvem er vi?</h1>
  <!-- Definere en variable der holder værdien for billedet, samt en variable der holder værdien for størrelsen på billedet -->
  <?php
  $merete_billede = get_field('merete_billede');
  $jesper_billede = get_field('jesper_billede');

  $ejerSizes = 'dyrCardImage';
  ?>

  <section class="pensionatFlex">

    <div class="pensionatCards dropShadowWhole">
      <!-- bruger wp_get_attachement_image til at printe variablen der holder billedet i den korrekte størrelse -->
      <div class="MainCardsImg"> <?php echo wp_get_attachment_image($merete_billede, $ejerSizes); ?> </div>
      <p class="pUppercase ejerCardInfo">
        <?php the_field('merete_fulde_navn'); ?>
        <i class="fa-solid fa-venus pensionatCardGender"></i>
      </p>
      <p class="ejerCardInfo"> <?php the_field('meretes_alder'); ?> år</p>
    </div>

    <div class="pensionatStaffInfo">
      <h2 class="pensionatStaffHeadline"> <?php the_field('merete_fulde_navn'); ?> </h2>
      <p class="pensionatStaffP">
        <?php the_field('meretes_intro'); ?>
      </p>
    </div>
  </section>

  <section class="pensionatFlex">
    <div class="pensionatStaffInfo">
      <h2 class="pensionatStaffHeadline"><?php the_field('jespers_fulde_navn'); ?></h2>
      <p class="pensionatStaffP">
        <?php the_field('jespers_intro'); ?>
      </p>
    </div>

    <div class="pensionatCards dropShadowWhole">
      <div class="MainCardsImg"> <?php echo wp_get_attachment_image($jesper_billede, $ejerSizes); ?> </div>
      <p class="pUppercase ejerCardInfo">
        <?php the_field('jespers_fulde_navn'); ?>
        <i class="fa-solid fa-mars pensionatCardGender"></i>
      </p>
      <p class="ejerCardInfo"><?php the_field('jespers_alder'); ?> år</p>
    </div>
  </section>

  <h2 class="pensionatHeadline">Vores personale</h2>

  <section class="pensionatFlex">

    <?php
    // henter data fra custom field feltet 'relater_ansatte' og gemmer det i en variable
    $relatedAnsatte = get_field('related_ansatte');

    // Tjekker at der findes en relation
    if ($relatedAnsatte) {
      // for hver relation gemmer den dataen i en ny variable ved navn $ansatte
      foreach ($relatedAnsatte as $ansatte) {

    ?>
        <!-- nulstiller postdataen for at undgå konflikter med pensionat archive -->
        <?php wp_reset_postdata(); ?>
        <div class="pensionatCards dropShadowWhole pensionatCardSmall">
          <div>
            <!-- bruger echo og get, for at få den til at printe dataen fra $ansatte og ikke pensionat archive -->
            <?php echo get_the_post_thumbnail($ansatte, 'ansatCardImage'); ?>
          </div>
          <div>
            <p class="pUppercase pensionatCardInfo">
              <?php echo get_the_title($ansatte); ?>
            </p>
          </div>
        </div>

    <?php
      }
    }
    // }
    ?>


  </section>
</section>

<?php get_footer(); ?>