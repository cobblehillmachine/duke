$(document).ready(function() {
	fullScreen();
	setInputFieldFunctions();
	footerHeight();
	detectIphone();
	infiniteLoop();
	//setRealbodyHeight();
	$('.cycloneslider').fadeIn('slow');
	showMenuItems();
	$('.menu-item-cont .menu-item').not(':last-child').append(',');
	
});

$(window).resize(function(){
	fullScreen();
	footerHeight();
	detectIphone();
	//setRealbodyHeight();
});

$(window).load(function(){
	fullScreen();
	footerHeight(); 
	detectIphone();
	//setRealbodyHeight();
});


function fullScreen(){
	
	var FullscreenrOptions = { width: 1200, height: 1200, bgID: '.bgimg' };

	jQuery.fn.fullscreenr(FullscreenrOptions);
}

function setInputFieldFunctions(){
$('.form-input').each(function(){
     if($(this).val() == "")
       $(this).val($(this).attr('default'));
   })

   $('.form-input').focus(function(){
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val('');

   }).blur(function() {
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val($(this).attr('default'));
   });
}

function footerHeight(){
var footer = $('#colophon'),
windowHeight = $(window).height(),
combinedHeight = footer.offset().top + 154,
height = (windowHeight > combinedHeight) ? windowHeight - footer.offset().top : 154;
// height = windowHeight - footer.offset().top;

footer.css({'height':height});
}

function detectIphone() {
	// var str='<div href="tel:9108338321" id="phone-nbr">(910) 833-8321</div>';
	// var n=str.replace(/div/g,"a");
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
		$('.bgimg').remove();
		$('#realBody').removeClass('realBody');
		$('#phone-nbr').css('color','#610B0D')
		}
	
}

function setRealbodyHeight() {
	var realBody = $('.realBody'), windowHeight = $(document).height();
	realBody.css({'height':windowHeight});
	
}

function infiniteLoop() {

   // var $imgWidth = $('#slider_images img').first().outerWidth();//read the image width
   // var $imgCount = $('#slider_images img').length;//count the images
   // $('#slider_images').width($imgWidth*($imgCount+2));//set the width of the container to the number of images - plus 2 to account for the cloned images
   // $('#slider_images li').first().addClass('endless_slider_first');//identify the first and last images
   // $('#slider_images li').last().addClass('endless_slider_last');
   // $('.endless_slider_first').clone().appendTo('#slider_images');//clone the first image and put it at the end
   // $('.endless_slider_last').clone().prependTo('#slider_images');//clone the last image and put it at the front
   // $('#slider_images').css({'left':-1*$imgWidth+'px'});//reset the slider so the first image is still visible
   
	//    $('#endless_slider_right').click(function(){
	//       $('#slider_images').stop(true,true); //complete any animation still running - in case anyone's a bit click happy... 
	//       var $newLeft = $('#slider_images').position().left-(1*$imgWidth);//calculate the new position which is the current position minus the width of one image
	//       $('#slider_images').animate({'left':$newLeft+'px'},function(){//slide to the new position...
	//          if (Math.abs($newLeft) == (($imgCount+1)*$imgWidth)) //...and if the slider is displaying the last image, which is the clone of the first image...
	//             {
	//             $('#slider_images').css({'left':-1*$imgWidth+'px'});//...reset the slider back to the first image without animating 
	//             }
	//          });
	//       return false;
	//    });
	//    
	//    $('#endless_slider_left').click(function(){
	//       $('#slider_images').stop(true,true); //complete any animation still running  
	//       var $newLeft = $('#slider_images').position().left+(1*$imgWidth);//calculate the new position which is the current position plus the width of one image
	//       $('#slider_images').animate({'left':$newLeft+'px'},function(){//slide to the new position
	//          if (Math.abs($newLeft) == (0)) //if the slider is displaying the first image, which is the clone of the last image
	//             {
	//             $('#slider_images').css({'left':-($imgCount)*$imgWidth+'px'});//reset the slider back to the last image without animating 
	//             }
	// });
	//    return false;
	//    });

}

function showMenuItems() {
	$('.menu-item-cont').each(function() {
		var id = $(this).attr('id');
		$(this).children('.menu-item').each(function() {
			if (!$(this).hasClass(id)) {
				$(this).remove();
			}		
		});
	});
}







