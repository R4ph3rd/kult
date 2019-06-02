<?php
session_start();
include("../database.php");
include('../functions.php');
include('entete.php');

$title_event = $_GET['title_event'];//$_GET['title_event'];
$ev = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_titre = '$title_event' LIMIT 1 ");
$data = mysqli_fetch_assoc($ev) ;


echo '<h1>event selectionné :</h1>' ;
echo '<h2>'.$data['event_titre'].'</h2>' ;



echo '
    <div class="headerEvent">
        <div class="banniere">
            <div>
                //icons here (return, markup)
            </div>
            <img src="" alt=""> // ou utiliser background-img en css, à voir le plus pratique
        </div>

        <img src="" alt=""> //event img here
        <h2>'. $data['event_titre'] .'</h2> //numéro de h à voir 
        <p>'. typeEvent($data['event_type']) .'</p>
    </div>

    <div id="maingrid">

        <section class="gridinfos">
            svg //icon here
            <p>'. datecard($data['event_date']) .'</p>
            svg //icon here
            <p>'. $data['event_heure'] .'</p>
            svg //icon here
            <p>'. $data['event_lieu'] .'</p>
            svg //icon here
            <p>'. publicAge($data['event_public']) .'</p>
            svg //icon here
            <p>'. $data['event_organisateur'] .'</p>
            svg //icon here
            <p>'. tagscard($data['event_tags']) .'</p>
        </section>

        <section id="desc">
            <p>'. $data['event_description'] .'</p>
        </section>

        <section id="questions">
            
        </section>

        <section id="coms">
            
        </section>



        <section id="similaires">
            <h3>events similaires</h1>
            ';
                include('events_similaires.php') ;
            echo '
            </section>

    </div>
';

include('navbarEvent.php');

echo '
    </body>
    </html>
';

?>