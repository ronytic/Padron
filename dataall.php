<?php
if(!empty($_POST)):
	define("LPE_ENABLED",1);
	//if(isset($_POST) &&)
	include_once("loader.php");
	$db->connectdb($config->host,$config->user,$config->pass,$config->db);
	$r=$fn->datapost($_POST);
	$sql="SELECT * FROM datos WHERE ciudadano LIKE '".$r[1]."' and nombres LIKE '".$r[2]."' and appat LIKE '".$r[3]."' and apmat LIKE '".$r[4]."' and apesp LIKE '".$r[5]."' and fechanac LIKE '".$r[6]."' and tipodoc LIKE '".$r[7]."' and numerodoc LIKE '".$r[8]."' and mesa LIKE '".$r[9]."' and estado LIKE '".$r[10]."' and dom1 LIKE '".$r[11]."' and dom2 LIKE '".$r[12]."' and sexo LIKE '".$r[13]."' and estadocivil LIKE '".$r[14]."' and fechains LIKE '".$r[15]."' and lugarregistro LIKE '".$r[16]."'";
	//echo $sql;
	//$sql="select * from datos WHERE ciudadano='500095906'";
	$query=$db->query($sql);
	$query2=$query;
	if(mysql_num_rows($query2)!=0)
	{
	$i=1;
	$fn->headertable();
	while($r=mysql_fetch_array($query)):
		$r[].='id';$r['id']=$i;
		$fn->bodytable($r);
		$i++;
	endwhile;
	$fn->script();
	$fn->footertable();
	}
	else
	{
		echo "LA BUSQUEDA NO PRODUJO NINGUN RESULTADO";
	}
	$db->free($query);
	$db->close();
endif;
//500095906
?>
