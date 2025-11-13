<!-- This is the file that we use to have a conversion with the wordpress system itself -->

<?php 

    function university_files() {   
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    }

// wp_enqueue_scripts is used to load css or js files
    add_action("wp_enqueue_scripts","university_files");
?>