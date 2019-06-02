<?php

function lien($l){
    $link = 'pages/fiches_events/'.str_replace(' ','',$l).'.php';
    return $link;
}

function title($t){
    $output = str_replace('+', ' ', $t);
    return $output ;
}

function tagscard($tags){
    $output = str_replace('&', ',', $tags);
    return $output;
}

function datecard($d){
    $dater = explode ('-', $d, 3);
    return $dater[2].'/'.$dater[1];
}



?>