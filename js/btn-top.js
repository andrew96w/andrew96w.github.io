$('body').append('<button class="btn-up" />');

		$('.btn-up').click(function(){
			$('body').animate({"scrollTop": 0}, 1000);
			$('html').animate({"scrollTop": 0}, 1000);
		});

		$(document).ready(function(){
			function hideShow(){
        		if($(document).scrollTop() > 200 && !$(".btn-up").hasClass("btn-up-active")){
            		$(".btn-up").addClass("btn-up-active");
        		}else{
            		if($(document).scrollTop() < 200 && $(".btn-up").hasClass("btn-up-active")){
                		$(".btn-up").removeClass("btn-up-active");
            }
        }
    }
    
    $(document).scroll(function(){
        hideShow();
    });
    
    hideShow();
});﻿