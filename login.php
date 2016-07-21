<?php 

	session_start();
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$con = mysqli_connect("localhost", "root", "adm32", "login");

	$query = "SELECT * FROM USUARIO WHERE NOME = '$login' AND SENHA = '$senha'" ;
	
	$result = mysqli_query($con, $query);
	
	if (mysqli_num_rows($result) > 0)
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:area_restrita.php');
	}
	else
	{
		header('location:index.php');
	}
	mysqli_free_result($result);
	mysqli_close($con);
	
/*

mysql> CREATE DATABASE login;
Query OK, 1 row affected (0.00 sec)

mysql> use login;
Database changed
mysql> CREATE TABLE USUARIO(NOME VARCHAR(100), SENHA VARCHAR(100))
Query OK, 0 rows affected (0.22 sec)

mysql> INSERT INTO USUARIO VALUES('marcos','marcos');
Query OK, 1 row affected (0.03 sec)

mysql> SELECT * FROM USUARIO;
+--------+--------+
| NOME   | SENHA  |
+--------+--------+
| marcos | marcos |
+--------+--------+
1 row in set (0.00 sec)

mysql> 

*/

?>
