<?php
/*
Plugin Name: Portfolio Projects
Description: Simple plugin to create a custom post type for Projects.
Version: 1.0
Author: Mahmoud
*/

if ( !defined('ABSPATH') ) {
    exit;
}function create_projects_post_type() {
    register_post_type('projects', array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'all_items' => 'All Projects',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio', 
        'supports' => array('title', 'editor', 'thumbnail'), 
    ));
}
add_action('init', 'create_projects_post_type');

function add_project_details_box() {
    add_meta_box('project_details', 'Project Details', 'show_project_fields', 'projects', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_project_details_box');

function show_project_fields($post) {
    $client = get_post_meta($post->ID, 'client_name', true);
    $url = get_post_meta($post->ID, 'project_url', true);
    $tech = get_post_meta($post->ID, 'technology_used', true);
    ?>
    <p>
        <label>Client Name:</label><br>
        <input type="text" name="client_name" value="<?php echo esc_attr($client); ?>" style="width:100%;">
    </p>
    <p>
        <label>Project URL:</label><br>
        <input type="url" name="project_url" value="<?php echo esc_attr($url); ?>" style="width:100%;">
    </p>
    <p>
        <label>Technology Used:</label><br>
        <input type="text" name="technology_used" value="<?php echo esc_attr($tech); ?>" style="width:100%;">
    </p>
    <?php
}
function save_project_fields($post_id) {
    if (array_key_exists('client_name', $_POST)) {
        update_post_meta($post_id, 'client_name', sanitize_text_field($_POST['client_name']));
    }
    if (array_key_exists('project_url', $_POST)) {
        update_post_meta($post_id, 'project_url', esc_url($_POST['project_url']));
    }
    if (array_key_exists('technology_used', $_POST)) {
        update_post_meta($post_id, 'technology_used', sanitize_text_field($_POST['technology_used']));
    }
}
add_action('save_post', 'save_project_fields');
