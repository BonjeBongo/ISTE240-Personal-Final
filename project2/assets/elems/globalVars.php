<?php
    $dbConnect = '/home/MAIN/stv9643/dbConnect.inc';

    $root = '/home/MAIN/stv9643/Sites/240/project2/';
    $currentPath = './';
    $previousPath = '../';
    $header = $root.'assets/elems/top.php';
    $nav = $root.'assets/elems/nav.php';
    $footer = $root.'assets/elems/bottom.php';

    $assocPageNames = array('home' => "Explore Denver",
                            'history' => "About Denver",
                            'landmarks' => "Landmarks of Denver",
                            'restaurants' => "Restaurants in Denver",
                            'events' => "Events in Denver",
                            'hotels' => "Hotels in Denver",
                            'survey' => "Tell us About Your Visit",
                            'redirect' => "Thank You!",
                            'contact' => "Contact Us!",
                            'comments' => "Comments",
                            'resources' => "Resources Used",
                            'rubric' => "Rubric",);
                            

    $page = 'home';
    $anchor = '';
    $css = 'main';
    $title = $assocPageNames[$page];
    $linkPath = $currentPath.'index.php?page=';

    $goHome = $linkPath.'home';

    $goHist = $linkPath.'history';
    $goHistA1 = $goHist.'&anchor=DenvHist';
    $goHistA2 = $goHist.'&anchor=DenvSig';

    $goLand = $linkPath.'landmarks';
    $goLandA1 = $goLand.'&anchor=RedRock';
    $goLandA2 = $goLand.'&anchor=BotG';
    $goLandA3 = $goLand.'&anchor=Science';
    $goLandA4 = $goLand.'&anchor=Capitol';

    $goRest = $linkPath.'restaurants';
    $goRestA1 = $goRest.'&anchor=r1';
    $goRestA2 = $goRest.'&anchor=r2';
    $goRestA3 = $goRest.'&anchor=r3';

    $goEvt = $linkPath.'events';
    $goEvtA1 = $goEvt.'&anchor=eu';
    $goEvtA2 = $goEvt.'&anchor=ep';

    $goHtl = $linkPath.'hotels';
    $goHtlA1 = $goHtl.'&anchor=h1';
    $goHtlA2 = $goHtl.'&anchor=h2';
    $goHtlA3 = $goHtl.'&anchor=h3';

    $goSrv = $linkPath.'survey';
    $goRedir = $linkPath.'redirect';
    $goComm = $linkPath.'comments';
    $goCont = $linkPath.'contact';
    $goRess = $linkPath.'resources';
    $goRoob = $linkPath.'rubric';
?>