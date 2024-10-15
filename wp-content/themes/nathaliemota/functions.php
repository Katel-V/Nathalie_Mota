<?php

// Création de la page d'administration

function nathaliemota_add_admin_pages() {
    add_menu_page(__('Paramètres du thème NathalieMota', 'nathaliemota'), __('NathalieMota', 'nathaliemota'), 'manage_options', 'nathaliemota-settings', 'nathaliemota_theme_settings', 'dashicons-admin-settings', 60);
}
    
function nathaliemota_theme_settings() {
    echo '<h1>'.get_admin_page_title().'</h1>';
}
    
add_action('admin_menu', 'nathaliemota_add_admin_pages', 10);

function nathaliemota_settings_register() {
    register_setting('nathaliemota_settings_fields', 'nathaliemota_settings_fields', 'nathaliemota_settings_fields_validate');
}
        
function nathaliemota_settings_fields_validate($inputs) {    
    if(!empty($_POST)) {     
        if(!empty($_POST['nathaliemota_settings_field_introduction'])) {       
            update_option('nathaliemota_settings_field_introduction', $_POST['nathaliemota_settings_field_introduction']);     
        }     
        if(!empty($_POST['nathaliemota_settings_field_phone_number'])) {       
            update_option('nathaliemota_settings_field_phone_number', $_POST['nathaliemota_settings_field_phone_number']);    
        }     
        if(!empty($_POST['nathaliemota_settings_field_email'])) {       
            update_option('nathaliemota_settings_field_email', $_POST['nathaliemota_settings_field_email']);     
        }   
    }    
    return $inputs; 
}
        
add_action('admin_init', 'nathaliemota_settings_register');

function nathaliemota_settings_register() {
    register_setting('nathaliemota_settings_fields', 'nathaliemota_settings_fields', 'nathaliemota_settings_fields_validate');
    add_settings_section('nathaliemota_settings_section', __('Paramètres', 'nathaliemota'), 'nathaliemota_settings_section_introduction', 'nathaliemota_settings_section');
}
    
function nathaliemota_settings_section_introduction() {
    
    _e('Paramètrez les différentes options de votre thème NathalieMota.', 'nathaliemota');
}
    
add_action('admin_init', 'nathaliemota_settings_register');

