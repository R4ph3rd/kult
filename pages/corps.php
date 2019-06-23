<?php


$searchEvent = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_type = 1");

$searchAtelier = mysqli_query($connect, "SELECT * FROM `evenements` WHERE event_type = 0");

echo '<div class="maingrid">
            <div class="header">
                <a href="#menu" class="menu svg"></a>

                <div>
                    <a href="#recherche" id="search" class="search svg"></a>  
                    <a href="mesMessages.php" class="chat svg autres"></a>
                    <a href="" class="notifs svg autres"></a>
                </div>
                <div id="searching_input">
                    <label class="">
                    <input class="" type="text" placeholder = "Entre un nom, un lieu, une date..." >
                </div>
                <span></span>
            </div>

            <div class="searchPage listHidden">
                <div class="selecteur listHidden">
                    <a href="#" >ateliers</a>
                    <a href="#" class="listed">évènements</a>
                </div>


                <div class="organisation listHidden" id="evenements" >';
                        
                        
                if( mysqli_num_rows($searchEvent) > 0){

                while( $dataSearch = mysqli_fetch_array($searchEvent)){

                    echo'
                    <article>
                                <a href="fiche_event.php?title_event='.lien($dataSearch['event_titre']).'"></a>
                                
                                    <img src="'.$dataSearch['event_image'].'" class="frontImg" alt="image of '.$dataSearch['event_titre'].'">
                            

                                <div class="infos">

                                    <h4>'.utf8_encode(title($dataSearch['event_titre'])).'</h4>

                                    <p class="dateSearch">'.datecard($dataSearch['event_date']).'</p>
                                
                                    <p>'.utf8_encode( tagscard($dataSearch['event_tags']) ).'</p>
             
                                    <p class="prixSearch">'.$dataSearch['event_prix'].' €</p>
                                    
                                </div>
                                

                            </article>
                        ';
                    
                }
    }

    
echo'
        </div>

        <div class="participation listHidden " id="ateliers">';
                        
                        
        if( mysqli_num_rows($searchAtelier) > 0){

        while( $dataSearchA = mysqli_fetch_array($searchAtelier)){

            echo'
            <article>
                        <a href="fiche_event.php?title_event='.lien($dataSearchA['event_titre']).'"></a>
                        
                            <img src="'.$dataSearchA['event_image'].'" class="frontImg" alt="image of '.$dataSearchA['event_titre'].'">
                    

                        <div class="infos">

                            <h4>'.utf8_encode(title($dataSearchA['event_titre'])).'</h4>

                            <p class="dateSearch">'.datecard($dataSearchA['event_date']).'</p>

                            <p >'.utf8_encode( $dataSearchA['event_lieu'] ).'</p>
                        
                            <p>'.utf8_encode( tagscard($dataSearchA['event_tags']) ).'</p>
     
                            
                        </div>
                        

                    </article>
                ';
            
        }
}

echo'
    </div>
    </div>
';

?>
