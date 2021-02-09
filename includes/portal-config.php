<?

/*
portal-config.php
Used to store IT162 configuration information
*/

//  echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch(THIS_PAGE){
    case 'index.php':
        $title = "Malik's IT162 Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'contact.php':
        $title = "Malik's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact.php'] = "Contact";


/*

<li><a href="index.php" class="selected">Welcome</a></li>
<li><a href="big/index.php">Big</a></li>
<li><a href="aia.php">AIA</a></li>
<li><a href="flowchart.php">Flowchart</a></li>
<li><a href="fp/index.php">Final Project</a></li>
<li><a href="contact.php">Contact</a></li>

*/


// Function to generate links and keep the current page highlighted
function makeLinks($nav1) {
    $myReturn = '';

    foreach($nav1 as $url => $text) {
        if($url == THIS_PAGE) {
            $myReturn .= "<li><a href='$url' class='selected'>$text</a></li>";
        } else {
            $myReturn .= "<li><a href='$url'>$text</a></li>";
        }


    }

    return $myReturn;
}

 ?>