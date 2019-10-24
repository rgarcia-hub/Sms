
<?php 
$sms = $_POST['sms'];
$id_carreras = $_POST['id'];

include("conexion.php");
$sql="SELECT CELULAR FROM SIGAA_CAT_ALUMNO WHERE CELULAR!='NULL' AND CELULAR!='' AND MATRICULA=183183";
$resultado=sqlsrv_query($connexion, $sql);
if(!$resultado)
{
	die("error");
}else {
	$texto = 'Estimado usuario te invitamos a leer nuestro aviso de privacidad en www.telcel.com';
	while($data= sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC))
	{
		foreach ($data as $key => $var)
		{
			echo shell_exec("adb shell am start -a android.intent.action.SENDTO -d sms:".$var." --es sms_body '".$texto."' --ez exit_on_sent true");
			sleep(1);
			echo shell_exec("adb shell input keyevent 61");
			sleep(1);
			echo shell_exec("adb shell input keyevent 61");
			sleep(1);
			echo shell_exec("adb shell input keyevent 66");
			//echo '<br>';
			//echo 'enviando '.($key+1).' de '.sizeof($data); 
			//echo '<br>';
			sleep(5);
		}
	}
}

?>
