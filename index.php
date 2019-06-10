<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');
//include('pages/navbar.php');


//body
echo' <a href="createEvent.php">CREATION EVENEMENT</a>';
include("ev_cards.php") ; 
include('artisteCards.php');
include('newsCards.php');


    

echo '
    </body>
    </html>
';

?>