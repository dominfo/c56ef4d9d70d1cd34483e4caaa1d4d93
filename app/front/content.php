<div id="content">
<?php
require_once(ROOT.DS.'app'.DS.'front'.DS.'page'.DS.'slider'.'.php');

if (isset($page))
{
    require_once(ROOT.DS.'app'.DS.'front'.DS.'page'.DS.$page.'.php');
}

?>

</div>