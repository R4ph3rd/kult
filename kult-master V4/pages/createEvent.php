<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');

$etape = 0;

echo '
    <div class="header">
    //svg return here
    </div>

    <div id="maingrid">
        <h3>'.titleCreate($etape).'</h3>
        <form action="script_creationEvent.php" method="post">
    ';

            if ($etape == 0) include('create_event/organiser.php') ;
            if ($etape == 1) include('create_event/description.php') ;
            if ($etape == 2) include('create_event/age.php') ;
            if ($etape == 3) include('create_event/lieu.php') ;
            if ($etape == 4) include('create_event/salles_dispo.php') ;
            if ($etape == 5) include('create_event/confirmation.php') ;
            if ($etape == 6) include('create_event/date.php') ;
            if ($etape == 7) include('create_event/heure.php') ;
            if ($etape == 8) include('create_event/image.php') ;
            if ($etape == 9) include('create_event/end.php') ;

            if ($etape == 8) echo '<p>Vous le ferez très bien à ma place.</p>';
            if ($etape == 9) echo '<p>Je suis vraiment trop fort.</p>';

echo '
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
';


?>