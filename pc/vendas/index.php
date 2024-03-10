 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	
	  <div class="container">
		<?php
			@$link = $_GET['link'];
			$pag[1]='principal.php';
			$pag[2]='formUsuario.php';
			$pag[3]='usuario.controller.php';
			
			if(!empty($link)){
				if(file_exists($pag[$link])){
					include $pag[$link];
				}
			}else{
				trim(include 'principal.php');	
			}
			
			
		?>
	  </div>	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
    </body>
  </html>
        