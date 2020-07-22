<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="sMbCmala0WljlOt6oUFUpSY1hqfJuY5vQX9KfSO1">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000">
                    Laravel
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					                    <ul class="navbar-nav mr-auto">
						<li><a href="http://127.0.0.1:8000/message/send">Message</a></li>
						<li><a href="http://127.0.0.1:8000/message/all">All Message</a></li>
                    </ul>
                                         <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    srtg <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="sMbCmala0WljlOt6oUFUpSY1hqfJuY5vQX9KfSO1">                                    </form>
                                </div>
                            </li>
                                            </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="wrapper" style="width:80%;margin:auto;">
<div class="chata">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>dfgdf</td>
      <td>dfgdfg</td>
      <td>jdfg</td>
	  <form action="http://127.0.0.1:8000/delete/record" method="POST" >
	  <td><input type="submit" class="delete" value="delete" pic="47"></input></td>
	  </form>
      
    </tr>
    <tr>
      
      <td>dfgdf</td>
      <td>dfgdfg</td>
      <td>jdfg</td>
	  <form action="http://127.0.0.1:8000/delete/record" method="POST" >
	  <td><input type="submit" class="delete" value="delete" pic="48"></input></td>
	  </form>
      
    </tr>
    <tr>
      
      <td>dfgdf</td>
      <td>dfgdfg</td>
      <td>jdfg</td>
	  <form action="http://127.0.0.1:8000/delete/record" method="POST" >
	  <td><input type="submit" class="delete" value="delete" pic="49"></input></td>
	  </form>
      
    </tr>
    <tr>
      
      <td>dfgdf</td>
      <td>dfgdfg</td>
      <td>jdfg</td>
	  <form action="http://127.0.0.1:8000/delete/record" method="POST" >
	  <td><input type="submit" class="delete" value="delete" pic="50"></input></td>
	  </form>
      
    </tr>
      
   
  </tbody>
</table>
</div>
</div>
        </main>
    </div>
	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
	<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.delete').click(function(){
		
		var min = jQuery(this).attr('pic');
				$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			'url' : '/delete/record',
            'type' : 'POST',
            'data' : {
                  'name' : min   
			},
            'success' : function(mita){
				tina();
				
			}			
		});
		
		return false;
	});
	
	function tina(){
		$.ajax({
			'url' : '/take/message',
			'type' : 'GET',
			'success' : function(muna){
				jQuery('.chata').html(muna);
			}
			
		});
	}
});
</script>
</body>
</html>
