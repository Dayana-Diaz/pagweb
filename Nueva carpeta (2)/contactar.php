<?php
	include"conectar.php";
	$vCveEsp=$_POST['cveEspecialidad'];
	$vNomEsp=$_POST['nomEspecialidad'];
	$vNomArea=$_POST['nombreArea'];
	$vBoton=$_POST['boton'];
	$resConectar=conecta();
	$sqlArea="SELECT cveArea FROM AREA WHERE nomArea='$vNomArea';";
	$sqlCveArea=mysql_query($sqlArea,$sqlresConectar);
	$resulCveArea=mysql_fetch_array($sqlCveArea);
	$vCveArea=$resulCveArea["cveArea"];
	if($vBoton=="Enviar")
	{
		$sqlAltaEsp="INSERT INTO ESPECIALIDAD VALUES('$vCveEsp','$vNomEsp','$vCveArea');";
		$guarda=mysql_query($sqlAltaEsp,$resConectar);
		if(!$guarda)
		{
			echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
			alert('Especialidad registrada')
			window.location='/index.html 
			</SCRIPT>";
		}
	}