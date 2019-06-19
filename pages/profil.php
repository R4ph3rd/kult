<?php

$a = mysqli_query($connect, "SELECT * FROM `moi`");
$b = mysqli_query($connect, "SELECT * FROM `evenements`");
$n = 0;

echo '<div class="profil">';
if( mysqli_num_rows($a) > 0){


    $data = mysqli_fetch_array($a);
    
    echo'
        <div class="img">
        <img src="'.$data['profil_photo'].'" alt="'.$data['profil_username'].' photo">
        </div>

        <div class="username">
            <h1>'.$data['profil_username'].'</h1>
            <p>'.$data['profil_type'].'</p>
        </div>

    ';

/*
    while( $datas = mysqli_fetch_array($b)){

        echo'
            <div class="img">
            <img src="'.$data['event_img'].'" alt="my projects" photo">
            </div>
        ';

        $n ++;
}*/
}
echo '</div>';

?>