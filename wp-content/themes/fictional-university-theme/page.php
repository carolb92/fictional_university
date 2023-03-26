<?php 

    get_header();

    while(have_posts()) {
        // gets data for us from the wp database
        the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p>DON'T FORGET TO REPLACE THIS LATER</p>
        </div>
    </div>
</div>

    <div class="container container--narrow page-section">

        <?php
            // as an argument we pass an ID for a page or post, and the function returns the ID for that page's parent
            // so this function's argument gets the ID of the current page, and that uses that number to look up the ID of its parent page
            // it will return 0 if the page doesn't have a parent (0 evaluates to false in an if statement)
            // wp_get_post_parent_id(get_the_ID());
            $parentID = wp_get_post_parent_id(get_the_ID());
            if($parentID) { ?>
                <div class="metabox metabox--position-up metabox--with-home-link">
                    <p>
                        <a class="metabox__blog-home-link" href="<?php echo get_permalink($parentID); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentID); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
                    </p>
                </div>
            <?php }
        ?>
        
        <!-- Don't display the link if the current page is neither a parent nor child page -->
        <?php 
        //get_pages(); function returns all pages of the website in memory
        //if the current page has children, the function will return a collection of all children
        //if the current page doesn't have children, the function won't return anything (NULL, FALSE, 0)
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        )); 
        if($parentID or $testArray) { ?>
            <div class="page-links">
            <h2 class="page-links__title"><a href="<?php echo get_permalink($parentID); ?>"><?php echo get_the_title($parentID); ?></a></h2> <!-- If $parentID returns 0; the function interprets a 0 as the current page  -->
            <ul class="min-list">
                <?php
            
                    if($parentID) {
                        // we're on a child page so we need to look up the parent page ID
                        $findChildrenOf = $parentID;
                    } else {
                        // we're on a parent page so we can use the ID of the current page
                        $findChildrenOf = get_the_ID();
                    }

                    // w/o arguments, creates links to every page on the website
                    // argument needs to be an associative array
                    wp_list_pages(array(
                        // tells wp not to output the 'pages' title
                        'title_li' => NULL,
                        // we only want links to children pages of the current page, not every page on the website
                        'child_of' => $findChildrenOf
                    ));
                ?>
            </ul>
        </div>
        <?php } ?>
        

        <div class="generic-content">
            <?php the_content(); ?>
        </div>

    </div>
        
    <?php }

    get_footer();
?>