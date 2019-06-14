<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');
//include('pages/navbar.php');


//body
echo '<div class="maingrid">
            <div class="header">
            <a href="" class="menu svg"></a>
            <a href="" class="chat svg"></a>
            <a href="" class="search svg"></a>
            <a href="" class="notifs svg"></a>
            </div>
';
echo' <a href="createEvent.php">CREATION EVENEMENT</a>';
echo '<section class="events">';
include("ev_cards.php") ; 
echo '</section>';
/*include('artisteCards.php');
include('newsCards.php');*/

echo '</div>';
    

echo '
    </body>
    </html>
';

?>