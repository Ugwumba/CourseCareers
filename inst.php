<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();
session_start();

function getBaseUrl() 
{
    $uri = $_SERVER['REQUEST_URI']; // $uri == xtransfer.com/pub
    $split_uri = explode('/', $uri); //array('xtransfer.com','pub')
    $domain_name = $split_uri[0]; //
    // output: localhost
    $host = $_SERVER['HTTP_HOST']; 

    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

    return $protocol.'://'.$host.'/CourseCareers';
    //return $protocol.'://'.$host;
}
define("URL", getBaseUrl());

?>