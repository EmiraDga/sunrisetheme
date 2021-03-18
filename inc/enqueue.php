<?php
/*
@package sunrisetheme

==================
     ADMIN ENQUEUE FUNCTIONS
==================
*/


function sunrise_load_admin_scripts($hook) {

if('topleve_page_amira_sunrise' != $hook ){

     return;
}


// prépare les scripts / styles à ajouter.
//we are regestring a new file css and we are storing this new css with this unic ID so we can refer this css file with this ID and include that file wherever we want 
wp_register_style('sunrise_admin', get_template_directory_uri() . '/css/sunrise.admin.css',array(),'1.0.0','all');


//ajoute des scripts / styles à la file d'attente,
//this is the actual function that is including that is triggering this ID and prrinting this file inside our WP installation 
wp_enqueue_style('sunrise_admin');




}


//nhebou lzina hedhi ken fel menu eli snaaneha mch fl theme lkol
//add_action('admin_enqueue_scripts','sunrise_load_admin_scripts');
//were saying to WP you have to do wp_reg and wp_enq in  'admin_en_scirpts' 

add_action('admin_head', 'sunrise_load_admin_scripts');

