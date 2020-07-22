jQuery(document).ready(function(){
	jQuery('.to').click(function(){
		jQuery('.access').dialog({
			'title':'Access Token',
			'modal':true,
			'responsive':true,
		'resizable': false,
		'width':800,
		'show': {
        effect: "explode",
        duration: 1000
      },
	        'hide': {
        effect: "explode",
        duration: 2000
      },
			'buttons':{
				'Get Token':function(){
					
					var tock = jQuery('.tokenemail').val();
					if(tock == ''){
						return false;
					}
					else{
					$.ajax({
						'url':'toksend.php',
						'type':'POST',
						'data':{
							'jib':1,
							'jab':tock
						},
						'success':function(rock){
							
							jQuery('.access').dialog('close');
							
							jQuery('.grant').html(rock);
							jQuery('.grant').dialog({
								'show': {
        effect: "explode",
        duration: 1000
      },
	        'hide': {
        effect: "explode",
        duration: 2000
      },
								'title':'Access Token',
								'modal':true,
								'responsive':true,
								'buttons':{
									'close':function(){
										jQuery('.grant').dialog('close');
									}
								}
							});
							
							
							
							
							
							
						}
					});
					}
				}
			}
		});
		return false;
	});
	jQuery('.date').datepicker({
		      changeMonth: true,
              changeYear: true,
			  yearRange: "-50:-1"
	});
		
	
	
});