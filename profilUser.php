<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');
include('pages/menu.php');
//include('pages/navbar.php');

//body
include('pages/corps.php');

echo '<section id="profilUser">';

echo'
    <img src="'.hf($_SESSION["user_name"]).'" alt="'.$_SESSION["user_name"].' photo">

    <div class="username">
        <h1>'.$_SESSION["user_name"].'</h1>
        <p>pro</p>
    </div>

    <div class="iconsUser">
        <img src="./assets/icons/share-black.svg" alt="">
        <img src="./assets/icons/message-circle.svg" alt="">
        <img src="./assets/icons/print.svg" alt="">
    </div>

    <div class="prezprez">
        <h2>Présentation</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>


    <div class="socialsUser">
        <div><img src="./assets/socials/rounded/facebook.svg" alt=""></div>
        <div><img src="./assets/socials/rounded/linkedin.svg" alt=""></div>
        <div><img src="./assets/socials/rounded/instagram.svg" alt=""></div>
        <div><img src="./assets/socials/rounded/twitter.svg" alt=""></div>
        <div><img src="./assets/socials/rounded/mail.svg" alt=""></div>
    </div>

    <div class="apparitions">

    <div>
        <div>
        </div>
        <img class="play" src="./assets/icons/play.svg" alt="">
        <img src="./assets/events/mysantropia.jpg" alt="">
    </div>

    <div>
        <div>
        </div>
        <img class="play" src="./assets/icons/play.svg" alt="">
        <img src="./assets/events/zbradaraldjan.jpg" alt="">
    </div>


</div>

';

echo'</section>';






echo '</div>';

echo' </body>
    </html>
';

?>



<script src="js/script.js"></script>

