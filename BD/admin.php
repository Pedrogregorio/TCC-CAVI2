<?php  
	session_start();

	include_once 'includes/processos_php/verifica_login.php'
?>
<head>
		<?php  
			include_once 'head.php';
		?>
		<title>..:: C A V I ::..</title>
	</head>
	<body>
		<?php  
			include_once 'menu.php'
		?>
		<div class="hero-body">
			<div class="container has-text-centered">
					<div class="box">
					  <article class="media">
					    <div class="media-content">
					      <div class="content">
					        <p>
					          <strong><?php echo $_SESSION['email'];?></strong>
					          <br>
					          <h2><a href="includes/processos_php/logout.php">sair</a></h2> 

								<form method="POST" action="includes/processos_php/uploadImagens.php" enctype="multipart/form-data">
							
									Select Img:<input type="file" name="arquivo">
									<br>
									<input type="text" name="Ll">
									<input type="submit" class="button is-success is-rounded" name="Cadastrar">
								</form>
					        </p>
					      </div>
					    </div>
					  </article>
					</div>
				</div>
			</div>
		</div>
	<script src="includes/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="includes/js/bootstrap.min.js"></script>
    <script src="includes/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="includes/js/ie10-viewport-bug-workaround.js"></script>
</body>