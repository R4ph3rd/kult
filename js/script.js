//sript for kult !

$(document).ready(function(){

    let tl = new TimelineMax({paused:true})
    let tlInverse = new TimelineMax({paused:true})
    let tlSearch = new TimelineMax({paused:true})

    tl.staggerTo('#menu', 0, {display:'grid'}, 0)
    tl.staggerTo('#menu > #liens > div > a', 0.1, {opacity:1, transform:'translateX(0)'}, 0.05)

    tlInverse.staggerTo('#menu > #liens > div > a', 0.3, {opacity:0}, 0.1)
    tlInverse.staggerTo('#menu div', 0.1, {opacity:0, height:0}, 0.1)
    tlInverse.to('#menu', 0.3, {display:'none'}, 0.7)


    let sizeSpan = $('.header').width() - 40
    tlSearch.staggerTo('.autres', 0.1, {opacity:0, transform:'translateX(200px)'}, 0.1)
    tlSearch.to('#search', 0.25, {right:0}, 0.1)
    tlSearch.to('.header span', 0.3, {opacity:1,  width: sizeSpan}, 0.1)
    tlSearch.to('.searchPage', 0.3, {opacity:1,  transform:'translateY(0)'}, 0.1)

    /* menu animation */
    $('.menu').click(function(){
        /*$('#menu').removeClass('hideMenu')*/
        tl.play()
        console.log('banane flambée')
    })   

    $('#menu a').click(function(){
        $('#menu').toggle()
    })



    //////// CARROUSEL /////////
    let pointer = $('#affiche > .enAvant > .displayed').attr('id')
    $('#affiche > .carrousel > #' + pointer ).css('opacity',1)

    $('#affiche > .carrousel > svg').click(function(){
        let selected = $(this).attr('id')
  
        $('#affiche > .carrousel > *').css('opacity',0.15)
        $(this).css('opacity',1)

        $('#affiche > .enAvant > .displayed').switchClass('displayed', 'hidden', 500, 'easeInSine')
        $('#affiche > .enAvant > #' + selected).switchClass('hidden','displayed',  500, 'easeInSine')
    })


       //  append values in input fields
    $('a[data-role=update]').click(function(){

        var id  = this.getAttribute('class').split(" ")
        let event_fav

        for(let i = 0 ; i< id.length ; i++){
            if(id[i]=="isFavorite"){
                event_fav = 0
                $(this).removeClass('isFavorite')
            }
            else {
                event_fav = 1
                $(this).addClass('isFavorite')
            }
            console.log(event_fav)
        }

        $('#event_fav').val(event_fav);
    });

  // now create event to get data from fields and update in database 

   $('#save').click(function(){
     var id  = $('#userId').val(); 
     var event_fav =  $('#event_fav').attr('class')

     console.log(event_fav)

      $.ajax({
          url      : 'connection.php',
          method   : 'post', 
          data     : { event_fav : event_fav, id : id },
          success  : function(response){
                        // now update user record in table 
                        $('#event_fav').val(event_fav);

                     }
      });
   });



   let billetPage = false

   $('.billet > *').click(function(){

    if($('.question').text() == 'As-tu pensé à le noter dans ton agenda ?'){
        $(this).attr('href', 'billet.php')
        billetPage = true
   }
   
       $('.sms').css('display','none')
       $('.mark').css('display','grid')

       $('.question').html('As-tu pensé à le noter dans ton agenda ?')

        if( billetPage == false) return false
   })




    
    let cat = $('#events_ateliers .selecteur .listed').text()


    if( cat == 'Je participe'){
        $('.organisation').toggleClass('listDisplayed')
        $('.voir_anciens').html('Voir anciens billets')
    } else if (cat == "J'organise"){
        $('.participation').toggleClass('listDisplayed')
        $('.voir_anciens').html('Voir anciennes annonces')
    }

    $('#events_ateliers .selecteur a').click(function(){
        $('.listed').toggleClass('listed')
        $(this).toggleClass('listed')

        $('.cardsBillets > *').toggleClass('listDisplayed')

        if( $(this).text() == 'Je participe'){
            $('.voir_anciens').html('Voir anciens billets')
        } else if ( $(this).text() == "J'organise"){
            $('.voir_anciens').html('Voir anciennes annonces')
        }
    })


    $('#search').click(function(){
        tlSearch.play()
        $(this).toggleClass('searching')
        $('#searching_input').toggleClass('inSearch')
        $('.searchPage').toggleClass('listHidden')
        $('.maingrid section').toggleClass('listHidden')
    })

    $('.searchPage .selecteur a').click(function(){
        $('.listed').toggleClass('listed')
        $(this).toggleClass('listed')

        $('.participation').toggleClass('listHidden')
        $('.organisation').toggleClass('listHidden')


    })


    $('.header input').click(function(){

        let testEv = ['evenements', 'evenement', 'event', 'évènements', 'évènement', 'événement', 'événements', 'EVENEMENT', 'EVENEMENTS', 'Evenements', 'Evenenement','spectacle', 'theatre', 'théâtre', 'théatre', 'concert', 'musique', 'spectacle']
        let testAt = ['atelier', 'ateliers', 'atliers', 'ATELIER', 'Atelier', 'ATELIERS', 'Ateliers']
        let txt = $(this).val().split(' ')
        console.log(txt)

        for (let i = 0 ; i < testEv.length ; i++){
            for (let j = 0 ; j < testEv.length ; j++){
                if(txt[j] == testEv[i]){
                    $('.organisation').removeClass('listHidden')
                }
            }
        }


        for (let i = 0 ; i < testAt.length ; i++){
            for (let j = 0 ; j < testEv.length ; j++){
                if(txt[j] == testAt[i]){
                    $('.participation').removeClass('listHidden')
                    $('.selecteur > *').toggleClass('listed')
                }
            }
        }
        if (txt.length > 1){
             $('.searchPage .selecteur').removeClass('listHidden')
             $('.viens').removeClass('listHidden')
        }
    })
})



function goBack() {
    window.history.back();
}
