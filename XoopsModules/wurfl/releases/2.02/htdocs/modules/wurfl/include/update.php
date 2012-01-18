<?php
function xoops_module_update_wurfl(&$module) {
	$result =$GLOBALS['xoopsDB']->queryF("ALTER TABLE ".$GLOBALS['xoopsDB']->prefix('wurfl_devices')." ADD COLUMN(`manufacture` varchar(128))");
	$result =$GLOBALS['xoopsDB']->queryF("ALTER TABLE ".$GLOBALS['xoopsDB']->prefix('wurfl_devices')." ADD COLUMN(`model` varchar(128))");
	$result =$GLOBALS['xoopsDB']->queryF("ALTER TABLE ".$GLOBALS['xoopsDB']->prefix('wurfl_devices')." ADD COLUMN(`series` varchar(128))");
	return true;	
}

?>