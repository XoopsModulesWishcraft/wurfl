<?php


defined('XOOPS_ROOT_PATH') or die('Restricted access');


class WurflCorePreload extends XoopsPreloadItem
{
	function eventCoreIncludeCommonEnd($args)
	{
		$module_handler =& xoops_gethandler('module');
		$GLOBALS['wurflModule'] = $module_handler->getByDirname('wurfl');
		$config_handler =& xoops_gethandler('config');
		$GLOBALS['wurflModuleConfig'] = $config_handler->getConfigList($GLOBALS['wurflModule']->getVar('mid'));	
		if ($GLOBALS['wurflModuleConfig']['postloader']==true) {		
			$wurlf_devices =& xoops_getmodulehandler('devices', 'wurfl');
			$theme = $wurlf_devices->testUserAgentForTheme($_SERVER['HTTP_USER_AGENT'], true);
			if ($theme!=false) {
				$GLOBALS['xoopsConfig']['theme_set'] = $theme;
			}
		}
	}
	
	function eventCoreHeaderAddmeta($args)
	{
		if ($GLOBALS['wurflModuleConfig']['postloader']==true) {
			$wurlf_devices =& xoops_getmodulehandler('devices', 'wurfl');
			$wurfl_device = $wurlf_devices->testUserAgent($_SERVER['HTTP_USER_AGENT'], true);
			if (is_array($wurfl_device)&&!empty($wurfl_device['did']))
			{
				foreach($wurlf_devices->getProviderVariables($wurfl_device['did']) as $key => $data) {
					$GLOBALS['xoopsTpl']->assign($key, $data);
				}
				$GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_associative'], $wurlf_devices->getProviders($wurfl_device['did']));
			} else {
				$GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_mobile_support'], false);
				$GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_pad_support'], false);
			}
		}		
	}
	
}

?>