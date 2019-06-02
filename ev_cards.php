<?php
include("database.php");
include('functions.php');

$ev = mysqli_query($connect, "SELECT * FROM `evenements`");

//echo '<h1>ev_cards</h1>';

if( mysqli_num_rows($ev) > 0){
    while( $data = mysqli_fetch_array($ev)){
        echo lien($data['event_titre']). '  ' ;

        echo'
            <article>

                <div>
                    <a href="pages/fiche_event.php?title_event='.lien($data['event_titre']).'">Lien</a>
                </div>

                <h4>'.title($data['event_titre']).'</h4>
                <p>'.datecard($data['event_date']).'</p>
                <p>'.tagscard($data['event_tags']).'</p>
                <p>'.$data['event_prix'].' €</p>

            </article>
        ';

        echo publicAge($data['event_public']) ;
    }
}


?>

