<?php

function lien($l){
    $link = str_replace(' ','+',$l);
    return $link;
}

function title($t){
    $output = str_replace('+', ' ', $t);
    return $output ;
}

function tagscard($tags){
    $output = str_replace('&', ', ', $tags);
    return $output;
}

function datecard($d){
    $dater = explode ('-', $d, 3);
    return $dater[2].'/'.$dater[1];
}

function publicAge($p){
    if($p == 4){
        return 'tous publics' ;
    }
    elseif($p == 0) $age = 8 ;
    elseif ($p == 1) $age = 12 ;
    elseif ($p == 2) $age = 16 ;
    elseif ($p == 3) $age = 18 ;
 
    return $age.' ans minimum' ;
}

function typeEvent($t){
    if( $t == 0) return 'atelier' ;
    elseif ($t == 1) return 'évènement' ;
}

function resume($r){
    $l = strlen($r);
    if($l > 80) return substr($r, 0, 85).'...';
    else return $r;
}

function titleCreate($t){
    if ($t == 0) return 'Que voulez-vous organiser ?' ;
    if ($t == 1) return 'Décris nous ton idée.' ;
    if ($t == 2) return 'Protégeons la naïveté de nos enfants ! Si besoin, définis une limite d’âge.' ;
    if ($t == 3) return 'Où souhaites-tu retrouver tes kulters ?' ;
    if ($t == 4) return 'Ces lieux pourraient être disponibles :' ;
    if ($t == 5) return 'Parfait ! <br> Nous attendons ta confirmation du lieu de rendez-vous pour finaliser la publication de l’annonce.' ;
    if ($t == 6) return 'Quand souhaites-tu retrouver tes kulters ?' ;
    if ($t == 7) return 'Quand souhaites-tu retrouver tes kulters ?' ;
    if ($t == 8) return 'As-tu une image à proposer ? <br> Nous pouvons nous en charger.' ;
    if ($t == 9) return 'Parfait ! <br> Ton annonce sera publiée dans quelques instants.' ;
}

function dayPassed($jour, $mois){
    
    if ($jour < date('j') && $mois < date('n') && $mois > 4){
        return 'class="passed"';
    }
}


function afficheClass($n){
    if ($n == 0) return 'displayed';
    else return 'hidden';
}

function readen($n){
    if($n == 0) return 'nonRead';
    else return ;
}


function parser($r, $where){
    $l = strlen($r) ;

    if($where == 'msg'){
        if($l > 70) return substr($r, 0, 70).' ...';
        else return $r;
    } 

    if($where == 'resume'){
        if($l > 250) return substr($r, 0, 250).' ...';
        else return $r;
    } 
}

function mesFav($f){
    if($f == 1){ 
        return 'isFavorite';
    } else return '';
}


function wichReturn($m){

    if($m == 0) return ' href="#" onclick="goBack()"';
    else if ($m == 1) return ' href="events&billets.php"';
}



function hf($g){


$filles = array('anne bernadou', 'Elise Fonti', 'Mathilde Cagnard', 'Marie Lambert');
$garcons = array('jean delatouche', 'matthieu blomet', 'Michel Delpuech', 'Christian Draque', 'Tom Hardit', 'Julien Castillon', 'Eric Chevron', 'Marc Serré', 'Louis de Funis');


    for ($i = 0; $i < count($garcons) ; $i++){
        if ($g == $filles[$i]) return './assets/users/fille.jpg';
        elseif ($g == $garcons[$i]) return './assets/users/garcon.jpg';
        elseif( $g == 'Les Fumigènes')return './assets/users/groupe.jpg';
    }
}


?>