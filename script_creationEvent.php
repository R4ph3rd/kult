<?php 
session_start();
include("database.php");
include('functions.php');

if(isset($_POST['submit'])){
    $event_titre = $_POST['name']; 
    $event_type = $_POST['type_event']; 
    $event_tags = $_POST['tags'];
    $event_description = $_POST["description"];
    $event_public = $_POST["age"];
    $event_lieu = $_POST["lieu"];
    $event_date = '2019-05-03'; //pas encore fonctionnel
    $event_heure= $_POST["heure"];
    $event_image = $_POST["image"];
    $event_prix = 0;
    $event_organisateur = 'moi';

  

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
                                    event_image='' ";
   

mysqli_query($connect, $arg);

echo $arg;


};

header('Location:index.php');
?>
