<?php

$ev = mysqli_query($connect, "SELECT * FROM `evenements`");

echo '<section id="events_cards">';
if( mysqli_num_rows($ev) > 0){
    while( $data = mysqli_fetch_array($ev)){

        echo'
            <article>

            <img src="'.$data['event_image'].'" class="frontImg" alt="image of '.$data['event_titre'].'">
            
                <h4>'.title($data['event_titre']).'</h4>
                <h6>'.datecard($data['event_date']).'</h6>
                <p>'.tagscard($data['event_tags']).'</p>
                <h5>'.$data['event_prix'].' €</h5>
                
                <div>
                    <a href="pages/fiche_event.php?title_event='.lien($data['event_titre']).'">Lien</a>
                </div>

                

            </article>
        ';
    }
}
echo '</section>';

?>

