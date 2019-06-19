//sript for kult !

$(document).ready(function(){

    let tl = new TimelineMax({paused:true})
    let tlInverse = new TimelineMax({paused:true})

    tl.staggerTo('#menu', 0, {display:'grid'}, 0)
    tl.staggerTo('#menu div', 0.2, {opacity:1, height:'100%'}, 0.08)
    tl.staggerTo('#menu > #liens > div > a', 0.1, {opacity:1, x:0}, 0.1)

    tlInverse.staggerTo('#menu > #liens > div > a', 0.3, {opacity:0}, 0.1)
    tlInverse.staggerTo('#menu div', 0.1, {opacity:0, height:0}, 0.1)
    tlInverse.to('#menu', 0.3, {display:'none'}, 0.7)

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
    
    
    $( function() {
        $( "#datepicker" ).datepicker();
      } );
})