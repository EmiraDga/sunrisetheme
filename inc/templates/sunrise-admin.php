<p>Customize SideBAr Options </p>

<?php settings_errors();   //this function will print the msg WP will give  
         //us by sending us back in our original page 
         
 
         ?>

<div class="sunrise-sidebar-preview">
    <div class="sunrise-sidebar">
      <h1 class="sunrise-fonts"> <?php print $fonts; ?></h1>
      <h2 class="sunrise-description"> </h2>
      <div class="incons-wrapper">
    </div>
   </div>
 </div>   
<!--seetings api 
are a collection of functions hooks 
and actions to create  a custom options ,custom settings and automatically
save these settings inside the database without us carrying or
worring about cheking user permisionns
-->

<form method="post" action="options.php"> <!--WP pointing all the forms to update the options to this page opt.php that u can not accees this page can manage seeting fields...-->

<?php settings_fields('sunrise-settings-group') ?>
<!--
    settings_fields ==> Affiche les champs nonce, action et option_page pour une page de paramètres.

-->


<?php do_settings_sections('amira_sunrise');
//param1:the id of the page where all our sections are sotred ?>
<?php submit_button();?>



</form>