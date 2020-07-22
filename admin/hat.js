jQuery(document).ready(function(){
	jQuery(document).on('click','.good',function(){
		$.ajax({
			'url':'jama.php',
			'type':'POST',
			'data':{
				'amar':1
			},
			'success':function(hey){
				jQuery('.dona').html(hey);
				jQuery('.dona').dialog({
					'title':'good users',
					'modal':true,
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
							jQuery('.dona').dialog('close');
						}
					}
				});
			}
		});
		return false;
	});
	jQuery(document).on('click','.adminto',function(){
		var kusha = jQuery(this).attr('sata');
		jQuery('.hada').dialog({
			'title':'send message',
			'modal':true,
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
					jQuery('.hada').dialog('close');
				},
				'send':function(){
					var amake = jQuery('.fromad').val();
					if(amake == ''){
						return false;
					}
					else{
						$.ajax({
						'url':'mibon.php',
						'type':'POST',
						'data':{
							'nishat':1,
							'ni':kusha,
							'nis':amake
						},
						'success':function(){
							jQuery('.hada').dialog('close');
							
						}
					});
					}
					
				}
			}
		});
		return false;
	});
	
	
});