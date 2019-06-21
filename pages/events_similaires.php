<?php

$ev = mysqli_query($connect, "SELECT * FROM `evenements` ");

if( mysqli_num_rows($ev) > 0){

    echo' <div class="events">';
    while( $data = mysqli_fetch_array($ev)){

        echo'
            <article>
                <a href="fiche_event.php?title_event='.lien($data['event_titre']).'"></a>
                
                    <img src="'.$data['event_image'].'" class="frontImg" alt="image of '.$data['event_titre'].'">
               

                <div class="infos">
                    <h4>'.utf8_encode(title($data['event_titre'])).'</h4>
                    <p>'.datecard($data['event_date']).'</p>
                    <p>'.utf8_encode(tagscard($data['event_tags'])).'</p>
                    <p>'.$data['event_prix'].' €</p>
                </div>
                

            </article>
        ';
    }
    echo '</div>';
}


?>

