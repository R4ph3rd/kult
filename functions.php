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
    if($l > 300) return substr($c, 0, 300).'...';
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


?>