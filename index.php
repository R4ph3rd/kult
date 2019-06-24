<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');
include('pages/menu.php');
//include('pages/navbar.php');

$_SESSION['quelMenu']  = 'mes_participations';

include('pages/corps.php');
include('pages/navbar.php');
///////////// EVENEMENTS FAVORIS ////////////////
echo '<section id="events">
            <h2>Favoris</h2>
    ';
include("pages/ev_cards.php") ; 
echo '</section>';


/////////////// A L'AFFICHE /////////////////
echo '<section id="affiche">
            <h2>A l'."'".'affiche</h2>
    ';
include("pages/carrousel.php") ; 
echo'
    <div class="carrousel">';
    for ($i = 0 ; $i <5 ; $i ++){
        echo'
        <svg id="'.$i.'" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
            <circle cx="5" cy="5" r="5"/>
        </svg>';
    }
echo '
    </div>
</section>';


/////////////////// ARTISTES ////////////////////////
echo '<section id="artistes">
            <h2>Artistes</h2>
    ';
include('pages/artisteCards.php');
echo'</section>';


//////////////// NEWS //////////////////

echo '<section id="news">
            <h2>On parle de vous !</h2>
    ';
include('pages/newsCards.php');
echo'</section>';



echo '</div>';

?>

<script src="js/script.js"></script>