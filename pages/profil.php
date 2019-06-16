<?php

$a = mysqli_query($connect, "SELECT * FROM `profil`");
$n = 0;

echo '<div class="messagerie">';
if( mysqli_num_rows($a) > 0){

echo'
    <div class="img">
    <img src="'.$data['profil_photo'].'" alt="'.$data['profil_name'].' photo">
    </div>

    <div class="username">
        <h1>'.data['profil_username'].'</h1>
        <p>'.data['profil_type'].'</p>
    </div>

';


    while( $data = mysqli_fetch_array($a)){

        echo'
            <div class="img">
            <img src="'.$data['msg_userphoto'].'" alt="'.$data['artiste_name'].' photo">
            </div>
        ';

        $n ++;
    }
}
echo '</div>';

?>