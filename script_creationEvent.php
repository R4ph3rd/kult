<?php 
session_start();
include("database.php");
include('functions.php');

$name = array('default', 'default1', 'default2');

if(isset($_POST['submit'])){
    $event_titre = utf8_decode($_POST['name']); 
    $event_type = utf8_decode($_POST['type_event']); 
    $event_tags = utf8_decode($_POST['tags']);
    $event_description = utf8_decode($_POST["description"]);
    $event_public = $_POST["age"];
    $event_lieu = utf8_decode($_POST["lieu"]);
    $event_date = '2019-07-03'; //pas encore fonctionnel
    $event_heure= $_POST["heure"];
    $event_image = './assets/events/'.$name[random_int(2)].'.jpg';
    $event_fav = 0 ;
    $my_event = 1;

    if(isset($_POST['event_image'])){
        $event_image = $_POST["image"] ; 
    }

    $event_prix = 0;
    $event_organisateur = 'moi';

    //include('images.php');

    $arg =  "INSERT INTO evenements (event_titre, event_type, event_date, event_heure, event_lieu, event_organisateur, event_public, event_tags, event_prix,event_description, event_image, event_fav, my_event)
             VALUES ('$event_titre','$event_type','$event_date', '$event_heure', '$event_lieu', '$event_organisateur', '$event_public', '$event_tags', '$event_prix', '$event_description', '$event_image', '$event_fav', $my_event)";
/*
   $arg =  "INSERT INTO evenements SET event_titre='".$event_titre."',
                                    event_type='".$event_type."',
                                    event_date='".$event_date."',
                                    event_heure='".$event_heure."',
                                    event_lieu='".$event_lieu."',
                                    event_organisateur='".$event_organisateur."',
                                    event_public='".$event_public."',
                                    event_tags='".$event_tags."',
                                    event_prix='".$event_prix."',
                                    event_description='".$event_description."',
                                    event_image='".$event_image."' ";
                                    */
   

mysqli_query($connect, $arg);

echo $arg;


};

header('Location:fiche_event.php?title_event='.$event_titre.'');
?>
