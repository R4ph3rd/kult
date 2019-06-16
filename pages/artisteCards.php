<?php

$a = mysqli_query($connect, "SELECT * FROM `artistes`");

echo '<div class="artistes_enavant">';
if( mysqli_num_rows($a) > 0){
    while( $data = mysqli_fetch_array($a)){

        echo'
            <article id="card_artiste">

                <a href="pages/fiche_artiste.php?name_artiste='.lien($data['artiste_name']).'">
                        <div class="img">
                        <img src="'.$data['artiste_photo'].'" alt="'.$data['artiste_name'].' photo">
                        </div>

                        <div>
                            <h4>'.$data['artiste_name'].'</h4>
                            <p>'.tagscard($data['artiste_tags']).'</p>
                        </div>
                </a>

            </article>
        ';
    }
}
echo '</div>';

?>