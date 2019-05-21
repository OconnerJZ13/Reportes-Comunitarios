<?php 


require_once('arc.inc');

//echo "Valor: ".$_POST['registro'];
arc();


if (isset($_POST['registro'])) {
	//echo "entra al isset ";
	if (!empty($_POST['registro'])) {
		//echo "entra al no vacio";
		$mail= cifrar($_POST['usrmail']);
		$user= cifrar($_POST['usrname']);
		$pass= cifrar($_POST['usrpass']);
		
		registrar($mail, $user, $pass);
	}

}

if(isset($_POST['ingresar'])){

	if (!empty($_POST['ingresar'])) {
		
		$mail= cifrar($_POST['usermail']);
		$pass= cifrar($_POST['password']);

		entrar($mail, $pass);

	}
}

if (isset($_POST['fb'])) {
	//echo "entra al isset ";
	if (!empty($_POST['fb'])) {
		//echo "entra al no vacio";
		$mail= cifrar($_POST['usrCorreo']);
		$user= cifrar($_POST['usrNombre']);
		$pass= cifrar($_POST['usrPwd']);
		$apes= cifrar($_POST['usrApellidos']);
		$foto= cifrar($_POST['usrFoto']);
		fb($mail, $user, $pass, $apes, $foto);
	}

}

 ?>