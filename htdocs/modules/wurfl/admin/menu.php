<?php
if (!defined('XOOPS_ROOT_PATH')) { exit(); }

$module_handler = xoops_gethandler('module');
$GLOBALS['wurflModule'] = $module_handler->getByDirname('wurfl');
global $adminmenu;
$adminmenu = array();	
$adminmenu[1]= array("link"    	=> "admin/dashboard.php",
			                    "title"    	=> _WURFL_MI_DASHBOARD,
								"icon"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/home.png",
								"image"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/home.png");

$adminmenu[2]= array("link"    	=> "admin/devices.php",
			                    "title"    	=> _WURFL_MI_DEVICES,
								"icon"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/wurfl.devices.png",
								"image"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/wurfl.devices.png");

$adminmenu[3]= array("link"    	=> "admin/import.php",
			                    "title"    	=> _WURFL_MI_IMPORTXML,
								"icon"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/wurfl.import.png",
								"image"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/wurfl.import.png");

$adminmenu[4]= array("link"    	=> "admin/useragents.php",
			                    "title"    	=> _WURFL_MI_USERAGENTS,
								"icon"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/wurfl.useragents.png",
								"image"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/wurfl.useragents.png");

$adminmenu[5]= array("link"    	=> "admin/about.php",
			                    "title"    	=> _WURFL_MI_ABOUT,
								"icon"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/about.png",
								"image"		=> "../../".$GLOBALS['wurflModule']->getInfo('icons32')."/about.png");

?>