(function($) {
$(".header_bot select").uniform();

$(".block-system-main-block .contextual-region").css("display","none");
$(".block-system-main-block .views-element-container").css("display","none");

$('.pop_links').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true
      }
    },
	{
      breakpoint: 800,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.pop_prod').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.home_gal').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
});

$("#mySlider1").AnimatedSlider( { 
	prevButton: "#btn_prev1", 
	nextButton: "#btn_next1",
	visibleItems: 3,
	infiniteScroll: true,
});

$(".inner_top .mobile_menu select, .mid_part select, .prof_desc select, .info_bottom select, .popup.small input[type='checkbox'],.inner_top .filter_cont input[type='checkbox'], .pur_form select, .graph_main .graph_right form input[type='checkbox'], .cust_prog_form select, .add_prog input[type='checkbox'],.adb_us  select").uniform();

$( ".rev_cont ul li .button" ).click(function(e) {
	e.preventDefault();
	var $this = $(this);
	$this.toggleClass('red');
	if($this.hasClass('red')){
		$this.text('See Details');         
	} else {
		$this.text('Hide');
	}
	$( this ).parent().parent().find( ".detailed" ).slideToggle();
});

$( ".accordion h3" ).click(function(e) {
	e.preventDefault();
	var $this = $(this);
	$this.toggleClass('active');
	$( this ).parent().find( ".accordion-content" ).slideToggle();
});
$( ".mobile_hamburger" ).click(function(e) {
	e.preventDefault();
	$( this ).toggleClass("active");
	$( ".mobile_menu" ).slideToggle();
});

$("#reviewSlide").responsiveSlides({
	auto: true,
	pager: true,
	nav: false,
	speed: 300,
});

$("#fitprodSlide").responsiveSlides({
	auto: true,
	pager: true,
	nav: false,
	speed: 300,
});

$("#midSlider").responsiveSlides({
	auto: true,
	pager: true,
	nav: false,
	speed: 300,
});

$( ".shop_link" ).click(function(e) {
	e.preventDefault();
	$( ".prod_list" ).animate({"left":"-1000px"}, "slow").removeClass('visible');
	$( ".cat_list" ).slideToggle();
});

$('.cat_list a').click(function(){
	$( ".prod_list" ).animate({"left":"-1000px"}, "slow").removeClass('visible');
    var hidden = $(this).parent().find('.prod_list');
    if (hidden.hasClass('visible')){
        hidden.animate({"left":"-1000px"}, "slow").removeClass('visible');
    } else {
        hidden.animate({"left":"190px"}, "slow").addClass('visible');
    }
});

$('.int_blocks').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1030,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$( ".sidebar ul li > a" ).click(function(e) {
	e.preventDefault();
	var $this = $(this);
	$this.toggleClass('active');
	$( this ).parent().find( "ul" ).slideToggle();
});
$( ".sidebar.mobile_cat h3" ).click(function(e) {
	e.preventDefault();
	var $this = $(this);
	$this.toggleClass('active');
	$( this ).parent().find( "ul.cat" ).slideToggle();
});
$(document).ready(function(){
	var $productRowHeader=$(".filter_cont ul li > a");
	var $productRowCont=$(".ref_cont");

	$productRowHeader.bind('click',function(e){
		e.preventDefault();
		var $next=$(this).next();
		var cur=$(this).attr("data-cur");
		if(!cur || cur!="cur"){
			$productRowCont.slideUp()
			$productRowHeader.attr("data-cur","");
			$productRowHeader.removeClass("active");
		}
		if($next.is(":visible")){
			$(this).attr("data-cur","");
			$productRowHeader.removeClass("active");
			$next.slideUp();
		}
		else{
			$(this).attr("data-cur","cur");
			$(this).addClass("active");
			$next.slideDown();
		}
	});
});
function doStuff(){
    landscape = window.orientation? window.orientation=='landscape' : true;
    portrate = window.orientation? window.orientation=='portrate' : true;
	
	
	if(landscape && window.innerWidth < 768){
		$( ".filter_cont h4" ).click(function(e) {
			e.preventDefault();
			var $this = $(this);
			$this.toggleClass('active');
			$( this ).parent().find( "ul" ).slideToggle();
		});
	}
}
window.onload=window.onresize=doStuff;
if(window.onorientationchange){
    window.onorientationchange=doStuff;
}
function doStuff_calendar(){
    landscape = window.orientation? window.orientation=='landscape' : true;
	
	if(landscape && window.innerWidth < 992){
		$( ".calender_main .date a.active#link1" ).click(function(e) {
			e.preventDefault();
			$( this ).toggleClass("active");
			$(this).parent().parent().parent().find('.info#info1').slideToggle();
		});
		
		$( ".calender_main .date a.active#link2" ).click(function(e) {
			e.preventDefault();
			$( this ).toggleClass("active");
			$(this).parent().parent().parent().find('.info#info2').slideToggle();
		});
		
		$( ".calender_main .date a.active#link3" ).click(function(e) {
			e.preventDefault();
			$( this ).toggleClass("active");
			$(this).parent().parent().parent().find('.info#info2').slideToggle();
		});
		
		$( ".calender_main .date a.active#link4" ).click(function(e) {
			e.preventDefault();
			$( this ).toggleClass("active");
			$(this).parent().parent().parent().find('.info#info3').slideToggle();
		});
	}
}
window.onload=window.onresize=doStuff_calendar;
if(window.onorientationchange){
    window.onorientationchange=doStuff_calendar;
}
$(document).ready(function(){
	$('#gallery').simplegallery({
		galltime : 400,
		gallcontent: '.content',
		gallthumbnail: '.thumbnail',
		gallthumb: '.thumb'
	});
});
$("#relprodSlide").responsiveSlides({
	auto: true,
	pager: true,
	nav: false,
	speed: 300,
});
$("#mediaSlide").responsiveSlides({
	auto: true,
	pager: true,
	nav: false,
	speed: 300,
});

$('.home_gal').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
});
$('.mob_exc').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
});
$('.scroll_text').tinyscrollbar();

$( ".adb_us ul li a" ).click(function(e) {
	e.preventDefault();
	$( this ).toggleClass("active");
});

$( ".adb_us .cust_meal_top .calender_main .date a" ).click(function(e) {
	e.preventDefault();
	$( ".adb_us .cust_meal_top .calender_main .date a" ).removeClass("active");
	$( this ).addClass("active");
});
/******************RAJDEEP*******************/
//$("#edit-pass-pass2 div").hide();
$('#edit-pass-pass2').children('.js-password-confirm').hide();
$('#block-surfise-content .profile').hide();
/********************************************/
})(jQuery);