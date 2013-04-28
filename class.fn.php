<?php
class fn
{
	function headertable()
	{
		$con="<table><tr class=\"header ui-corner-top\"><td class=\"ui-state-default\">N</td><td class=\"ui-state-default\">Ciudadano</td><td class=\"ui-state-default\">Apellido Paterno</td><td class=\"ui-state-default\">Apellido Materno</td><td class=\"ui-state-default\">Apellido Esposo</td><td class=\"ui-state-default\">Nombres</td><td class=\"ui-state-default\">Fecha Nac</td><td class=\"ui-state-default\">Sexo</td><td class=\"ui-state-default\">Estado Civil</td><td class=\"ui-state-default\">Domicilio 1</td><td class=\"ui-state-default\">Domicilio 2</td><td class=\"ui-state-default\">Tipo Doc</td><td class=\"ui-state-default\">N&uacute;mero Doc</td><td class=\"ui-state-default\">Mesa</td><td class=\"ui-state-default\">Estado</td><td class=\"ui-state-default\">Fecha de Ins</td><td class=\"ui-state-default\">Lugar de Registro</td></tr>";
		echo $con;
	}
	function footertable()
	{
		$con="</table>";
		echo $con;
	}
	function bodytable($r)
	{
		$nac=date("Y-m-d",strtotime($r['fechanac']));
		$con="<tr class=\"body\"><td>".$r['id']."</td><td>".$r['ciudadano']."</td><td>".$r['appat']."</td><td>".$r['apmat']."</td><td>".$r['apesp']."</td><td>".$r['nombres']."</td><td>".$nac."</td><td>".$r['sexo']."</td><td>".$r['estadocivil']."</td><td>".$r['dom1']."</td><td>".$r['dom2']."</td><td>".$r['tipodoc']."</td><td>".$r['numerodoc']."</td><td>".$r['mesa']."</td><td>".$r['estado']."</td><td>".$r['fechains']."</td><td>".$r['lugarregistro']."</td></tr>";
		echo utf8_encode($con);
	}
	function script()
	{?><script language="javascript" type="text/javascript">$(document).ready(function(){});</script>
	<?php
	}
	function datapost($r)
	{
		foreach($r as $k => $v)
		{
			switch($k):
				case 'numciudadano':{$vec[1]="%".$v."%";}break;
				case 'nombres':{$vec[2]="%".$v."%";}break;
				case 'ap_pa':{$vec[3]="%".$v."%";}break;
				case 'ap_ma':{$vec[4]="%".$v."%";}break;
				case 'ap_esp':{$vec[5]="%".$v."%";}break;
				case 'fechanac':{$vec[6]="%".$v."%";}break;
				case 'tipodoc':{$vec[7]="%".$v."%";}break;
				case 'numerodoc':{$vec[8]="%".$v."%";}break;
				case 'mesa':{$vec[9]="%".$v."%";}break;
				case 'estado':{$vec[10]="%".$v."%";}break;
				case 'dom1':{$vec[11]="%".$v."%";}break;
				case 'dom2':{$vec[12]="%".$v."%";}break;
				case 'sexo':{$vec[13]="%".$v."%";}break;
				case 'estadocivil':{$vec[14]="%".$v."%";}break;
				case 'fechains':{$vec[15]="%".$v."%";}break;
				case 'lugarins':{$vec[16]="%".$v."%";}break;
			endswitch;
		}
		return $vec;
	}
}
?>