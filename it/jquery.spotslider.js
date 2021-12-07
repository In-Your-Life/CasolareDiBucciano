/*
Gleenk - News Spot Slider v 2.0
http://www.gleenk.com
This opera is licensed under a Creative Commons Attribuzione
Non opere derivate 2.5 Italia License.
*/

function newsSlider() {
	var numeroLiPoint = $(".news_slider li").size();
	var largLi = $(".news_slider li").width(); 
	var largLiTot = numeroLiPoint*largLi;
	var termina = largLiTot-largLi;
	
	//Tempo auto-slide
	var intTmp = 5000;
	
	//larghezza dinamica dell'ul
	var boxUl = $(".news_slider ul.slides");
	boxUl.css("width",largLiTot);
	checkFrecce();
	startTimer();
	
		$('.news_slider-right').click(function(){
			if(boxUl.css("left")!=-termina+"px"){
				$(".news_slider ul.slides:not(:animated)").animate({left:"-="+largLi+"px"}, {
				duration: 500,
				complete: function() {
					palliniInversa();
					checkFrecce();
				}
			  });
			}
			else {
				$(".news_slider ul.slides:not(:animated)").animate({left:"0px"}, {
				duration: 500,
				complete: function() {
					palliniInversa();
					checkFrecce();
				}
			  });
			}
		});

		$('.news_slider-left').click(function(){	
			if(boxUl.css("left")!="0px"){
				$(".news_slider ul.slides:not(:animated)").animate({left:"+="+largLi+"px"}, {
				duration: 500,
				complete: function() {
					palliniInversa();
					checkFrecce();
				}
			  });
			}
			else {
				checkFrecce();
				}
		});
	
	//creazione pallini
	for(i=0; i<numeroLiPoint; i++){
		$(".news_slider-spots").append("<li></li>");
	}
	//calcolo dinamico larghezza contenitore pallini
	var largPallini = $(".news_slider-spots li").width();
	$(".news_slider-spots").width(largPallini*numeroLiPoint);
	
	$(".news_slider-spots li:eq(0)").addClass("active");
	
	//spostamento dello slider al click sul pallino
	$(".news_slider-spots li").click(function(){
		$(".news_slider-spots li").removeClass("active");
		$(this).addClass("active");
		indicePallini = $(".news_slider-spots li").index(this);
		$(".news_slider ul.slides").animate({left:0-(indicePallini*largLi)}, {
			duration: 500,
			complete: function() {
				checkFrecce();
				}
		 });
		return false;
	});
	
	function palliniInversa() {
		var boxLeft = parseInt(boxUl.css("left"));
		var indexPal = parseInt(-boxLeft/largLi);
		$(".news_slider-spots li").removeClass("active");
		$(".news_slider-spots li").eq(indexPal).addClass("active");
		checkFrecce();
		return false;
	}
	
	//controllo posizione per comparsa frecce
	function checkFrecce(){
	if(boxUl.css("left")=="0px"){
		$(".news_slider-right").show();
		$(".news_slider-left").hide();
	}
	else if (boxUl.css("left")==-termina+"px"){
		$(".news_slider-left").show();
		$(".news_slider-right").hide();
		}
	else{
		$(".news_slider-right").show();
		$(".news_slider-left").show();
		}
	}
	
	var myTimer;
	var timerbis;
	
	function startTimer() {
		myTimer = setInterval( function() {
			$('.news_slider-right').click();
		}, intTmp);
	};
	
	function stopTimer(){
		clearInterval(myTimer);
		clearTimeout(timerbis);
	}
	
	$("#toggleTime").toggle(
	//click in stato di pausa
	  function () {
		stopTimer();
		$(this).removeClass("tpause");
		$(this).addClass("tplay");
	  },
	  
	  function () {
		startTimer();
		$(this).removeClass("tplay");
		$(this).addClass("tpause");
	  }
	);
	
}
