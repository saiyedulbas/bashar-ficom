jQuery(document).ready(function(){
	jQuery('.chatsubmit2').click(function(){
		var jakkum = jQuery('.chattext2').val();
		var jita = jQuery('.mandana').text();
		var jita2 = jQuery('.kandana').text();
		if(jakkum != ''){
			$.ajax({
			'url':'chomot.php',
			'type':'POST',
			'data':{
				'ijja':1,
				'manona':jakkum,
				'janona':jita,
				'hashona':jita2
			},
			'success':function(){
				jQuery('.chattext2').val(' ');
				
					
				
				
			}
		});
		}
		else{
			return false;
		}
		
		return false;
	});
	function jalao(){
		
		var jita2 = jQuery('.kandana').text();
		
	$.ajax({
		
		'url':'jamai.php',
		'type':'POST',
		'data':{
			
			'jinga':1,
			'jira':jita2
		},
		'success':function(dimbo){
			jQuery('.chatbox2').html(dimbo);
			
		}
	});
	
	
	
	}
	setInterval(jalao,1000);
	
});