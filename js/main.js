$(document).ready(function(){

    //rellax
    var rellax = new Rellax('.rellax');


  $('.tooltip-up').tooltip({html:true});

  $( "#js-menu-button-open,#js-menu-button-close" ).click(function() {
        $( ".main-nav-container" ).toggleClass( "fixed-nav" );
        $( ".menu-drop" ).toggleClass( "menu-show" );
        $( "html" ).toggleClass( "nav-open" );
    });

    



});
