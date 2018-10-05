$(function(){
	//Effects
	$(".puff_effect").on("click", function(){
       $(".pic1").effect("puff",{
       	  percent: 200
       }, 2000);
	});
	$(".bounce_effect").on("click", function(){
       $(".pic2").effect("bounce",{
       	  direction: 'left',
       	  distance: 50,
       	  times: 7,
       	  mode: 'hide'
       }, 2000);
	});
	$(".explode_effect").on("click", function(){
       $(".explode").effect("explode",{
       	  pieces: 4
       	}, 2000, function(){
       		$(this).effect("explode", {
       			pieces: 4,
       			mode: 'show'
       		}, 2000);
       	});
	});
	//show/hide
	$(".btn_show").on("click", function(){
		$(".pic3").show("bounce",{
			direction: 'left',
       	  distance: 50,
       	  times: 7
       	 
		},2000);
	});
	$(".btn_hide").on("click", function(){
		$(".pic3").hide("drop",{
			direction: 'left'
       	 
		},2000);
	});
	$(".btn_show1").on("click", function(){
		$(".effect_show").show("explode",{
			pieces: 9
       	 
		},2000);
	});
	$(".btn_hide1").on("click", function(){
		$(".effect_show").hide("shake",{
			direction: 'right',
			distance: 50,
			times: 7
       	 
		},2000);
	});
	//Add class, Remove Class
	$(".ad_class").on("click", function(){
		$(".div").addClass("anim", 2000);
	});
	$(".rm_class").on("click", function(){
		$(".div").removeClass("anim", 2000);
	});
	//Switch class
	$(".sw_class").on("click", function(){
		$(".div1").switchClass("div1","anim",2000);
	});
	//Color Animation
	$(".btn_anim").on("click", function(){
		$(".animate").animate({
			"fontSize": "26px",
			"color": "white",
			"backgroundColor": "blue",
			"width": "350px"
		}, 3000); 
	});
	//Accordion
	$(".accord").accordion({
		active: false,
		collapsible: true,
		heightStyle: "content"

	}); 
	//Tabs
	$(".tabs").tabs({
		active: 1,
		collapsible: true,
		heightStyle: "auto"
	});
	//Menu
	$("ul.menu").menu();
	//Button
	$(".btn-jquery").button();
	//Datepicker
	$(".datepic").datepicker({
		yearRange: "1950:2018",
		changeYear: true,
		changeMonth: true,
		showAnim: 'explode',
		showOn: 'both',
		duration: 'slow',
		numberOfMonths:[1,4]
	});
	//Slider
	    $( ".slider-jquery" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( ".slider-jquery" ).slider( "values", 0 ) +
      " - $" + $( ".slider-jquery" ).slider( "values", 1 ) );
//Dialog
$(".btn-dial").on("click", function(){
	$("div.hide").dialog({
		modal: true,
		buttons: {
			Ok: function(){
				$(this).dialog("close");
			}
		}
	});
 });
//Появление формы через время
/*setTimeout(function(){
	$("form.hide").dialog({
		modal: true
	});
   }, 2000);*/
//Autocomplete
let lang = ["HTML","CSS","JavaScript", "Java", "Python", "Ruby", "C++", "C#","PHP","VisualBasic", "Pascal", "Algol", "Erlang","Scala"];
$("input.lang").autocomplete({
	source: lang
 });
//Draggable
$("img.drag").draggable({
	helper: 'clone',
	delay: 300,
	revert: true,
	zIndex: 1000
  });
//Droppable
$("img.drag1").draggable({
	revert: "invalid",
	start: function(event, ui){
		ui.helper.css('transform','rotate(5deg) scale(1.2)');
	},
	stop: function(event, ui){
		ui.helper.css('transform','rotate(0deg) scale(1)');
	},
	zIndex: 200
  });
$(".trash").droppable({
	activeClass: 'highlight',
	drop: function(event, ui){
		ui.helper.hide('explode');
		$(this).attr('src','images/trashcan-full-icon.png');
	}
 });
//sortable
$(".sort1").sortable({
	connectWith: '.sort2',
	helper: 'clone',
	revert: true
	
});
$(".sort2").sortable({
	connectWith: '.sort1'
  });
//resizable
$(".resize").resizable({
	animate: true,
	animationDuration: 'slow'
   });
//colorbox
$("a.gal").colorbox({
	rel: 'gal1',
	speed: 500,
	width: 500,
	height:500,
	innerWidth: 350,
	innerHeight: 350,
	opacity: 0.5,
	slideshow: true,
	slideshowSpeed: 2000,
	slideshowAuto: true,
	current: "Рисунок {current} из {total}",
	slideshowStart: "Запуск слайдшоу",
	slideshowStop: "Остановка слайдшоу"
 });
$("a.coltext").colorbox({
	inline: true,
	width: "50%"
  });
//inline youtube
$("a.colyoutube").colorbox({
	iframe: true,
	width: 550,
	height: 550
  });
//superfish menu
$("ul.sf-menu").superfish({
    delay: 1000,
    speed: 'slow'
  });
//BxSlider
$(".slider").bxSlider({
	minSlides: 2,
	maxSlides: 3,
	moveSlides: 1,
	slideMargin: 20,
	slideWidth: 300,
	captions: true
  });
});