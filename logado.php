<?php header("Content-Type: text/html; charset=utf8");?>
<?php include 'dbh.php'; 
session_start();?>
<!DOCTYPE html>
<html>
	<?php if(!isset($_SESSION['id_usuario']))
			header('Location: index2.php')?>
	<?php $id_usuario = $_SESSION['id_usuario']; ?>
	<?php
		$procurando = "SELECT * FROM user WHERE id = '".$id_usuario."'";
		$result = mysqli_query($conn, $procurando);
		$linha = mysqli_fetch_assoc($result);
		$pwd = $linha['pwd'];
		$nome = $linha['first'];
	?>
	<head>
		<title>Ifest | Ola <?php echo $nome; ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="description" content="Pit">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/custom.css" type="text/css">
		<link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
		<link rel="stylesheet" href="custom.css" type="text/css">
	</head>
	<body>
	<?php
		$procurando = "SELECT * FROM user WHERE id = '".$id_usuario."'";
		$result = mysqli_query($conn, $procurando);
		$linha = mysqli_fetch_assoc($result);
		$pwd = $linha['pwd'];
		$nome = $linha['first'];
		$id = $linha['id'];
	?>
	<!-- id=".$id_usuario.""); -->
	<!-- BACK TO TOP -->
     <?php echo  "<a href='profile.php?id=".$id."' class='back-to-top'><i class='fa fa-user' ></i></a>"?>

	<div class="topo" style="background-color: #ffb6c1; color: #000; text-align: center; padding: 12px">
		Belo Horizonte &#8675;
	</div>
		<nav class="navbar navbar-primary">
  <div class="container-fluid" style="padding: 5px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <li style="list-style-type: none;" class="navbar-brand" href="#">Bem vindo <?php echo $nome; ?>
      </li>
      
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
      <ul class="nav navbar-nav navbar-right">
		<?php echo "
        <form class='navbar-form' action='search.php?id=".$id."' method='post'>
        <div class='form-group'>
          <input type='text' name='search' required class='form-control' placeholder='Pesquisar'>
        </div>
        <button type='submit' name='btn_pesquisar' class='btn btn-info'>Pesquisar</button>
		<a href='logout.php' class='btn btn-danger'><i class='fa fa-sign-out' aria-hidden='true'></i>Logout</a>
      </form>"; ?>
	  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php echo "<a href='cadastro_eventos.php?id=".$id."' '>
<button type='button' class='btn btn-outline-info' style='top: 4px; right: 10px; position: absolute;'>+ Adicionar Evento</button>
</a>"?>

<!-- famoso slider -->
<div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide">
      </div>
      <div class="slide">
      </div>
    </div>
  </div>
</div><!-- End // .slider -->
<div class="slide_buttons">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js.js"></script>


<?php





?>


		<!-- Anuncio do topo -->
		<h4 class="anuncio-top" style="margin-top: 5%;">VEJA TODOS EVENTOS QUE TEMOS EM BH</h4>
		<?php
			$puxando_tudo = mysqli_query($conn, "select * from eventos where status_evento = 1") or die (mysqli_error($conn));
			while($aux = mysqli_fetch_assoc($puxando_tudo))
 			{

 				$datacerta = $aux['data'];

				echo "
					<div style='border-left: 4px solid #0099ff;' class='corpo-evento'>
					<div style='text-align: center'>
						<label>Nome: <b>".$aux["nome_evento"]."</b></label></div>
						";
						if(!empty($aux["imagem_evento"])){
                         echo "
                          <br><img src='assets/img/".$aux["imagem_evento"]."' style='width: 600px; height: 400px;'>"; 
                        }
                        else
                        {
        	             echo "
                         <br><img src='assets/img/logop.png' style='width: 600px; height: 400px;'>";
                        }

        echo"
						<br><br><label>Tipo: <b>".$aux["type"]."</b></label>
						<br><label>Classificação: <b>".$aux["classificacao"]." anos</b></label>						
						<br><i style='color:#0099ff;''margin-right: 5px;' class='fa fa-calendar-plus-o' aria-hidden='true'></i><b>".date('d/m/Y', strtotime($datacerta))."</b>
						<br><label>A partir de: <b style='color: #0099ff;'>R$".$aux["preco"]."</b></label>
						<br>	
						<div class='row' style='margin: 4% 0 0 0;'>				
							<div class='col-md-4'>
								<a href='visu_evento.php?id=".$aux['id_evento']."' class='btn btn-block btn-primary'>Mais informações</a>
							</div>
							</div>

						</div>
					</div>
					";
 			}

		?>
		
	<footer style="margin: 14.7% 0 0 0; background-color: #ffb6c1; padding: 11px; color: #000; font-family: 'Roboto', sans-serif; text-align: center;">
		&copy 2018 - BHFestas
	</footer>
	</body>
</html>