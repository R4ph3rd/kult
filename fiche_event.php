<?php
session_start();
include("database.php");
include('functions.php');
include('entete.php');
include('connection.php');

$title_event = $_GET['title_event'];//$_GET['title_event'];
$ev = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_titre = '$title_event' LIMIT 1 ");



$data = mysqli_fetch_assoc($ev) ;
$_SESSION['quelMenu']  = 'mes_evenements';

$_SESSION['user_name'] = utf8_encode($data['event_organisateur']) ;

$_SESSION['title_event'] = $data['event_titre'];
$_SESSION['prix_event'] = $data['event_prix'];
$_SESSION['type_event'] = $data['event_type'];


echo '<div class="maingrid ficheEvent">



        <div class="header">
            <img src="'. $data['event_image'] .'" alt="">
            <a '.wichReturn($data['my_event']).' class="goBackWhite svg"></a>
            <a href="#" id="event_fav" data-role="update" data-id=" $data[event_id]" class="favoris svg '.mesFav($data['event_fav']).'"></a>
        </div>

        <div class="top">
            <div><img src="'. $data['event_image'] .'" alt=""></div>
            <h2>'. utf8_encode($data['event_titre']).'</h2>
            <p>'.  typeEvent($data['event_type']) .'</p>
        </div>




        <section class="gridinfos">
            <div>
            <img src="./assets/icons/calendar.svg" alt="">
            <p>'. datecard($data['event_date']) .'</p>
            </div>
            
            <div>
            <img src="./assets/icons/hour.svg" alt="">
            <p>'. $data['event_heure'] .'</p>
            </div>

            <div>
            <img src="./assets/icons/location.svg" alt="">
            <p>'. utf8_encode($data['event_lieu']) .'</p>
            </div>

            <div>
            <img src="./assets/icons/age.svg" alt="">
            <p class="lowcase">'. publicAge($data['event_public']) .'</p>
            </div>';

            if ($data['my_event'] == 0){
                echo'
            
            <div><a href="./profilUser.php"></a>
            <img src="./assets/icons/orga.svg" alt="">
            <p class="organisou" >'. utf8_encode($data['event_organisateur']) .'</p>
            </div>';
            } 

            echo'

            <div>
            <img src="./assets/icons/tags.svg" alt="">
            <p>'. utf8_encode(tagscard($data['event_tags'])) .'</p>
            </div>
            ';

        if($data['event_type'] == 0 && $data['my_event'] == 0){

            echo'
            <div>
            <img src="./assets/icons/participants.svg" alt="">
            <p class="lowcase">12 / 15 participants</p>
            </div>
            ';

        } /*elseif($data['event_type'] == 1) {
            echo'
            
            <div>
            <p>'. $data['event_prix'] .' €</p>
            </div>

            ';
        }*/

echo'
        </section>


        <section id="desc" >
            <p>'. utf8_encode($data['event_description']) .'</p>
        </section>

        <section id="questions" class="community">
        <h3>Des questions ?</h3>';

        if ($data['my_event'] == 0){
echo'
        <div>
            <div class="userProfil">
                <img src="./assets/users/hubert.jpg" alt="">
            </div>
            <h4>Hubert Bonisseur</h4>
            <p>Lorem ipsum dolor sit amet, consectetur ?</p>
        
            <div class="rep">
                <div class="orga">
                    <img  src="./assets/users/jeanne.jpg" alt="">
                </div>
                <p>1 réponse</p>
                <img class="chevron" src="./assets/icons/chevron.svg" alt="">
            </div>
        
        </div>  
        
        <div>
            <div class="userProfil">
                <img src="./assets/users/Gene.jpg" alt="">
            </div>
            <h4>Gene Guissepe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur ?</p>
        
            <div class="rep">
                <div class="orga">
                    <img src="./assets/users/jeanne.jpg" alt="">
                </div>
                <p>2 réponses</p>
                <img src="./assets/icons/chevron.svg" alt="">
            </div>
        
        </div>  
        
        <div>
            <div class="userProfil">
                <img src="./assets/users/joe.jpg" alt="">
            </div>
            <h4>Joe Derret</h4>
            <p>Lorem ipsum dolor sit amet, consectetur ?</p>
        
            <div class="rep">
            <div class="orga"><img  src="./assets/users/jeanne.jpg" alt=""></div>
                <p>1 réponse</p>
                <img src="./assets/icons/chevron.svg" alt="">
            </div>

        </div>  

            <div class="voir">
                <p>J'."'".'ai une question !</p>
                <img src="./assets/icons/arrow-right-circle-gris.svg" alt="">
            </div>';
        } else {
            echo'
            <p class="mine">Aucune question n'."'".'a encore été posée.</p>';
        }
        
        
   echo'     
        </section>

        <section id="coms" class="community">
        <h3>C'."'".'est vous qui le dites !</h3>';


        if ($data['my_event'] == 0){
echo'
        <div>
            <div class="userProfil">
                <img src="./assets/users/sarah.jpg" alt="">
            </div>
            <h4>Jeanne Pdt</h4>
            <p>Lorem ipsum dolor sit amet, consectetur ?</p>
        
            <div class="rep">
            <div class="orga"><img src="./assets/users/jeanne.jpg" alt=""></div>
                <img src="./assets/icons/heart.svg"  class="heart" alt="">
            </div>
        
        </div> 
        
        <div>
            <div class="userProfil">
                <img src="./assets/users/batispte.jpg" alt="">
            </div>
            <h4>Baptiste Larreau</h4>
            <p>Lorem ipsum dolor sit amet, consectetur ?</p>
        
            <div class="rep">
            <div class="orga"><img src="./assets/users/jeanne.jpg" alt=""></div>
                <img src="./assets/icons/heart.svg"  class="heart" alt="">
            </div>
        
        </div> 
        
        <div>
            <div class="userProfil">
                <img src="./assets/users/lisa.jpg" alt="">
            </div>
            <h4>Lisa Fuelli</h4>
            <p>Lorem ipsum dolor sit amet, consectetur ?</p>
        
            <div class="rep">
            <div class="orga"><img src="./assets/users/jeanne.jpg" alt=""></div>
                <img src="./assets/icons/heart.svg" class="heart" alt="">
            </div>
        
        </div> 
        
        <div class="voir">
            <p>Voir tous les commentaires</p>
            <img src="./assets/icons/arrow-right-circle-gris.svg" alt="">
        </div>
        
        
        </div>  ';

        } else {
            echo'
            <p class="mine">Ton évènement n'."'".'a pas encore reçu de commentaire.</p>
            ';
        }

        echo'
        </section>



    </div>
';

if ($data['my_event'] == 0) include('pages/navbarEvent.php');

echo '
    </body>
    </html>
';


/*


        <section id="similaires">
            <h3>events similaires</h1>
            ';
                include('events_similaires.php') ;
            echo '
            </section>
            */
?>
<script src="js/script.js"></script>

