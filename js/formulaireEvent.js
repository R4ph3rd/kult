let etapes = ['organiser', 'description', 'age', 'lieu', 'salles', 'confirmation', 'date', 'heure', 'image', 'end']
let n = 0

$(document).ready(function(){
    let section = etapes[n]

    // au clic sur la flèche suivante, je change le titre, le lien du return, et je change quelle section est affichée
    if (n != 5){ 
        $('.pass ').click(function(){
            next()
        })
    }


    
    /*$('#maingrid > #age > div > a').click(function(){
        next()
    })*/

    $('.header a').click(function(){
        
        let out = n
        n --
        section = etapes[n]

        title(section)
        newForm(n, out)

        return false
    })

    $('#maingrid > form > .age > *').delay(800).click(function(){
        next()
    })

    $('#maingrid > form > .confirmation > *').click(function(){
        console.log('la blanquette est boooonne')
        next()
    })

    $('#maingrid > form > .heure > .timer > select > option').click(function(){
        let value = $(this).attr('value')

        $('#maingrid > form > .heure > .timer > input').attr('value', value)
    })
    
})


function title(t){
    let changeT
    if (t == etapes[0]) changeT = "Que veux-tu organiser ?"
    if (t == etapes[1]) changeT = "Décris-nous ton idée."
    if (t == etapes[2]) changeT = "Protégeons la naïveté de nos enfants ! Si besoin, définis une limite d'âge."
    if (t == etapes[3]) changeT = "Où souhaites-tu retrouver tes kulters ?"
    if (t == etapes[4]) changeT = "Ces lieux pourraient être disponibles :"
    if (t == etapes[5]) changeT = "Parfait ! Nous attendons ta confirmation du lieu de rendez-vous pour finaliser la publication de l’annonce."
    if (t == etapes[6]) changeT = "Quand souhaites-tu retrouver tes kulters ?"
    if (t == etapes[7]) changeT = "À quelle heure souhaites-tu les retrouver ?"
    if (t == etapes[8]) changeT = "As-tu une image à proposer ? <br> Nous pouvons nous en charger."
    if (t == etapes[9]) changeT = "Parfait ! <br> Ton annonce sera publiée dans quelques instants."

    console.log('new title : ' + changeT )

    $('#maingrid > h3').html(changeT)
}

function newForm(n, out){
    //hide old section form
    $('#' + etapes[out]).addClass('notForm')
    //display new section form
    $('#' + etapes[n]).removeClass('notForm')
    

    //if needed, change pass button
    if (n == 1 || n == 3){
        $('.pass .svg').addClass('notForm')

        $('.pass .button').removeClass('notForm')
        $('.pass').addClass('redButton')

        if(n == 3){
            $('.pass .button').html("J'ai déjà un lieu")
            $('.pass .button').css('text-transform','none')
        }

    } else if(n == 5){

        $('.pass .svg').addClass('notForm')
        $('.pass .button').addClass('notForm')
        $('.pass').removeClass('redButton')

    } else if(n == 6){
        $('.pass .svg').removeClass('notForm')
        $('.pass').removeClass('redButton')
        $('.pass .button').addClass('notForm')
        $('.pass').addClass('passAgenda')
          
    } else if(n == 8){

        $('.imageL').removeClass('notForm')
        $('.imageL').css('display', 'intial')
          
    } else if(n == 9){

        $('.imageL').html('Je suis vraiment trop fort')
        $('.submit').removeClass('notForm')
          
    } else {

        $('.pass .svg').removeClass('notForm')
        $('.pass').removeClass('redButton')
        $('.pass .button').addClass('notForm')
        $('.imageL').addClass('notForm')
        $('.passAgenda').removeClass('passAgenda')

    }
}


function next(){

    let out = n
    n ++
    section = etapes[n]

    //$(this).attr('href', section)
    title(section)
    newForm(n, out)

    console.log($('#maingrid > h3').html())
    console.log(n)

    return false
}


function goBack() {
    window.history.back();
  }