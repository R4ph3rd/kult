<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');
//include('pages/navbar.php');


//body
include("ev_cards.php") ; 
include('artisteCards.php');
include('newsCards.php');
    

echo '
    </body>
    </html>
';

?>