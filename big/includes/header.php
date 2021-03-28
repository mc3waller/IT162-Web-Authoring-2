<?php include 'big-config.php' ?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="UTF-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/form.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <script src="js/script.js"></script>
    </head>

    <body>
        <!-- START WRAPPER -->
        <main class="wrapper">
            <header>
                <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> DevSmarts: Malik's WebDev Resources</a></h1>

                <nav id="cssmenu">
                <ul>
                    <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
                    <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
                    <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
                    <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
                    <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                        <ul>
                        <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                        <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                        <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                        </ul>
                    </li>
                    <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
                    <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
                </ul>
                </nav>
            </header>

            <!-- START LEFT COLUMN -->
            <section>
                <!-- LEFT COLUMN CONTENT START -->
                <h1 class="pageID"><?=$PageID?></h1>