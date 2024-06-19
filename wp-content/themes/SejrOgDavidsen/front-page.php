<?php
get_header();

// Definere en variable der holder værdien for billedet, samt en variable der holder værdien for størrelsen på billedet
$top_pensionat_billede = get_field('top_pensionat_billede');
$top_adoption_billede = get_field('top_adoption_billede');
$hvem_er_vi_billede = get_field('hvem_er_vi_billede');
$fp_billede_1 = get_field('fp_billede_1');
$fp_billede_2 = get_field('fp_billede_2');
$fp_billede_3 = get_field('fp_billede_3');

$sizeTopFP = 'frontpageFPTopImages';
$sizeHvem = 'hvemErViImage';
$sizeFP = 'focusPointImages';
?>

<section id="index-Hedder-Section">
 <!-- bruger wp_get_attachement_image til at printe variablen der holder billedet i den korrekte størrelse -->
 <div id="pensionat-Img"> <?php echo wp_get_attachment_image($top_pensionat_billede, $sizeTopFP); ?>
  <!-- bruger echo site_url for at indsætte det slug, der skal puttes baseret i url -->
  <a href=" <?php echo site_url('/pensionat') ?> " class="button buttonHoverHalf dropShadowHalf button-FP-Top">Pensionat</a>
 </div>

 <div id="adoption-Img"> <?php echo wp_get_attachment_image($top_adoption_billede, $sizeTopFP); ?>
  <a href="<?php echo site_url('/adoption') ?>" class="button buttonHoverHalf dropShadowHalf button-FP-Top">Adoption</a>
 </div>
</section>


<section class="grid-System" id="hvem-Er-Vi-Section">
 <h1 id="hvem-Er-Vi-H1">HVEM ER VI?</h1>

 <p id="hvem-Er-Vi-P">
  <?php the_field('hvem_er_vi'); ?>
 </p>
 <div id="img-Hvem-Er-Vi"> <?php echo wp_get_attachment_image($hvem_er_vi_billede, $sizeHvem); ?> </div>

 <a href="<?php echo site_url('/om-os') ?>" class="button buttonHoverWhole dropShadowWhole" id="button-Hvem-Er-Vi">Om os</a>
</section>

<section id="three-boxes-Section">
 <div id="fp1-Grid">
  <div class="focus-entry-points-Img"> <?php echo wp_get_attachment_image($fp_billede_1, $sizeFP); ?> </div>
  <a href="" class="button buttonHoverHalf dropShadowHalf button-FP"> <?php the_field('fp_1'); ?> </a>
 </div>

 <div id="fp2-Grid">
  <div class="focus-entry-points-Img"> <?php echo wp_get_attachment_image($fp_billede_2, $sizeFP); ?> </div>
  <a href="" class="button buttonHoverHalf dropShadowHalf button-FP"> <?php the_field('fp_2'); ?> </a>
 </div>

 <div id="fp3-Grid">
  <div class="focus-entry-points-Img"> <?php echo wp_get_attachment_image($fp_billede_3, $sizeFP); ?> </div>
  <a href="" class="button buttonHoverHalf dropShadowHalf button-FP"> <?php the_field('fp_3'); ?> </a>
 </div>
</section>

<?php get_footer() ?>