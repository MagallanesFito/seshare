<?php
function showText($view="default",$text)
{
	return htmlentities($GLOBALS["__lang"]["translation"][$view][$text],ENT_QUOTES);
}
?>