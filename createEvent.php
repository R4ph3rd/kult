<?php 
session_start();
include("database.php");
include('functions.php');
include('entete.php');

$etape = 0;

echo '
    <div id="maingrid">

        <div class="header">
            <a href="" class="goBack svg">
            </a>
        </div>
    
        <h3>Que veux-tu organiser ?</h3>
        <form action="script_creationEvent.php" method="post">


        <section id="organiser" class="organiser">
        <div class="flexbutton big">
                <div>
                        <input type="radio" value="atelier" name="type_event" id="atelier" class="buttonAppearance">
                        <label for="atelier" style="left:25%" >atelier</label>
                </div>
                <div>
                    <input type="radio" value="évènement" name="type_event" id="évènement" class="buttonAppearance">
                    <label for="évènement"   >évènement</label>
                </div>
            </div>

            <div class="flexbutton ov-x">
                <div>
                    <input type="checkbox" value="débat" id="débat" class="buttonAppearance">
                    <label for="débat">débat</label>
                </div>
                <div>
                    <input type="checkbox" value="théâtre" id="théâtre" class="buttonAppearance">
                    <label for="théâtre">théâtre</label>
                </div>
                <div>
                    <input type="checkbox" value="humour" id="humour" class="buttonAppearance">
                    <label for="humour">humour</label>
                </div>
                <div>
                    <input type="checkbox" value="improvisation" id="improvisation" class="buttonAppearance">
                    <label for="improvisation">impro</label>
                </div>
                <div>
                    <input type="checkbox" value="stand-up" id="stand-up" class="buttonAppearance">
                    <label for="stand-up">stand-up</label>
                </div>             
            </div>

            <input type="text" class="textArea" name="name" placeholder="Entrer le nom de l'."'".'atelier">



        </section>

        <section id="description" class="notForm description">

        <label class="field a-field a-field_a2 page__field">
        <input class="field__input a-field__input" placeholder="Une description de l'."'".'atelier" required>
        <span class="a-field__label-wrap">
        </span>
      </label>
            
        </section>


        <section id="age" class="notForm">

                <div id="b8">
                    
                    <input type="radio" value="8" name="age" id="8" class="buttonAppearance">
                    <label for="atelier"  >8 ans</label>
                    
                </div>

                <div id="b12">
                    
                    <input type="radio" value="12" name="age" id="12" class="buttonAppearance">
                    <label for="évènement" >12 ans</label>
                    
                </div>

                <div id="b16">
                    
                    <input type="radio" value="16" name="age" id="16" class="buttonAppearance">
                    <label for="évènement"   >16 ans</label>
                    
                </div>

                <div id="b18">
                    
                    <input type="radio" value="18" name="age" id="18" class="buttonAppearance">
                    <label for="évènement"   >18 ans</label>
                    
                </div>

                <div id="tous">
                    
                    <input type="radio" value="tous" name="age" id="tous" class="buttonAppearance">
                    <label for="évènement"   >tous publics</label>

                </div>
            

        </section>

        <section id="lieu" class="notForm">
        </section>

        <section id="salles" class="notForm">
        </section>

        <section id="confirmation" class="notForm">
        </section>

        <section id="date" class="notForm">
        </section>

        <section id="heure" class="notForm">
        </section>

        <section id="image" class="notForm">
        </section>

        <section id="end" class="notForm">
        </section>

            <input type="submit" name="submit" class="notForm" value="Submit">
        </form>

        <div class="pass">     
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