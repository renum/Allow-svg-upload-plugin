<?php

/*
Plugin Name: tech2travel- Allow svg file upload
Plugin URI:

Description: Allow svg file upload
Version: 1.0
Author: Renu Mehta
Author URI:
Text Domain: tech2travel
*/
//Enable to upload .svg files to wordpress



    function add_file_types_to_uploads($file_types){
        $new_file_types=array('svg'=>'image/svg+xml');
        $file_types=array_merge($file_types,$new_file_types);
        return $file_types;
    }

    //Hook

    add_filter('upload_mimes','add_file_types_to_uploads');


?>