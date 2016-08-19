$(document).ready(function(){
	/*$("#kpd-car").owlCarousel({
	items : 3,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
     
    //Базовая скорость
    slideSpeed : 200,
    paginationSpeed : 800,
    rewindSpeed : 1000,
     
    //Авто-прокрутка
    autoPlay : false,
    stopOnHover : false,
     
    // Навигация
    navigation : false,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false,
     
    // Пагинация
    pagination : true,
    paginationNumbers: false,
     
    // Отзывчивость
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
     
    // CSS стили
    baseClass : "owl-carousel",
    theme : "owl-theme",
     
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
     
    // Авто-высота
    autoHeight : false,
     
    //JSON
    jsonPath : false,
    jsonSuccess : false,
     
    // События мышки
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
     
    //Transitions
    transitionStyle : false,
     
    // Другое
    addClassActive : false,
     
    // Функции обратного вызова
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false,
    afterInit: false,
    beforeMove: false,
    afterMove: false,
    afterAction: false,
    startDragging : false
    afterLazyLoad : false                
	});*/

	$('.kpd_hover a').on('mouseover',function(){
		if(!$(this).parent('.dropdown').hasClass('open')) {
			$(this).siblings('ul').dropdown('toggle');
			$(this).siblings('ul').transition({opacity:0.8},1000,'ease');
		}
	});
	function out_handler(sob){
		var object = $(this);
		var time_out = setTimeout(function(){
			object.transition({opacity:0},1000,'ease');
			setTimeout(function(){ 
				object.dropdown('toggle');
			},1000);			
		},2000);		
		sob.currentTarget.onmouseover = function(){
			clearTimeout(time_out);
		}; 
	}
	$('.dropdown-menu').on('mouseout',out_handler);

});	