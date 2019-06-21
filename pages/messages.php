<?php

$a = mysqli_query($connect, "SELECT * FROM `messagerie`");
$n = 0;

echo '<div class="messagerie">';
if( mysqli_num_rows($a) > 0){
    while( $data = mysqli_fetch_array($a)){

        echo'
            <article id="message" class="'.readen($n).'" >

                <a href="pages/fiche_artiste.php?name_artiste='.lien($data['artiste_name']).'"></a>
                        <div class="img">
                        <img src="'.$data['msg_userphoto'].'" alt="'.$data['artiste_name'].' photo">
                        </div>

                        <div>
                            <div>
                                <h4>'.$data['msg_username'].'</h4>
                                <p class="date">'.datecard($data['msg_date']).'</p>
                            </div>
                            <p class="resume">'.utf8_encode(parser($data['msg_content'], 'msg')).'</p>
                        </div>
                
                        <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="3"/>
                        </svg>
            </article>
        ';

        $n ++;
    }
}
echo '</div>';

?>