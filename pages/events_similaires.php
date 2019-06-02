<?php

//echo '<h4>events similaires included</h4>';

// afficher des ev similaires si l'on est sur une page event, sinon des ateliers :
if ($data['event_type'] == 1) $type = 1 ;
elseif ($data['event_type'] == 0) $type = 0 ;

    $evSim = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_type = '$type' LIMIT 3");

    if( mysqli_num_rows($evSim) > 0){
        while( $dataSim = mysqli_fetch_array($evSim)){
            echo lien($dataSim['event_titre']). '  ' ;

            echo'
                <article>

                    <div>
                        <a href="fiche_event.php?title_event='.lien($dataSim['event_titre']).'">Lien</a>
                    </div>

                    <h4>'.title($dataSim['event_titre']).'</h4>
                    <p>'.datecard($dataSim['event_date']).'</p>
                    <p>'.tagscard($dataSim['event_tags']).'</p>
                    <p>'.$dataSim['event_prix'].' €</p>

                </article>
            ';
        }
    }

?>