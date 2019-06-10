let etapes = ['organiser', 'description', 'age', 'lieu', 'salles', 'confirmation', 'date', 'heure', 'image', 'end']
let n = 0

$(document).ready(function(){

    let section = etapes[n]

    // au clic sur la flèche suivante, je change le titre, le lien du return, et je change quelle section est affichée
    $('.pass a').click(function(){
        //console.log('prout : ' + section)
        $('header a').attr('href',section)

        //console.log('new section : ' + section)
        console.log($('#maingrid > h3').html())
        
        let out = n
        n ++
        section = etapes[n]

        title(section)
        newForm(n, out)

        return false
    })


    
    $('#maingrid > #age > div > a').click(function(){

        $(this).attr('href', section)

        let out = n
        n ++
        section = etapes[n]

        title(section)
        newForm(n,out)
        
        return false
    })

    $('.header a').click(function(){
        
        let out = n
        n --
        section = etapes[n]

        title(section)
        newForm(n, out)

        return false
    })

    $('.maingrid > #age > input, label').click(function(){
        let out = n
        n ++
        section = etapes[n]

        title(section)
        newForm(n, out)
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
        $('.pass').addClass('passButton')

        if(n == 3){
            $('.pass .button').html("J'ai déjà un lieu")
            $('.pass .button').css('text-transform','none')
        }
        
    } else if(n == 2){

        $('.pass .svg').addClass('notForm')
        $('.pass .button').addClass('notForm')
        $('.pass').removeClass('passButton')
        
    } else {
        $('.pass .svg').removeClass('notForm')
        $('.pass').removeClass('passButton')
        $('.pass .button').addClass('notForm')
    }
}