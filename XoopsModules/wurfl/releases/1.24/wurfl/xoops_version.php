<?php
/**
 * Private message module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         pm
 * @since           2.3.0
 * @author          Jan Pedersen
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: xoops_version.php 2022 2008-08-31 02:07:17Z phppp $
 */
 
/**
 * This is a temporary solution for merging XOOPS 2.0 and 2.2 series
 * A thorough solution will be available in XOOPS 3.0
 *
 */

$modversion = array();
$modversion['name'] = _WURFL_MI_NAME;
$modversion['version'] = 1.24;
$modversion['description'] = _WURFL_MI_DESC;
$modversion['author'] = "Simon Roberts (simon@chronolabs.org.au)";
$modversion['credits'] = "To my Friend @ Xoops";
$modversion['license'] = "SDLC (Software Directive Licence Commercial)";
$modversion['image'] = "images/wurfl_slogo.png";
$modversion['dirname'] = "wurfl";
$modversion['status'] = "stable";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/admin.php";
$modversion['adminmenu'] = "admin/menu.php";

// Mysql file
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Table
$modversion['tables'][1] = "wurfl_devices_xhtml_ui";
$modversion['tables'][2] = "wurfl_devices_wta";
$modversion['tables'][3] = "wurfl_devices_wml_ui";
$modversion['tables'][4] = "wurfl_devices_wap_push";
$modversion['tables'][5] = "wurfl_devices_transcoding";
$modversion['tables'][6] = "wurfl_devices_streaming";
$modversion['tables'][7] = "wurfl_devices_storage";
$modversion['tables'][8] = "wurfl_devices_sound_format";
$modversion['tables'][9] = "wurfl_devices_sms";
$modversion['tables'][10] = "wurfl_devices_security";
$modversion['tables'][11] = "wurfl_devices_rss";
$modversion['tables'][12] = "wurfl_devices_product_info";
$modversion['tables'][13] = "wurfl_devices_playback";
$modversion['tables'][14] = "wurfl_devices_pdf";
$modversion['tables'][15] = "wurfl_devices_rss";
$modversion['tables'][16] = "wurfl_devices_object_download";
$modversion['tables'][17] = "wurfl_devices_mms";
$modversion['tables'][18] = "wurfl_devices_markup";
$modversion['tables'][19] = "wurfl_devices_j2me";
$modversion['tables'][20] = "wurfl_devices_image_format";
$modversion['tables'][21] = "wurfl_devices_flash_lite";
$modversion['tables'][22] = "wurfl_devices_drm";
$modversion['tables'][23] = "wurfl_devices_display";
$modversion['tables'][24] = "wurfl_devices_css";
$modversion['tables'][25] = "wurfl_devices_chtml_ui";
$modversion['tables'][26] = "wurfl_devices_cache";
$modversion['tables'][27] = "wurfl_devices_bugs";
$modversion['tables'][26] = "wurfl_devices_bearer";
$modversion['tables'][27] = "wurfl_devices_ajax";
$modversion['tables'][28] = "wurfl_devices";

// Scripts to run upon installation or update
//$modversion['onInstall'] = "include/install.php";
//$modversion['onUpdate'] = "include/update.php";

// Menu
$modversion['hasMain'] = 0;

$modversion['config'] = array();
$modversion['config'][]=array(
	'name' => 'provider',
	'title' => '_WRFL_MI_PROVIDER',
	'description' => '_WRFL_MI_PROVIDER_DESC',
	'formtype' => 'select_multi',
	'valuetype' => 'array',
	'options' => array(	'ajax' => 'ajax',
						'bearer' => 'bearer',
						'bugs' => 'bugs',
						'cache' => 'cache',
						'chtml_ui' => 'chtml_ui',
						'css' => 'css',
						'display' => 'display',
						'drm' => 'drm',
						'flash_lite' => 'flash_lite',
						'image_format' => 'image_format',
						'j2me' => 'j2me',
						'markup' => 'markup',
						'mms' => 'mms',
						'object_download' => 'object_download',
						'pdf' => 'pdf',
						'playback' => 'playback',
						'product_info' => 'product_info',
						'rss' => 'rss',
						'security' => 'security',
						'sms' => 'sms',
						'sound_format' => 'sound_format',
						'storage' => 'storage',
						'streaming' => 'streaming',
						'transcoding' => 'transcoding',
						'wap_push' => 'wap_push',
						'wml_ui' => 'wml_ui',
						'wta' => 'wta',
						'xhtml_ui' => 'xhtml_ui'),
						
	'default' => array(	'ajax' => 'ajax',
						'bearer' => 'bearer',
						'bugs' => 'bugs',
						'cache' => 'cache',
						'chtml_ui' => 'chtml_ui',
						'css' => 'css',
						'display' => 'display',
						'drm' => 'drm',
						'flash_lite' => 'flash_lite',
						'image_format' => 'image_format',
						'j2me' => 'j2me',
						'markup' => 'markup',
						'mms' => 'mms',
						'object_download' => 'object_download',
						'pdf' => 'pdf',
						'playback' => 'playback',
						'product_info' => 'product_info',
						'rss' => 'rss',
						'security' => 'security',
						'sms' => 'sms',
						'sound_format' => 'sound_format',
						'storage' => 'storage',
						'streaming' => 'streaming',
						'transcoding' => 'transcoding',
						'wap_push' => 'wap_push',
						'wml_ui' => 'wml_ui',
						'wta' => 'wta',
						'xhtml_ui' => 'xhtml_ui'));

$modversion['config'][]=array(
	'name' => 'postloader',
	'title' => '_WRFL_MI_POSTLOADER',
	'description' => '_WRFL_MI_POSTLOADER_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

?>