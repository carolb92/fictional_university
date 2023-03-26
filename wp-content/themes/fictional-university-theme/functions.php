<?php
function university_files() {
    //This function looks for 2 arguments for css, additional for js
    //First argument: make up a nickname for our stylesheet
    //Second argument: location that points to the file
    //Third argument: dependencies
    //Fourth argument: version number
    //Final argument: wp asking if you want to load this file right before the closing body tag; true makes it load at the bottom of the page before the closing body tag instead of in the head section (which is better for overall performance)
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
}

// WordPress lets us give it instructions and tell it what to do by using this function
// The first argument is where we tell WP what type of instructions we're giving it. depending on what we're trying to do, WP will run this code at different times
// In this case we want to load a file (like a CSS or JS file)
// The second argument is the name of the function we want to run (in this case a function that we define)
//Overall, this function tells wordpress to run our custom function at the time that it  outputs the code in the header (wp_head();)
add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    //this wp function enables a feature for your theme
    //we need to tell wp which feature in particular we're interested in. In this case, it's title-tag. So the title tag will be automatically generated by wp
    add_theme_support('title-tag');
    //gives us a menus option under 'appearance' in the admin screen. 
    //needs 2 arguments. 
    //1st argument: name we make up for the particular menu location
    //2nd argument: the text that will show up in the wp admin screen
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocation1', 'Footer Location 1');
    register_nav_menu('footerLocation2', 'Footer Location 2');
}

//First argument is the wp event we want to hook onto
//Second argument is a custom function
add_action('after_setup_theme', 'university_features');
?>