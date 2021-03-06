<?php

$siteKey = "6LdLIjsaAAAAAIptc806REeHd9uCIa11UyPXQjIp";
$secretKey = "6LdLIjsaAAAAAFeyjHmo895xWVEahZ8lioQr6n5X";

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website
$server = 'github.com';

$logo_color = ''; //make logo_color an empty string by default

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Naran Torguud's IT162 Big Page";
        $logo = 'fa-bank';
        $PageID = 'Big Page ';
    break;
    
    case 'flexbox.php':
        $title = "Big/Flexbox ResearchPage";
        $logo = 'fa-cube';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Flexbox';
    break;

    case 'galleries.php':
        $title = "Big/Galleries Research Page";
        $logo = "fa-camera-retro";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Galleries';
    break;

    case 'siteapp.php':
        $title = "Big/Responsive vs Mobile App Research Page";
        $logo = "fa-html5";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Responsive vs Mobile App';
    break;

    case 'webcam.php':
        $title = "Big/Web Cam Page";
        $logo = "fa-eye";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Web Camera';
    break;

    case 'calendar.php':
        $title = "Big/Google Calendar Page";
        $logo = "fa-calendar";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Calendar';
    break;

    case 'map.php':
        $title = "Big/Google Map Page";
        $logo = "fa-map-o";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Google Map';
    break;

    case 'youtube.php':
        $title = "Big/YouTube Page";
        $logo = "fa-youtube-square";
        $logo_color = ' style="color:#00f"';
        $PageID = 'YouTube';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default  
        $PageID = '';
   }
?>

