<?php


defined('XOOPS_ROOT_PATH') or die('Restricted access');


class WurflCorePreload extends XoopsPreloadItem
{
	function eventCoreHeaderAddmeta($args)
	{
		$module_handler =& xoops_gethandler('module');
		$xoModule = $module_handler->getByDirname('wurfl');
		$config_handler =& xoops_gethandler('config');
		$xoConfigs = $config_handler->getConfigList($xoModule->getVar('mid'));	
		if ($xoConfigs['postloader']==true) {
			$wurlf_devices =& xoops_getmodulehandler('devices', 'wurfl');
			$wurfl_device = $wurlf_devices->testUserAgent($_SERVER['HTTP_USER_AGENT'], true);
			if (is_array($wurfl_device)&&!empty($wurfl_device['did']))
			{
				$GLOBALS['xoopsTpl']->assign('wurfl', $wurlf_devices->getProviders($wurfl_device['did']));
				$GLOBALS['xoopsTpl']->assign('mobile', true);
			} else {
				$GLOBALS['xoopsTpl']->assign('mobile', false);
			}
		}		
	}
	
}

?>