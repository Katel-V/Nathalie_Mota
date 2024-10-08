<?php

function nathaliemota_add_admin_pages() {
    add_menu_page('Paramètres du thème NathalieMota', 'NathalieMota', 'manage_options', 'nathaliemota-settings', 'nathaliemota_theme_settings', 'dashicons-admin-settings', 60);
}

function nathaliemota_theme_settings() {
    echo '<h1>' .get_admin_page_title() . '</h1>';
}

add_action('admin_menu', 'nathaliemota_add_admin_pages');