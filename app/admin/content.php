<div id="content">
<?php

if (isset($page))
{

	if (isset($page2))
	{

	    require_once(ROOT.DS.'app'.DS.'admin'.DS.'page'.DS.$page2.'.php');
	}
}

?>

</div>