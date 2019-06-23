<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');
include('pages/menu.php');
//include('pages/navbar.php');


$menu = $_SESSION['quelMenu'] ;
$ev = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_type = 1");
$at = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_type = 0");
$mes_events = mysqli_query($connect, "SELECT * FROM `evenements` WHERE my_event = 1");



//body
include('pages/corps.php');

echo '<section id="events_ateliers">
            <h2>Mes évènements & ateliers</h2>


            <div class="selecteur">
                <a href="#" ';
                if($menu == 'mes_participations') echo' class="listed"' ;
                echo'>Je participe</a>

                <a href="#"';
                if($menu == 'mes_evenements') echo 'class="listed"';
                echo'>J'."'".'organise</a>
            </div>
        
        <div class="cardsBillets">
            <div class="participation">
        ';
        
        if( mysqli_num_rows($ev) > 0){
            $data = mysqli_fetch_array($ev);

            $_SESSION['title_event'] = $data['event_titre'] ;
            $_SESSION['type_event'] = $data['event_type'] ;

        
                echo'
                    <article>
                        <a href="billet.php"></a>
                        
                            <img src="'.$data['event_image'].'" class="frontImg" alt="image of '.$data['event_titre'].'">
                       
        
                        <div class="infos">
        
                            <h4>'.utf8_encode(title($data['event_titre'])).'</h4>
        
                            <div class="horaires">
        
                                <div>
                                    <img src="./assets/icons/calendar.svg" alt="">
                                    <p>'.datecard($data['event_date']).'</p>
                                </div>
        
                                <div>
                                    <img src="./assets/icons/hour.svg" alt="">
                                    <p>'.$data['event_heure'].'</p>
                                </div>
        
                            </div>
        
                            <div>
                                <img src="./assets/icons/location.svg" alt="">
                                <p>'.utf8_encode($data['event_lieu']).'</p>
                            </div>
        
                            <div>
                                <img src="./assets/icons/tags.svg" alt="">
                                <p>'.utf8_encode( tagscard($data['event_tags']) ).'</p>
                            </div>
                            
                        </div>
                        
        
                    </article>
                ';
            }
        
        
        
        if( mysqli_num_rows($at) > 0 ){
            $data = mysqli_fetch_array($at);
        
                echo'
                    <article>
                        <a href="billet.php"></a>
                        
                            <img src="'.$data['event_image'].'" class="frontImg" alt="image of '.$data['event_titre'].'">
                       
        
                        <div class="infos">
        
                            <h4>'.utf8_encode(title($data['event_titre'])).'</h4>
        
                            <div class="horaires">
            
                                <div>
                                    <img src="./assets/icons/calendar.svg" alt="">
                                    <p>'.datecard($data['event_date']).'</p>
                                </div>

                            <div>
                                <img src="./assets/icons/hour.svg" alt="">
                                <p>'.$data['event_heure'].'</p>
                            </div>
        
                            </div>
        
                            <div>
                                <img src="./assets/icons/location.svg" alt="">
                                <p>'.utf8_encode($data['event_lieu']).'</p>
                            </div>
        
                            <div>
                                <img src="./assets/icons/tags.svg" alt="">
                                <p>'.utf8_encode( tagscard($data['event_tags']) ).'</p>
                            </div>
                            
                        </div>
                        
        
                    </article>
                ';
            }
   echo'     
        </div>
        
        <div class="organisation">';
        
        
        if( mysqli_num_rows($mes_events) > 0){
        
        while( $dataz = mysqli_fetch_array($mes_events)){
        
            echo'
            <article>
                <div class="notif"></div>
                        <a href="fiche_event.php?title_event='.lien($dataz['event_titre']).'"></a>
                        
                            <img src="'.$dataz['event_image'].'" class="frontImg" alt="image of '.$dataz['event_titre'].'">
                       
        
                        <div class="infos">
        
                            <h4>'.utf8_encode(title($dataz['event_titre'])).'</h4>
        
        
                                <div>
                                    <img src="./assets/icons/calendar.svg" alt="">
                                    <p>'.datecard($dataz['event_date']).'</p>
                                </div>
        
                                <div>
                                    <img src="./assets/icons/hour.svg" alt="">
                                    <p>'.$dataz['event_heure'].'</p>
                                </div>
        
        
                            <div>
                                <img src="./assets/icons/participants.svg" alt="">
                                <p>3 / 10</p>
                            </div>
        
                            <div>
                                <img src="./assets/icons/location.svg" alt="">
                                <p>'.utf8_encode( $dataz['event_lieu'] ).'</p>
                            </div>
                            
                        </div>
                        
        
                    </article>
                ';
            
        }
    }

    echo'    
        </div>
        
        <div id="voir_anciens">
            <p class="voir_anciens"></p>
            <img src="./assets/icons/chevron-dark.svg" alt="">
        </div>

</section>';




echo '</div>';

echo' </body>
    </html>
';

?>


<script src="js/script.js"></script>
