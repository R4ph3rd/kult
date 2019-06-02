<?php
session_start();
include("database.php");
include('functions.php');

$ev = mysqli_query($connect, "SELECT * FROM `ev_cards`");

echo '<h1>ev_cards</h1>';

if( mysqli_num_rows($ev) > 0){
    while( $data = mysqli_fetch_array($ev)){
        echo'
            <article>

                <div>
                    <a href="'.lien($data['titre']).'"></a>
                </div>

                <h4>'.title($data['titre']).'</h4>
                <p>'.datecard($data['date']).'</p>
                <p>'.tagscard($data['tags']).'</p>
                <p>'.$data['prix'].' €</p>

            </article>
        ';
    }
}


?>

