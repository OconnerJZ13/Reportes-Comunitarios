<?php 

session_start();

function arc(){
	include ('cifrado.php'); 
	include ('conexion.php');
}

function dato($mail,$pass){
	//include ('cifrado.php'); 
	include ('conexion.php');

	$arr= array();

	$sqlUser= "SELECT idUser FROM usuarios WHERE correo='$mail' AND contrasena='$pass' AND estatus='ALTA' ";
	$conUser= $mysqli->query($sqlUser);
		while ($rUser= $conUser->fetch_object()) {
			$idUser= $rUser->idUser;
	}

	$sqlDat= "SELECT * FROM datos WHERE idUser= $idUser";
	$conDat= $mysqli->query($sqlDat);
	while ($rDat= $conDat->fetch_object()) {
		$arr[0]= $rDat->idUser;
		$arr[1]= $rDat->idDato;
		$arr[2]= descifrar($rDat->nombre);
		$arr[3]= descifrar($rDat->apellido);
		$arr[4]= descifrar($rDat->alias);
		$arr[5]= $rDat->idFoto;
	}


	return $arr;

}

function registrar($mail, $user, $pass){

	include ('conexion.php'); 

	$fecha= date('d-M-Y h:i:s');

		$sqlReg= "INSERT INTO usuarios VALUES (null, '$mail', '$pass', 'ALTA')";
		$conReg= $mysqli->query($sqlReg);

		if(!$conReg){
			$mysqli->query("INSERT INTO log VALUES(null, '$sqlReg', '$fecha')");
		}else{

			$sqlUser= "SELECT idUser FROM usuarios  WHERE correo='$mail' AND contrasena='$pass' AND estatus='ALTA' ";
			$conUser= $mysqli->query($sqlUser);
			while ($rUser= $conUser->fetch_object()) {
				$idUser= $rUser->idUser;
			}

			$sqlDat= "INSERT INTO datos VALUES(null, null, null, '$user', null, '$idUser')";
			$conDat= $mysqli->query($sqlDat);

			if(!$conDat){
				$mysqli->query("INSERT INTO log VALUES(null, '$sqlDat', '$fecha')");
			}else{
				echo "<script> window.location= '../#Login' </script>";
			}

		}

}


function entrar($usr, $pwd){
 
include ('conexion.php'); 

$dato=0;

$sql= "SELECT * FROM usuarios WHERE correo= '$usr' AND contrasena= '$pwd' AND estatus='ALTA' ";
//echo "$sql";

$con= $mysqli->query($sql);

while ($r= $con->fetch_object()) {
	$dato++;
}

if($dato>0 && $dato<2){
	$_SESSION['usr']= $usr;
	$_SESSION['pwd']= $pwd;
		echo "<script> window.location= '../reporte.php' </script>";
}else{
	echo "<script> window.location= '../#Login' </script>";
}


}


function fb($mail, $user, $pass, $apes, $foto){

	include ('conexion.php'); 

	$fecha= date('d-M-Y h:i:s');
	$existe=0;

	$sqlExiste= "SELECT * FROM usuarios WHERE correo='$mail' AND contrasena='$pass' AND estatus='ALTA' ";
	$conExiste= $mysqli->query($sqlExiste);
	while ($rExiste= $conExiste->fetch_object()) {
		$existe++;
	}

	if($existe===0){

		$sqlReg= "INSERT INTO usuarios VALUES (null, '$mail', '$pass', 'ALTA')";
		$conReg= $mysqli->query($sqlReg);

		if(!$conReg){
			$mysqli->query("INSERT INTO log VALUES(null, '$sqlReg', '$fecha')");
		}else{

			$sqlUser= "SELECT idUser FROM usuarios  WHERE correo='$mail' AND contrasena='$pass' AND estatus='ALTA' ";
			$conUser= $mysqli->query($sqlUser);
			while ($rUser= $conUser->fetch_object()) {
				$idUser= $rUser->idUser;
			}

			$sqlDat= "INSERT INTO datos VALUES(null, $user, '$apes', '$user', '$foto', '$idUser')";
			$conDat= $mysqli->query($sqlDat);

			if(!$conDat){
				$mysqli->query("INSERT INTO log VALUES(null, '$sqlDat', '$fecha')");
			}else{
				echo "<script> window.location= '../#Login' </script>";
			}

		}
	}else if($existe > 0 && $existe < 2){
		entrar($mail, $pass);
	}

}


 ?>