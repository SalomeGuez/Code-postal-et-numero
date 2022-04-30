// validité d'un code postal

<?php 

function valider_cp ($cp)

{

	if (strlen($cp) != 5)
	{
		return("Code postal non valide");
	}


    elseif (!is_numeric($cp))
	{
		return("Code postal non valide ");
	}


	elseif (substr($cp,0,2) =="2A" or (substr($cp,0,2) =="2B"))
	{
		return ("Code postal valide");
	}

	elseif (strpos($cp," ") !== false)
	{
		return("Code postal non valide, retirez les espaces");
	}

	else
	{
		return("Code postal valide");
	}
}



$code_postal1 = "23456";
echo($code_postal1." : ".valider_cp($code_postal1)."<br>");

$code_postal2 = "234T6";
echo($code_postal2." : ".valider_cp($code_postal2)."<br>");

?>




// validité d'un numéro de téléphone :  

<?php

function verif_tel($tel)
{
	if (strlen($tel) != 10)
	{
		return("Mauvais format");
	}
	
	elseif (strpos($tel," ") !== false)
	{
		return("Espaces interdits");
	}
	
	elseif (!is_numeric($tel))
	{
		return("Caractères interdits");
	}
	
	elseif (substr($tel,0,1) != "0" or substr($tel,1,1) == "0")
	{
		return("Problème d'intégrité");
	}
	
	else
	{
		return("Format correct");
	}
}

$num = "01";
echo($num." : ".verif_tel($num)."<br>");

$num = "01 45 56 1";
echo($num." : ".verif_tel($num)."<br>");

$num = "01455615zz";
echo($num." : ".verif_tel($num)."<br>");

$num = "9145561561";
echo($num." : ".verif_tel($num)."<br>");

$num = "0045561561";
echo($num." : ".verif_tel($num)."<br>");

$num = "0145561561";
echo($num." : ".verif_tel($num)."<br>");

?>



