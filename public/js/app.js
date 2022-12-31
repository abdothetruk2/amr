$(document).ready(function(){





    var counter=0





    $(".left").click(function(){




        if  (counter<=0 && counter !=2){





                $(this).next().css({




                backgroundImage:`url('../img/coffee${counter+1}.jpg')`


                })



            }



    })

    $(".navbar-toggler").click(function(){

          $(".mav").slideDown()
    })
var counter=0

$(".nav-item").mouseenter(function(){



    $('.nav-item').removeClass("active")
     $(".dropdown-menu").removeClass("active")
      counter=1
     $(this).addClass("active")

    $(this).children().first().next().slideDown()



    $(this).children().first().next().addClass("active")
})





$("*").mouseenter(function(){

    $(".dropdown-menu").not($(".active")).hide()


})

$("*").click(function(){


    $(".dropdown-menu").hide()

})

})
