<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');

$title_event = $_SESSION["title_event"];

$ev = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_titre = '$title_event' LIMIT 1 ");
$data = mysqli_fetch_assoc($ev) ;

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
            <p id="type">'.  typeEvent($data['event_type']) .'</p>
            <h4>Noël Flantier</h4>
            <div>
                <img src="./assets/icons/participants.svg" alt="">
                <p>2 personnes</p>
            </div>';

            if($_SESSION['type_event'] == 1){
                echo'
                <p>'. $_SESSION['prix_event'] .' €</p>
                ';
            }

        echo'    
        </div>
    
        ';
?>


<script src="js/script.js"></script>

