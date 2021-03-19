<?php
/*
@package sunrisetheme

==================
     ADMIN PAGE
================== 
*/


function sunrise_add_admin_page(){

   //Generate Sunrise Admin Page
 add_menu_page('Sunrise Theme Options' , 'Costumize','manage_options','amira_sunrise', 'sunrise_theme_create_page','dashicons-art
 '
    , 110);


add_action('admin_init','sunrise_custom_settings'); 
//7atineha lde5el fl fonction hedhi to prevents the system to generte a custom settings to call the function to generate a custom setting
//Fires as an admin screen or script is being initialized.



    }

    add_action('admin_menu','sunrise_add_admin_page');  
    // admin_menu:  Fires before the administration menu loads in the admin.
    

function sunrise_custom_settings(){
register_setting('sunrise-settings-group','Colors'); //create a sepecefic section in the database
                 //in the wp-options of the WP database to record a custom
                 //enregistrer un parametre et ses données

//register_setting('sunrise-settings-group','twitter_handler','sunitize_twitter_handler');
register_setting('sunrise-settings-group','fonts');
register_setting('sunrise-settings-group','Border_Color'); //1



add_settings_section('sunrise-sidebar-options','Sidebar Options','sunrise_sidebar_options','amira_sunrise') ;//Fait partie de l'API Settings. Utilisez-le pour définir de nouvelles sections de paramètres pour une page d'administration. 
                        //Affichez les sections de paramètres dans la fonction de rappel de votre page d'administration avec do_settings_sections ().
                        // Ajoutez des champs de paramètres à votre section avec add_settings_field ().                
                  
add_settings_field('sidebar-color','Colors','sunrise_sidebar_color','amira_sunrise','sunrise-sidebar-options');
//give us the ability to generate un champ personnalisé
add_settings_field('sidebar-fonts','Fonts','sunrise_sidebar_fonts','amira_sunrise','sunrise-sidebar-options');
add_settings_field('sidebar-bordure','Border Color','sunrise_sidebar_border','amira_sunrise','sunrise-sidebar-options');
//add_settings_field('sidebar-description','Descripton','sunrise_sidebar_description','amira_sunrise','sunrise-sidebar-options'); //2




// ====== FOR THE CSS ==========
register_setting('sunrise-settings-group','user_description');
add_settings_field('sidebar-description','Description','sunrise_sidebar_description','amira_sunrise','sunrise-sidebar-options');







}


function sunrise_sidebar_color(){
   

$colors = esc_attr(get_option('Colors'));
                                                                                          //this function will retry for us inside the database this single value that we saved in WP in our custom setting
echo' <input type="text" name="Colors" value="'.$colors.'" placeholder="color"/>';
//esc_attr ta7mi l database mte3na men ay input matjich y7otha l user



}





function  sunrise_sidebar_border(){
    $borderColor = esc_attr(get_option('Border_color'));

    echo' <input type="text" name="Border_color" value="'.$borderColor.'" placeholder="border color"/>' ;

}


function sunrise_sidebar_fonts(){
    $font = esc_attr(get_option('fonts'));

    echo' <input type="text" name="fonts" value="'.$font.'" placeholder="fonts"/>' ;
}


//Sanitization
function sunitize_twitter_handler($input){
$output = sanitize_text_field($input);
$output = str_replace('@','',$output); //bch n3awdhou valeur l9dima b jdida ba3d mana7aiw l @

return $output;
}





function sunrise_sidebar_options(){

echo'Customize Your Theme! ';


}

    //function for the menu
    function sunrise_theme_create_page(){
    
       //output of the page
       //generation of our admin page

       require_once(get_template_directory() . '/inc/templates/sunrise-admin.php');
    
    }
    

    
// ======= FOR THE CSS =========

function  sunrise_sidebar_description(){
    $description = esc_attr(get_option('user_descripion'));

    echo' <input type="text" name="user_description" value="'.$description.'" placeholder="Description"/><p class="description">Write something smart.</p>';

}





function my_custom_css() {

    wp_register_style('styleheet',get_stylesheet_uri(), [] , fileatime(get_template_directory(). '/css/stylesheet.css'), 'all');
    
    wp_enqueue_style('styleheet');
    
    }
    add_action('wp_enqueue_scripts', 'my_custom_css');
    