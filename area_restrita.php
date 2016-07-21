	<?php 
		session_start();
		if((!isset($_SESSION['login'])) && (!isset($_SESSION['senha'])))
			header('location:index.php');
		else
			$login_nome = $_SESSION['login'];
	?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<title>Área Restrita</title>
</head>
<body>
	<h1>Área Restrita</h1>
	<p><span>Bem Vindo, <?php echo $login_nome ?> | </span><a href="logout.php">Sair do Sistema</a><p>
	<hr />
	<h2>Exemplo de rotina para login de usuario</h2>
</body>
</html>