<?php 
	include_once('wrk/MatchBDManager.php');
	include_once('beans/MatchDB.php');
        
    if (isset($_SERVER['REQUEST_METHOD']))
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET')
		{
			$matchBD = new MatchBDManager();
			echo $matchBD->getInXML();
		}
	}
?>