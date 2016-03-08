var marvelAPI = {
	_API_KEY: "7570edb2e1391d665698e218fb4b784f",
	_PRV_KEY: "38db02b3fe582a68fb27909f595ce63f38b4903e",
	_URL: "http://gateway.marvel.com/v1/public/",
	_PATH: ajaxdata.urlsite+"/wp-content/themes/toptencomics/assets/tpls/",
	results: "",

	series: function(searchTerm) {
		var method = 'series';
		var myTs = new Date().getTime();
		var params = {
			title: searchTerm,//$('#s').val(),
			ts: myTs,
			apikey: this._API_KEY,
			hash: md5(myTs+this._PRV_KEY+this._API_KEY),
		};
		var url = this.constructURL(method, params);
		console.log(url);
		var data = this.getData(url, method);
	},
	comics: function(idSerie) {
		var method = 'comics';
		var myTs = new Date().getTime();
		var params = {
			series: idSerie,
			ts: myTs,
			apikey: this._API_KEY,
			hash: md5(myTs+this._PRV_KEY+this._API_KEY),
		};
		var url = this.constructURL(method, params);
		var data = this.getData(url, method);
	},

	getData: function(url, method) {

		var self = this;
		return $.ajax({
  			url: url ,
			beforeSend: function( xhr ) {
    			xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
  			}
		}).done(function( response ) {
			response = JSON.parse(response);
    		if ( console && console.log ) {
      			//console.log( "Sample of data:", response);//response.data.results[0] );
				self.results = response;
				$.get( self._PATH+'mytpl.html', function(template) {
                    var curtpl = $(template).filter("#"+method).html();
					Mustache.parse(curtpl);
					var myMachin = {};//response.data.results;
					myMachin.bidule = response.data.results;
					var rendered = Mustache.render(curtpl, myMachin);
					$('.resultats').html(rendered);
  				});
			}
		});
	},

	callBack: function() {
		return 'ok---';
	},

	constructURL: function(method, params) {
		return this._URL+method+'?'+$.param(params);
	}
};

console.log(marvelAPI._URL);

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

    $('#searchsubmit').on('click', function(e) {
		//e.preventDefault();
		//marvelAPI.series();
	});
	console.log(window.location.search.substr(3));

	if (window.location.search !== "")
	{
		//var idSerie = window.location.hash.substr(1);
		var searchTerm = window.location.search.substr(3);
		console.log(searchTerm);
		//var idSerie = window.location.hash.substr(1);
		marvelAPI.series(searchTerm);
	}
	if (window.location.hash !== "")
	{
		console.log(window.location.pathname);
		if (window.location.pathname.indexOf('series') !== -1)
		{
			console.log('Je suis sur une page série');
            //var idSerie = window.location.hash.substr(1);
    		//var searchTerm = window.location.search.substr(3);
    		//console.log(searchTerm);
    		//var idSerie = window.location.hash.substr(1);
    		//marvelAPI.comics(idSerie);
		}
		else
		{
			console.log('Je suis sur une page comics');

		}

		var idSerie = window.location.hash.substr(1);
		//var searchTerm = window.location.search.substr(3);
		//console.log(searchTerm);
		//var idSerie = window.location.hash.substr(1);
		marvelAPI.comics(idSerie);
	}
});
