<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');
include('pages/menu.php');
//include('pages/navbar.php');

//body
include('pages/corps.php');

echo '<section id="profil">
            <h2>Mon profil</h2>';

include('pages/profil.php');

echo'</section>';






echo '</div>';

echo' </body>
    </html>
';

?>


<script src="js/script.js"></script>