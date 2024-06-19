<!-- Henter header fra filen header.php -->
<?php get_header(); ?>

<body>

  <!-- Henter banner billedet fra fil hierakiet -->
  <div class="heroBanner" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/COLOURBOX38940888.JPG') ?>);"> </div>

  <main>
    <h1 class="h1Title">Adoption</h1>
  </main>

  <section id="filters">
    <button class="buttonHoverWhole dropShadowWhole">TYPE <i class="fa-solid fa-chevron-down"></i></button>
    <button class="buttonHoverWhole dropShadowWhole">ALDER <i class="fa-solid fa-chevron-down"></i></button>
    <button class="buttonHoverWhole dropShadowWhole">KØN <i class="fa-solid fa-chevron-down"></i></button>
  </section>
  <section class="adoptionGrid">

    <!-- Kører the loop for at hente posts -->
    <?php
    while (have_posts()) {
      the_post();
    ?>
      <div class="adoptionCards dropShadowWhole buttonHoverWhole">
        <a href="<?php the_permalink(); ?>"> <!-- indsætter linket til siden tilhørende informationen på card -->
          <div class="MainCardsImg"> <?php the_post_thumbnail('dyrCardImage'); ?>
          </div>
          <div>
            <p class="pUppercase CardInfo">
              <!-- henter informationen fra custom field med slug dyrets_navn -->
              <?php the_field('dyrets_navn'); ?>
              <!-- Kører en if statement, der tjekker om værdien fra costum filed slug dyret_kon er 'Hankøn'. 
              Bruger get da vi vil have den skal gemme dataen og ikke printe den -->
              <?php
              if (get_field('dyrets_kon') == 'Hankøn') {
                // Hvis if statement er true, skal den echo nedenstående html kode som laver et han symbol
                echo ' <i class="fa-solid fa-mars adoptionCardGender"></i>';
              } else {
                // Hvis if statement er false, skal den echo nedenstående html kode som laver et hun symbol
                echo '<i class="fa-solid fa-venus adoptionCardGender"></i>';
              }
              ?>
            </p>
            <p class="CardInfo">
              <?php the_field('dyrets_alder'); ?>
              <?php the_field('maneder_eller_ar'); ?></p>
          </div>
        </a>
      </div>
    <?php
    }
    ?>
  </section>

  <!-- Henter footer information fra footer.php -->
  <?php get_footer(); ?>