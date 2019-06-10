<?php

$a = mysqli_query($connect, "SELECT * FROM `artistes`");


if( mysqli_num_rows($a) > 0){
    while( $data = mysqli_fetch_array($a)){

        echo'
            <article>
    
                <a href="pages/fiche_artiste.php?name_artiste='.lien($data['artiste_name']).'">
                    <img src="'.$data['artiste_photo'].'" alt="'.$data['artiste_name'].' photo">
                    
                    <div>
                        <h4>'.$data['artiste_name'].'</h4>
                        <p>'.tagscard($data['artiste_tags']).'</p>
                    </div>
                </a>
            </article>
        ';
    }
}


?>