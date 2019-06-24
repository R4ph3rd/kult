<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');

echo '
    <div id="maingrid">

        <div class="header">
            <a href="" onclick="goBack()" class="goBack svg">
            </a>
        </div> 

        <h3 class="question" >Ta réservation pour l’atelier Improvisation théâtrale est confirmée. <br>Veux-tu un rappel ?</h3>

        <div class="sms rappel"><a></a><p>Recevoir un SMS</p></div>
        <div class="mark rappel"><a></a><img src="./assets/icons/calendar-red.svg" alt=""><p>Marquer un évènement</p></div>

        <div class="billet pass">     
                <a href="" class="imageL">Passer</a>
                <a href="" class="svg next-gris"><img src="./assets/icons/arrow-right-circle-blak.svg" alt=""></a>       
        </div>

    
        ';
?>
<script src="js/script.js"></script>

