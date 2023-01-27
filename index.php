<?php


//get route from the global variable
$path = $_SERVER[ "REQUEST_URI" ];

//remoe beginning & ending slash
$path = trim( $path , '/' );

//remove all the URL parameters that starts with ?
$path = parse_url( $path , PHP_URL_PATH );

// var_dump( $path );

switch( $path ) {
    case 'dashboard':
        require "views/dashboard.php";
        break;
    case 'login':
        require "views/login.php";
        break;
    case 'signup':
        require "views/signup.php";
        break;
    case 'manage-posts-add':
        require "includes/manage-posts-add.php";
    break;
    case 'manage-posts-edit':
        require "includes/manage-posts-edit.php";
        break;
    case 'manage-posts':
        require "includes/manage-posts.php";
        break;
    case 'manage-users-add':
        require "includes/manage-users-add.php";
        break; 
    case 'manage-users-edit':
        require "includes/manage-users-edit.php";
        break; 
    case 'manage-users':
        require "includes/manage-users.php";
        break;    
    case 'post':
        require "views/post.php";
        break;     
    case 'logout':
        require "views/logout.php";
        break;
    default:
        require "views/home.php";
        break;
}