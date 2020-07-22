jQuery(document).ready(function(){
	jQuery(document).on('click','.bad',function(){
		$.ajax({
			'url':'pant.php',
			'type':'POST',
			'data':{
				'tomar':1
			},
			'success':function(tui){
				jQuery('.bona').html(tui);
				jQuery('.bona').dialog({
					'title':'bad users',
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
							jQuery('.bona').dialog('close');
						}
					}
					
					
					
					
					
					
				});
			}
		});
		return false;
	});
});