<?

/* =======================================================
big-config.php
Used to store IT162 BIG site configuration information
========================================================== */

// Sitekeys for contact form
$siteKey = "6LcP2jwaAAAAAEIOs3UE6Yxwpxqa-ZbDiYg2z2oL";
$secretKey = "6LcP2jwaAAAAAL5bVScvsjwZaCwooLvY-qkndvWQ";

// Default date/timezone for this website
date_default_timezone_set('America/Los_Angeles');

// Dynamic page navigation switch
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = "Client Questionnaire";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;

    case 'flexbox.php':
        $title = "Flexbox";
        $logo = 'fa-cube';
        $PageID = 'Flexbox';
    break;

    case 'galleries.php':
        $title = "Galleries & Sliders";
        $logo = 'fa-camera-retro';
        $PageID = 'Galleries & Sliders';
    break;

    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-calendar';
        $PageID = 'Google Calendar';
    break;

    case 'map.php':
        $title = "Responsive Google Map";
        $logo = 'fa-map-o';
        $PageID = 'Embeded Responsive Google Map';
    break;

    case 'youtube.php':
        $title = "YouTube Video";
        $logo = 'fa-youtube-square';
        $PageID = 'Accessibility Fundamentals with Rob Dodson';
    break;

    case 'siteapp.php':
        $title = "Responsive Sites vs Web Apps";
        $logo = 'fa-html5';
        $PageID = 'Responsive Sites vs Web Apps';
    break;

    case 'webcam.php':
        $title = "Live Webcam";
        $logo = 'fa-eye';
        $PageID = 'NASA Earth From Space - Earth Viewing cameras ISS feed';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

?>