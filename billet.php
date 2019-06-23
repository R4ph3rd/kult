<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');


$ev = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_titre = '$title_event' LIMIT 1 ");
$data = mysqli_fetch_assoc($ev) ;

$_SESSION['event'] = $data ;
$_SESSION['quelMenu']  = 'mes_participations';


echo '
    <div id="maingrid">

        <div class="header">
            <a href="./events&billets.php" class="goBack svg">
            </a>
        </div>

        <div class="billetEvent">
            <img src="./assets/events/QRCode.svg" alt="">
            <h3>'. $_SESSION['title_event'] .'</h3>
            <h4>Noël Flantier</h4>
            <div>
                <img src="./assets/icons/participants.svg" alt="">
                <p>2 personnes</p>
            </div>

            <p>'. ($_SESSION['prix_event'] * 2).'  €</p>
        </div>
    
        ';
?>

<script src="js/script.js"></script>

