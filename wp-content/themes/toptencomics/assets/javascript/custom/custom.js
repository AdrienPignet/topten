$(document).ready(function(){
    var owl = $('#carousel-background');
        owl.owlCarousel({
            items:3,
            loop:true,
            margin:0,
            autoplay:true,
            autoplaySpeed: 1500,
            autoplayTimeout: 1500,
            autoplayHoverPause:true,
            lazyLoad:false
        });

    var owlfeatures = $("#carousel-custom");
        owlfeatures.owlCarousel({
            items:1,
            loop:true,
            margin:0,
            pagination:false,
            autoplay:false,
            autoplaySpeed: 2500,
            autoplayTimeout: 500,
            autoplayHoverPause:true,
            lazyLoad:false
        });

    //Déclarer un tableau contenant les différents textes
    var textes = [
            {
                titre:"Mon titre 01",
                contenu:"Mon super texte qui va avec"
            },
            {
                titre:"Mon titre 02",
                contenu:"Mon super texte qui va avec"
            },

    ];
    var slide_actuel = 0;

    $('#image_suivante').on('click', function(event){
        $("#carousel-custom").trigger('next.owl.carousel');
        slide_actuel++;

        if(slide_actuel === 0){
            $( "#diagonale" ).replaceWith("<div id='diagonale'><h2 class='animated fadeIn'>Tu cherches<br/>un comics ?</h2><span class='redbar'></span><p class='animated fadeIn'>Pourquoi utiliser un <strong>cérébro</strong>...<br />Alors qu'ils sont déjà tous dans la base de donnée <strong>TOP TEN</strong> !</p></div>");
        }
        if(slide_actuel == 1){
            $( "#diagonale" ).replaceWith("<div id='diagonale'><h2 class='animated fadeIn'>La télékinésie<br/>n'est pas ton fort ?</h2><span class='redbar'></span><p class='animated fadeIn'>Bientôt sur <strong>TOP TEN</strong>...<br />Tu pourras échanger avec les autres utilisateurs avec un système de commentaire et un forum !</p></div>");
        }
        if(slide_actuel == 2){
            $( "#diagonale" ).replaceWith("<div id='diagonale'><h2 class='animated fadeIn'>Deviens<br/>Un super héro ?</h2><span class='redbar'></span><p class='animated fadeIn'>Bientôt sur <strong>TOP TEN</strong>...<br />Tu pourras gagner des badges en collectionnant des comics, et ainsi montrer quel type de héro tu es !</p></div>");
        }
        if(slide_actuel > 2){
            slide_actuel = 0;
            $( "#diagonale" ).replaceWith("<div id='diagonale'><h2 class='animated fadeIn'>Tu cherches<br/>un comics ?</h2><span class='redbar'></span><p class='animated fadeIn'>Pourquoi utiliser un <strong>cérébro</strong>...<br />Alors qu'ils sont déjà tous dans la base de donnée <strong>TOP TEN</strong> !</p></div>");
        }

        //trouver comment injecter le bon texte dans le HTML prévu pour ça.
    });

    $('#image_precedente').on('click', function(event){
        owlfeatures.data('owlCarousel').prev();
        slide_actuel--;
        if(slide_actuel < 0){
            slide_actuel = textes.length-1;
        }
        if(slide_actuel === 0){
            $( "#diagonale" ).replaceWith("<div id='diagonale'><h2 class='fade-in'>Titre 0</h2><p class='fade-in'>Texte 0</p></div>");
        }
        if(slide_actuel == 1){
            $( "#diagonale" ).replaceWith("<div id='diagonale'><h2 class='fade-in'>Titre 1</h2><p class='fade-in'>Texte 1</p></div>");
        }
        if(slide_actuel == 2){
            $( "#diagonale" ).replaceWith("<div id='diagonale'><h2 class='fade-in'>Titre 2</h2><p class='fade-in'>Texte 2</p></div>");
        }
        //trouver comment injecter le bon texte dans le HTML prévu pour ça.
        //voir du côté de jquery
    });


});
