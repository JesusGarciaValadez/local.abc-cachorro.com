$(function(){
	validar();
})


function validar(){

	var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

		$(".registrar").click(function(){

			var nombre = $('input[name="puppy-name"]').val();
	        var correo = $('input[name="your-email"]').val();
	        var nombredesc = $('input[name="your-name"]').val();
	        var raza = $('input[name="puppy-race"]').val();
	        var selectmes =$('.meses').val();
	        var selectTalla =$('.tallas').val();

	        if(nombre == ""){
	            $("#mensaje1").fadeIn("slow");
	            $('input[name="puppy-name"]').css('border', '1px solid red');
	            return false;
	        }
	        else{
	            $("#mensaje1").fadeOut();
	            $("#validar1").fadeIn("slow");
	            $('input[name="puppy-name"]').css('border', '1px solid #33CC00');
	        }
	        if(selectmes.trim() === ''){
	        	 $('.mes').css('border', '1px solid red');
	        }
	        else{
	        	$('.mes').css('border', '1px solid #33CC00');
	        	$('div.select.select-url.mes > div').css('color', '#33CC00');
	        }
	         if(selectTalla.trim() === ''){
	        	 $('.talle').css('border', '1px solid red');
	        }
	        else{
	        	$('.talle').css('border', '1px solid #33CC00');
	        	$('div.select.select-url.mes > div').css('color', '#33CC00');
	        }
	        if(nombredesc == ""){
	            $("#mensaje3").fadeIn("slow");
	            $('input[name="your-name"]').css('border', '1px solid red');
	            return false;
	        }
	        else{
	            $("#mensaje3").fadeOut();
	            $("#validar3").fadeIn("slow");
	            $('input[name="your-name"]').css('border', '1px solid #33CC00');
	        }
	        if(correo == "" || !expr.test(correo)){
	            $("#mensaje2").fadeIn("slow");
	            $('input[name="your-email"]').css('border', '1px solid red');
	            return false;
	        }
	        else{
	            $("#mensaje2").fadeOut();
	            $("#validar2").fadeIn("slow");
	            $('input[name="your-email"]').css('border', '1px solid #33CC00');
	        }
	        if(raza == ""){
	            return false;
	        }
	        else{

	            $("#validar4").fadeIn("slow");
	            $('input[name="puppy-race"]').css('border', '1px solid #33CC00');
	        }
	        
	       
		});

}




// ------------input number-------------------- //

$(document).on('click', 'div.item-cachorro.flex > div > button.cin-btn.cin-btn-1.cin-btn-md ', function (e) {
		var accion=$(this).attr('class');

		var numero = parseInt($("div.item-cachorro.flex > div > input").val());

		if( accion.indexOf('increment') >= 0){
			if(numero >=1 && numero <=4 ){
				numero=numero+1;
			}

		}else{
				if(numero >1){

					numero=numero-1;

				}
		}

		$("div.item-cachorro.flex > div > input").val(numero);

});



// ------------select-------------------- //

$('select.meses').each(function(){
		var $this = $(this), numberOfOptions = $(this).children('option').length;

		$this.addClass('select-hidden');
		$this.wrap('<div class="select select-url mes"></div>');
		$this.after('<div class="select-styled"></div>');

		var $styledSelect = $this.next('div.select-styled');
		$styledSelect.text($this.children('option').eq(0).text());

		var $list = $('<ul />', {
			'class': 'select-options'
		}).insertAfter($styledSelect);

	for (var i = 0; i < numberOfOptions; i++) {
		$('<li />', {
		text: $this.children('option').eq(i).text(),
		rel: $this.children('option').eq(i).val()
		}).appendTo($list);
	}

	var $listItems = $list.children('li');

	$styledSelect.click(function(e) {
		e.stopPropagation();
		$('div.select-styled.active').not(this).each(function(){
		$(this).removeClass('active').next('ul.select-options').hide();
		});
		$(this).toggleClass('active').next('ul.select-options').toggle();
	});

	$listItems.click(function(e) {
		e.stopPropagation();
		$styledSelect.text($(this).text()).removeClass('active');
		$this.val($(this).attr('rel'));
		$list.hide();
		var val = $this.val();
		$('#catcher').attr('href', val);
	});

	$(document).click(function() {
		$styledSelect.removeClass('active');
		$list.hide();
	});

	});

$('select.tallas').each(function(){
		var $this = $(this), numberOfOptions = $(this).children('option').length;

		$this.addClass('select-hidden');
		$this.wrap('<div class="select select-url talle"></div>');
		$this.after('<div class="select-styled"></div>');

		var $styledSelect = $this.next('div.select-styled');
		$styledSelect.text($this.children('option').eq(0).text());

		var $list = $('<ul />', {
			'class': 'select-options'
		}).insertAfter($styledSelect);

	for (var i = 0; i < numberOfOptions; i++) {
		$('<li />', {
		text: $this.children('option').eq(i).text(),
		rel: $this.children('option').eq(i).val()
		}).appendTo($list);
	}

	var $listItems = $list.children('li');

	$styledSelect.click(function(e) {
		e.stopPropagation();
		$('div.select-styled.active').not(this).each(function(){
		$(this).removeClass('active').next('ul.select-options').hide();
		});
		$(this).toggleClass('active').next('ul.select-options').toggle();
	});

	$listItems.click(function(e) {
		e.stopPropagation();
		$styledSelect.text($(this).text()).removeClass('active');
		$this.val($(this).attr('rel'));
		$list.hide();
		var val = $this.val();
		$('#catcher').attr('href', val);
	});

	$(document).click(function() {
		$styledSelect.removeClass('active');
		$list.hide();
	});

	});