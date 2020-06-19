<?php
	// Conectando ao banco, etc
	include 'dbh.php';
	session_start();
	// Pegando variáveis
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	// Vendo se as variáveis estão vazias
	if($uid == "" || $pwd == "") {
		header("location: index2.php?erro=camposvazios");
	}


	else {
		$sql = "SELECT * FROM user WHERE uid = '".$uid."' AND pwd = '".$pwd."'";
		$result = mysqli_query($conn, $sql);
		$linha = mysqli_fetch_assoc($result);
		$id_usuario = $linha['id'];
		$pwd = $linha['pwd'];

		
		if($result->num_rows == 0) {
			header("location: index2.php?erro=nacheingm");
		}

		else {
			$_SESSION['id_usuario'] = $id_usuario;
			header("location: logado.php?id=".$id_usuario."");
		}
	}
?>