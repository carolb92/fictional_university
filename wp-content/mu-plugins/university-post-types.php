<!-- putting the custom post types in the must use plugins folder (instead of the theme folder) ensures that a user won't be locked out of their custom posts if they switch to a new theme or deactivates their plugins -->
<?php 
function university_post_types() {
    // first argument: name of the custom post type we want to create
    // second argument: array of different options that describe your custom post type
    register_post_type('event', array(
        // rest API makes raw wordpress data available for javascript to fetch
        'show_in_rest' => true,
        // allows us to control the supported features on the admin dashboard (title and editor are default)
        'supports' => array('title', 'editor', 'excerpt'),
        // lets you control which keyword is used as the slug for the "all events" page; otherwise, the name we gave the post type (event) will be used by default
        'rewrite' => array('slug' => 'events'),
        // gives this post type an archive url (url for the "all events" page)
        'has_archive' => true,
        // makes the post type visible to editors and viewers of the website
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'university_post_types'); 
