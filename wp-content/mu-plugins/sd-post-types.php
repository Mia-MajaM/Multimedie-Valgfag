<?php

function sd_post_types() {
 // Post type til de forskellige dyr, der skal bruges til at lave en archive som vi kan bruge som vores adoptionsside
 register_post_type('dyr', array(
  'supports' => array('title', 'editor', 'thumbnail'),
  'rewrite' => array('slug' => 'adoption'),
  'public' => true,
  'show_in_rest' => true,  // Viser den moderne editor, skal have editor i supports for at dette vil fungere
  'has_archive' => true, // laver arkivet vi vil bruge som adoptionsside
  'labels' => array(
   'name' => 'Adoption',
   'add_new_item' => 'Tilføj nyt dyr',
   'edit_item' => 'Rediger dyr',
   'all_item' => 'Alle dyr',
   'singular_name' => 'dyr'
  ),
  'menu_icon' => 'dashicons-pets'
 ));

 // pensionat post type. Blive brugt som erstatning for kategorier.
 register_post_type('pensionat', array(
  'supports' => array('title', 'editor', 'thumbnail'),
  'rewrite' => array('slug' => 'pensionat'),
  'public' => true,
  'show_in_rest' => true,
  'has_archive' => true, //bliver nødt til at have archive for at kunne lave pensionat siden, da den udelukkende består af forskellige posts
  'labels' => array(
   'name' => 'Pensionat',
   'add_new_item' => 'Tilføj ny side',
   'edit_item' => 'Rediger side',
   'all_item' => 'Alle Sider',
   'singular_name' => 'pensionat'
  ),
  'menu_icon' => 'dashicons-admin-multisite'
 ));

 // Laver post type til de forskellige ansatte, så vi kan lave en relationship til pensionat siden
 register_post_type('ansat', array(
  'supports' => array('title', 'editor', 'thumbnail'),
  'rewrite' => array('slug' => 'ansat'),
  'public' => true,
  'show_in_rest' => true,
  'labels' => array(
   'name' => 'Ansat',
   'add_new_item' => 'Tilføj ny ansat',
   'edit_item' => 'Rediger ansat',
   'all_item' => 'Alle Ansatte',
   'singular_name' => 'ansat'
  ),
  'menu_icon' => 'dashicons-admin-users'
 ));
}

// sætter gang i functionen
add_action('init', 'sd_post_types');

// Tilføjer en masse sd_features
function sd_features() {
 add_theme_support('title-tag'); //tilføjer title tag til siden
 add_theme_support('post-thumbnails'); //gør at man kan tilføje thumbnails
 add_image_size('dyrCardImage', 350, 250, true); //laver en specifik billede størrelse med tilhørende navn, som man kan bruge i koden
 add_image_size('dyrProfileImage', 630, 420, true);
 add_image_size('dyrGalleryMiddleImage', 450, 310, true);
 add_image_size('dyrGalleriSideImage', 400, 260, true);
 add_image_size('hvemErViImage', 500, 300, true);
 add_image_size('focusPointImages', 380, 300, true);
 add_image_size('frontpageFPTopImages', 700, 570, true);
 add_image_size('ansatCardImage', 200, 150, true);
 // true siger at billedet skal være så stort, og gerne 
 //må crop til størrelse, så billeder ikke bliver strukket
}
// siger den skal kører vores functions efter themet er sat op
add_action('after_setup_theme', 'sd_features');
