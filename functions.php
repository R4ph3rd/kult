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

function publics($p){
    if($p == 4){
        return 'tous publics' ;
    }
    elseif($p == 0) $age = 8 ;
    elseif ($p == 1) $age = 12 ;
    elseif ($p == 2) $age = 16 ;
    elseif ($p == 3) $age = 18 ;

    return $age.' ans minimum' ;
}


?>