<?php 
	include_once('wrk/EquipeBDManager.php');
	include_once('beans/Equipe.php');
        
    if (isset($_SERVER['REQUEST_METHOD']))
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET')
		{
			$equipeBD = new EquipeBDManager();
			echo $equipeBD->getInXML();
		}
	}
?>