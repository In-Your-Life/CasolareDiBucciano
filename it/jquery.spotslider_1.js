/*
Gleenk - News Spot Slider v 2.0
http://www.gleenk.com
This opera is licensed under a Creative Commons Attribuzione
Non opere derivate 2.5 Italia License.
*/

function newsSlider_1() {
	var numeroLiPoint = $(".news_slider_1 li").size();
	var largLi = $(".news_slider_1 li").width(); 
	var largLiTot = numeroLiPoint*largLi;
	var termina = largLiTot-largLi;
	
	//Tempo auto-slide
	var intTmp = 4000;
	
	//larghezza dinamica dell'ul
	var boxUl = $(".news_slider_1 ul.slides_1");
	boxUl.css("width",largLiTot);
	checkFrecce();
	startTimer();
	
		$('.news_slider-right_1').click(function(){
			if(boxUl.css("left")!=-termina+"px"){
				$(".news_slider_1 ul.slides_1:not(:animated)").animate({left:"-="+largLi+"px"}, {
				duration: 400,
				complete: function() {
					palliniInversa();
					checkFrecce();
				}
			  });
			}
			else {
				$(".news_slider_1 ul.slides_1:not(:animated)").animate({left:"0px"}, {
				duration: 400,
				complete: function() {
					palliniInversa();
					checkFrecce();
				}
			  });
			}
			
		});

		$('.news_slider-left_1').click(function(){	
			if(boxUl.css("left")!="0px"){
				$(".news_slider_1 ul.slides_1:not(:animated)").animate({left:"+="+largLi+"px"}, {
				duration: 400,
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
		$(".news_slider-spots_1").append("<li></li>");
	}
	//calcolo dinamico larghezza contenitore pallini
	var largPallini = $(".news_slider-spots_1 li").width();
	$(".news_slider-spots_1").width(largPallini*numeroLiPoint);
	
	$(".news_slider-spots_1 li:eq(0)").addClass("active");
	
	//spostamento dello slider al click sul pallino
	$(".news_slider-spots_1 li").click(function(){
		$(".news_slider-spots_1 li").removeClass("active");
		$(this).addClass("active");
		indicePallini = $(".news_slider-spots_1 li").index(this);
		$(".news_slider_1 ul.slides_1").animate({left:0-(indicePallini*largLi)}, {
			duration: 400,
			complete: function() {
				checkFrecce();
				}
		 });
		return false;
	});
	
	function palliniInversa() {
		var boxLeft = parseInt(boxUl.css("left"));
		var indexPal = parseInt(-boxLeft/largLi);
		$(".news_slider-spots_1 li").removeClass("active");
		$(".news_slider-spots_1 li").eq(indexPal).addClass("active");
		checkFrecce();
		return false;
	}
	
	//controllo posizione per comparsa frecce
	function checkFrecce(){
	if(boxUl.css("left")=="0px"){
		$(".news_slider-right_1").show();
		$(".news_slider-left_1").hide();
	}
	else if (boxUl.css("left")==-termina+"px"){
		$(".news_slider-left_1").show();
		$(".news_slider-right_1").hide();
		}
	else{
		$(".news_slider-right_1").show();
		$(".news_slider-left_1").show();
		}
		
	}
	
	var myTimer;
	var timerbis;
	
	function startTimer() {
		myTimer = setInterval( function() {
			$('.news_slider-right_1').click();
		}, intTmp);
	};
	
	function stopTimer(){
		clearInterval(myTimer);
		clearTimeout(timerbis);
	}
	
	$("#toggleTime_1").toggle(
	//click in stato di pausa
	  function () {
		stopTimer();
		$(this).removeClass("tpause_1");
		$(this).addClass("tplay_1");
	  },
	  
	  function () {
		startTimer();
		$(this).removeClass("tplay_1");
		$(this).addClass("tpause_1");
	  }
	);
	
	
	
	
	
	
}
