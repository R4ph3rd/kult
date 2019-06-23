<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');


$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

echo '
    <div id="maingrid">

        <div class="header">
            <a href="" onclick="goBack()" class="goBack svg">
            </a>
        </div>
    
        <h3>Que veux-tu organiser ?</h3>
        <form action="script_creationEvent.php" method="post" enctype="multipart/form/data">


        <section id="organiser" class="organiser">
        <div class="flexbutton big">
                <div>
                        <input type="radio" value="0" name="type_event" id="atelier" class="buttonAppearance">
                        <label for="atelier" style="left:25%" >atelier</label>
                </div>
                <div>
                    <input type="radio" value="1" name="type_event" id="évènement" class="buttonAppearance">
                    <label for="évènement"   >évènement</label>
                </div>
            </div>

            <div class="flexbutton ov-x">
                <div>
                    <input type="checkbox" value="débat" name="tags" id="débat" class="buttonAppearance">
                    <label for="débat">débat</label>
                </div>
                <div>
                    <input type="checkbox" value="théâtre" name="tags" id="théâtre" class="buttonAppearance">
                    <label for="théâtre">théâtre</label>
                </div>
                <div>
                    <input type="checkbox" value="humour" name="tags" id="humour" class="buttonAppearance">
                    <label for="humour">humour</label>
                </div>
                <div>
                    <input type="checkbox" value="improvisation" name="tags" id="improvisation" class="buttonAppearance">
                    <label for="improvisation">impro</label>
                </div>
                <div>
                    <input type="checkbox" value="stand-up" name="tags" id="stand-up" class="buttonAppearance">
                    <label for="stand-up">stand-up</label>
                </div>             
            </div>

            <input type="text" class="textArea" name="name" placeholder="Entrer le nom de l'."'".'atelier">



        </section>

        <section id="description" class="notForm description">

        <label class="field a-field a-field_a2 page__field">
        <input name="description" class="field__input a-field__input" placeholder="Une description de l'."'".'atelier" required>
        <span class="a-field__label-wrap">
        </span>
      </label>
            
        </section>


        <section id="age" class="notForm age">

                <div id="b8">
                    
                    <input type="radio" value="0" name="age" id="8" class="buttonAppearance">
                    <label for="atelier"  >8 ans</label>
                    
                </div>

                <div id="b12">
                    
                    <input type="radio" value="1" name="age" id="12" class="buttonAppearance">
                    <label for="évènement" >12 ans</label>
                    
                </div>

                <div id="b16">
                    
                    <input type="radio" value="2" name="age" id="16" class="buttonAppearance">
                    <label for="évènement"   >16 ans</label>
                    
                </div>

                <div id="b18">
                    
                    <input type="radio" value="3" name="age" id="18" class="buttonAppearance">
                    <label for="évènement"   >18 ans</label>
                    
                </div>

                <div id="tous">
                    
                    <input type="radio" value="4" name="age" id="tous" class="buttonAppearance">
                    <label for="évènement"   >tous publics</label>

                </div>
            

        </section>

        <section id="lieu" class="notForm lieu">

        <input type="text" class="textArea" name="lieu" placeholder="Entrer un lieu">

        </section>

        <section id="salles" class="notForm salles">


            <article class="lieux">

            <img src="./assets/salles/crucible.jpg" alt="">

            <div class="salleInfos">
                <h4>Crucible</h4>

                <div>
                    <img src="./assets/icons/phone.svg" alt="">
                    <p>05 61 24 48 65</p>
                </div>

                <div>
                    <img src="./assets/icons/mail.svg" alt="">
                    <p>conctact@crucible.com</p>
                </div>

                <div>
                    <img src="./assets/icons/web.svg" alt="">
                    <p>crucible.com</p>
                </div>
            </div>

            </article>


            <article class="lieux">

            <img src="./assets/salles/anjou.jpg" alt="">

            <div class="salleInfos">
                <h4>salle des fêtes</h4>

                <div>
                    <img src="./assets/icons/phone.svg" alt="">
                    <p>02 51 45 96 85</p>
                </div>

                <div>
                    <img src="./assets/icons/mail.svg" alt="">
                    <p>contact@mairiedanjou.com</p>
                </div>

                <div>
                    <img src="./assets/icons/web.svg" alt="">
                    <p>mairiedanjou.fr</p>
                </div>
            </div>

            </article>


            <article class="lieux">

            <img src="./assets/salles/pigeonnier.jpg" alt="">

            <div class="salleInfos">
                <h4>vieux pigeon...</h4>

                <div>
                    <img src="./assets/icons/phone.svg" alt="">
                    <p>06 48 76 48 65</p>
                </div>

                <div>
                    <img src="./assets/icons/mail.svg" alt="">
                    <p>marie.lotie@hotmail.com</p>
                </div>

                <div>
                    <img src="./assets/icons/web.svg" alt="">
                    <p>fontenilles.fr</p>
                </div>
            </div>

            </article>


            <article class="lieux">

            <img src="./assets/salles/ferrailleur.jpg" alt="">

            <div class="salleInfos">
                <h4>le ferrailleur</h4>

                <div>
                    <img src="./assets/icons/phone.svg" alt="">
                    <p>05 96 78 41 12</p>
                </div>

                <div>
                    <img src="./assets/icons/mail.svg" alt="">
                    <p>conctact@ferrailleur.com</p>
                </div>

                <div>
                    <img src="./assets/icons/web.svg" alt="">
                    <p>ferrailleur.com</p>
                </div>
            </div>

            </article>
        </section>

        <section id="confirmation" class="notForm confirmation">

            <div class="redButton">         
                <a href="#date" class="button">Confirmer le lieu</a>   
            </div>

        </section>

        <section id="date" class="notForm date">

        <div class="view">
            <object type="image/svg+xml" data="../assets/icons/list.svg" class="list"></object>
            <object type="image/svg+xml" data="../assets/icons/calendar.svg" class="table" ></object>
        </div>
    
        <div class="days">
            <p>lun.</p>
            <p>mar.</p>
            <p>mer.</p>
            <p>jeu.</p>
            <p>ven.</p>
            <p>sam.</p>
            <p>dim.</p>        
        </div>
    
        <div class="agenda">
        
        ';

        for ($i = 5; $i < count($months) ; $i ++){

            echo'<h4>'.$months[$i].'</h4>       

            <div class="numbers '.$months[$i].'">';

            $maxDays = 30 ;
            if ($i % 2 == 0) $maxDays = 31 ;
            if ($i == 1) $maxDays = 28 ;
            
            for ($j = 1 ; $j <= $maxDays ; $j ++){

                echo' <p '.dayPassed($j, $i).'>'.$j.'</p>';
            }
    /*
                    echo'  
                <div>          
                <input type="checkbox" value="'.$j.'" name="date"  class="buttonAppearance dateCheck">
                <label for="évènement" '.dayPassed($j, $i).'>'.$j.'</label> 
                </div>
                ';*/
            echo'</div>';

        }

        // a year complete

        for ($i = 0; $i < 5 ; $i ++){

            echo'<h4>'.$months[$i].'</h4>       

            <div class="numbers '.$months[$i].'">';

            $maxDays = 30 ;
            if ($i % 2 == 0) $maxDays = 31 ;
            if ($i == 1) $maxDays = 28 ;
            
            for ($j = 1 ; $j <= $maxDays ; $j ++){

                echo' <p '.dayPassed($j, $i).'>'.$j.'</p>';
            }
    
            echo'</div>';

        }

    echo'
            </div>    
        </section>

        <section id="heure" class="notForm heure">

            <div class="timer">
            <input type="time" class="" name="heure" value="19:00">
            <select name="time" class="timeList" id="timeselect">
        ';

            for ($i = 1 ; $i <= 24 ; $i++){

                if ($i <10) $i = '0'.$i ;
                echo'<option value="'.$i.':00">'.$i.':00</option>';

            }
            
    echo'
    
                </select>
            </div>

        </section>

        <section id="image" class="notForm image">

            <div class="redButton">         
                <input type="file" class="buttonAppearance upload">
                <label>
                    <img src="../assets/icons/upload.svg" >
                    <p>Uploader une image</p>
                </label>
            </div>
        </section>

        <section id="end" class="notForm end">
        </section>

            <input type="submit" name="submit" class="notForm submit" value="Submit">
        </form>

        <div class="pass">     
            <a href="#end" class="  imageL notForm"> Vous le ferez très bien à ma place </a>
            <a href="#description" class="svg next"></a>      
            <a href="#age" class="button notForm">confirmer</a>   
        </div>
    </div>
';

/*

 <--!

        -->*/
?>

<script src="js/formulaireEvent.js"></script>
