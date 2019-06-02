<?php
session_start();
include("../database.php");
include('../functions.php');
include('navbarEvent.php');

echo '<h2> fiche_event '.$_GET['id_page'].' </h2>';
echo $_GET['title_event'];

$title_event = 'levez-vous';//$_GET['title_event'];

$ev = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_titre = $title_event LIMIT 1 ");
//$data = mysqli_fetch_row($ev) ;

echo '<h1>PORUT</h1>' ;
echo $data['event_titre'] ;
echo '<h1>PORUT</h1>' ;

?>

<div class="headerEvent">
    <div class="banniere">
        <div>
            //icons here (return, markup)
        </div>
        <img src="" alt=""> // ou utiliser background-img en css, à voir le plus pratique
    </div>

    <img src="" alt=""> //event img here
    <h2><?php $ev['event_titre'] ?></h2> //numéro de h à voir 
</div>

<div id="maingrid">

    <section class="gridinfos">
        svg //icon here
        <p><?php datecard($ev['event_date']) ?></p>
        svg //icon here
        <p><?php $ev['event_heure'] ?></p>
        svg //icon here
        <p><?php $ev['event_lieu'] ?></p>
        svg //icon here
        <p><?php //publics($ev['event_public']) ?></p>
        svg //icon here
        <p><?php $ev['event_organisateur'] ?></p>
        svg //icon here
        <p><?php tagscard($ev['event_tags']) ?></p>
    </section>

    <section id="desc">
        <p>Lorem ipsum</p>
    </section>

    <section id="questions">
        
    </section>

    <section id="coms">
        
    </section>

    <section id="similaires">
        <h3>events similaires</h1>
        <?php include('events_similaires.php') ?>
    </section>

</div>


