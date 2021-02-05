$(function(){
	//TODO O CODIGO VAI AQUI
$('nav.mobile').click(function(){
	// o que vai 
	var listamenu = $('nav.mobile ul');
	var icone = $('.botao-menu-mobile i');
		if(listamenu.is(':hidden') == true){	
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listamenu.slideToggle();
		}
		else{
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
			listamenu.slideToggle();
		}

	})
})
