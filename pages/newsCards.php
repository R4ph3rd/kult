<?php

$n = mysqli_query($connect, "SELECT * FROM `news`");


if( mysqli_num_rows($n) > 0){
    while( $dataNews = mysqli_fetch_array($n)){

        echo'
            <article id="newscards">

                    <img src="'.$dataNews['news_img'].'" alt="">

                <div id="droite">
                        <h4>'.utf8_encode($dataNews['news_title']).'</h1>
                        <p>'.utf8_encode(resume($dataNews['news_resume'])).'</p>
                    <a href="'.lien($dataNews['news_link']).'" id="articlelien">Lire l'."'".'article  ></a>
                </div>
            </article>
        ';
    }
}


?>

