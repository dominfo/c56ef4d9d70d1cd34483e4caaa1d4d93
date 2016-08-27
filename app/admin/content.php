<?php
// require_once(ROOT.DS.'app'.DS.'admin'.DS.'page'.DS.'login'.'.php');
// echo $page;
// echo $page2;
// exit;
if (isset($page))
{

	if (isset($page2))
	{

	    require_once(ROOT.DS.'app'.DS.'admin'.DS.'page'.DS.$page2.'.php');
	}

}

?>

