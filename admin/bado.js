jQuery(document).ready(function(){
	jQuery(document).on('click','.info',function(){
		var rat = jQuery(this).attr('imo');
		$.ajax({
			'url':'charm.php',
			'type':'POST',
			'data':{
				'ish':1,
				'tim':rat
			},
			'success':function(moo){
				jQuery('.roo').html(moo);
				jQuery('.roo').dialog({
					'title':'All info',
					'resizable': false,
		'width':800,
		'show': {
        effect: "blind",
        duration: 1000
      },
	        'hide': {
        effect: "explode",
        duration: 1000
      },
		'buttons':{
							'close':function(){
								jQuery('.roo').dialog().dialog('close');
							}
						}
					
				});
				
			}
		});
		
		
		
		
		
		
		
		
			
			
		
	
		
		return false;
	});
});