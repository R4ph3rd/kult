<?php

$n = mysqli_query($connect, "SELECT * FROM `news`");


if( mysqli_num_rows($n) > 0){
    while( $dataNews = mysqli_fetch_array($n)){

        echo'
            <article>

                <div>
                    <a href="pages/fiche_artiste.php?name_artiste='.lien($dataNews['news_link']).'">Lien</a>
                    <img src="'.$dataNews['news_img'].'" alt="'.$dataNews['news_img'].' photo">
                </div>

                <h4>'.utf8_encode($dataNews['news_title']).'</h4>
                <p>'.utf8_encode(resume($dataNews['news_resume'])).'</p>

            </article>
        ';
    }
}


?>