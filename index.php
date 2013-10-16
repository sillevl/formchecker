

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>HTML Form checker</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<script type="text/javascript" src="jquery/jquery-1.10.2-min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	    <style type="text/css">


      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
 </head>
 <body>
 	<div class="container">
 		<div class="navbar navbar-inverse">
  			<div class="navbar-inner">
		    <a class="brand" href="#">HTLM Form Checker</a>

		  </div>
		</div>
		<div class="content">
			<h2>Introduction</h2>
			<p>The HTML form checker will display all HTTP GET and POST variables sent to this page.</p>
			<p>You can use the example form to test out an HTTP POST request sent to this page.</p>

			<?php if(count($_POST)){ ?>
			<h3>HTTP POST</h3>
			<p># HTTP POST variables: <?php echo count($_POST); ?></p>
			<table class="table table-striped table-condensed">
				<thead>
					<tr>
						<th style="width: 250px">name</th>
						<th>value</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($_POST as $key => $value) {
							echo "<tr><td>$key</td><td>$value</td></tr>";
						}
					 ?>
				</tbody>
			</table>
			<?php } ?>

			<?php if(count($_GET)){ ?>
			<h3>HTTP GET</h3>
			<p># HTTP GET variables: <?php echo count($_GET); ?></p>
			<table class="table table-striped table-condensed">
				<thead>
					<tr>
						<th style="width: 250px">name</th>
						<th>value</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($_GET as $key => $value) {
							echo "<tr><td>$key</td><td>$value</td></tr>";
						}
					 ?>
				</tbody>
			</table>
			<?php } ?>

			<?php if(count($_FILES)){ ?>
			<h3>File uploads</h3>
			<p># uploaded files: <?php echo count($_FILES); ?></p>
			<table class="table table-striped table-condensed">
				<thead>
					<tr>
						<th style="width: 250px">name</th>
						<th>type</th>
						<th>size</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($_FILES as $key => $value) {
							echo "<tr><td>".$value["name"]."</td><td>".$value["type"]."</td><td>".$value["size"]."</td></tr>";
						}
					 ?>
				</tbody>
			</table>
			<?php } ?>

			<h3>Example</h3>



					      <!-- Button to trigger modal -->
			<p><a href="#myModal" role="button" class="btn" data-toggle="modal">Launch example form</a></p>
			 
			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3>Example form</h3>
			  </div>
			  <div class="modal-body">
	    		<form class="form-signin" method="POST">
			        <h2 class="form-signin-heading">Please sign in</h2>
			        <input type="text" class="input-block-level" placeholder="Email address" name="email">
			        <input type="password" class="input-block-level" placeholder="Password" name="password">
			        <input type="hidden" name="iamhidden" value="secret">
			        <label class="checkbox">
			          <input type="checkbox" name="remember-me" value="yes"> Remember me
			        </label>
			        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
			      </form>
			  </div>
			</div>
		</div>
		<div id="footer" style="text-align: center;">
	        <p class="muted credit">HTML Form checker by <a href="http://sillevl.be">Sille Van Landschoot</a> for <a href="http://labict.be">LabIct.bea</a>.</p>
	    </div>
 	</div>
 </body>
 </html>