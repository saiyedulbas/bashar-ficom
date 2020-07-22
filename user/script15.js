jQuery(document).ready(function(){
	jQuery('.uanor').click(function(){
		var kita = jQuery(this).attr('zakor');
		var tota = jQuery(this).attr('yanor');
		jQuery(this).addClass('bima').parent('li').siblings().children('a').removeClass('bima');
		
		$.ajax({
			'url':'chatpage.php',
			'type':'POST',
			'data':{
				'yuna':1,
				'juna':kita,
				'bida':tota,
			},
			'success':function(moris){
				jQuery('.dhoom').html(moris);
			}
		});
		return false;
	});
	
	
	
});