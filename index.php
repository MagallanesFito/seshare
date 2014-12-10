<?php
define('DEFAULT_LANG',$_GET["lang"]);
require_once("protected/config.php");
require_once("protected/core/template.php");
require_once("protected/lang/".DEFAULT_LANG."/lang.php");
require_once("protected/core/sys.php");
require_once("protected/templates/".TEMPLATE."/template.php");
$__template=new Template($__templateConfig);

require_once("protected/lang/".DEFAULT_LANG."/default.php");
$__title=showText("default","welcomeTitle");
require_once("protected/templates/".TEMPLATE."/header.php");
?>
<h1><?php echo showText("default","welcomeTitle"); ?></h1>
<p><?php echo showText("default","welcomeText");?></p>
<?php require_once("protected/templates/".TEMPLATE."/footer.php");