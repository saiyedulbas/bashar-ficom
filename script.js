jQuery(document).ready(function(){
	function ami(){
		jQuery('.popup').dialog({
		width: 800,
	 
       
       
       modal: true,
    responsive: true,
		'show': {
        effect: "explode",
        duration: 3000
      },
	        'hide': {
        effect: "explode",
        duration: 2000
      },
		'buttons':{
			'close':function(){
				jQuery(this).dialog('close');
			}
		}
	});
	}
	setTimeout(ami,2000);
	jQuery('.popsubmit').click(function(){
		var first = jQuery('.popname').val();
		var second = jQuery('.popemail').val();
		var third = jQuery('.phone').val();
		var fourth = jQuery('#address').val();
		var fifth = jQuery('#yourself').val();
		if(first == '' || second == '' || third == '' || fourth == '' || fifth == '' ){
			alert('not accepted');
			return false;
		}
		
		if(IsEmail(second)==false){
          alert('invalid email');
          return false;
        }
		else{
		$.ajax({
			'url':'pop.php',
			'type':'POST',
			'data':{
				'set':1,
				'name':first,
				'email':second,
				'phone':third,
				'address':fourth,
				'yourself':fifth
			},
			'success':function(gol){
				jQuery('.popup').dialog('close');
				jQuery('#mul').modal('show');
			}
		});
		}
		return false;
	});
	function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
	
	
});