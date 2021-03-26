<?

/*
portal-config.php
Used to store IT162 configuration information
*/

//place your site keys here (keys for web-students.net posted here)
$siteKey = "6LcP2jwaAAAAAEIOs3UE6Yxwpxqa-ZbDiYg2z2oL";
$secretKey = "6LcP2jwaAAAAAL5bVScvsjwZaCwooLvY-qkndvWQ";

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = "Client Questionnaire";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;

    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-cube';
        $PageID = 'Flexbox Research';
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
        $title = "Google Map";
        $logo = 'fa-map-o';
        $PageID = 'Google Map';
    break;

    case 'youtube.php':
        $title = "YouTube";
        $logo = 'fa-youtube-square';
        $PageID = 'YouTube';
    break;

    case 'siteapp.php':
        $title = "Responsive Sites vs Web Apps";
        $logo = 'fa-html5';
        $PageID = 'Responsive Sites vs Web Apps';
    break;

    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa-eye';
        $PageID = 'Webcam';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

?>