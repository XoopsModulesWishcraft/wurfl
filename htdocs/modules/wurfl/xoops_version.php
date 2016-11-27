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
$modversion['version'] = 2.10;
$modversion['description'] = _WURFL_MI_DESC;
$modversion['author'] = "Simon Roberts (simon@chronolabs.org.au)";
$modversion['credits'] = "To my Friend @ Xoops --> for New Year and Christmas 2011";
$modversion['license'] = "GPL";
$modversion['image'] = "images/wurfl_slogo.png";
$modversion['dirname'] = "wurfl";
$modversion['status'] = "stable";

$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses';
$modversion['icons16'] = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = 'Frameworks/moduleclasses/icons/32';

$modversion['release_info'] = "Stable 18/01/2011";
$modversion['release_file'] = XOOPS_URL."/modules/".$modversion['dirname']."/docs/changelog.txt";
$modversion['release_date'] = "2011/01/18";

$modversion['author_realname'] = "Simon Antony Roberts";
$modversion['author_website_url'] = "http://www.chronolabs.org.au";
$modversion['author_website_name'] = "Chronolabs Australia";
$modversion['author_email'] = "simon@chronolabs.coop";
$modversion['demo_site_url'] = "Chronolabs Australia";
$modversion['demo_site_name'] = "";
$modversion['support_site_url'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=30";
$modversion['support_site_name'] = "Chronolabs";
$modversion['submit_bug'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=30";
$modversion['submit_feature'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=30";
$modversion['usenet_group'] = "sci.chronolabs";
$modversion['maillist_announcements'] = "";
$modversion['maillist_bugs'] = "";
$modversion['maillist_features'] = "";

// Admin things
$modversion['system_menu'] = 1;
$modversion['onUpdate'] = "include/update.php";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/dashboard.php";
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
$modversion['tables'][28] = "wurfl_devices_bearer";
$modversion['tables'][29] = "wurfl_devices_ajax";
$modversion['tables'][30] = "wurfl_devices";

// Smarty Templates
$i=1;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_import.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_import_redirect.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_import_errors.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_import_finished.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_devices_edit.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_devices_list.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_list_useragents.html';
$modversion['templates'][$i]['description'] = '';
$i++;
foreach( array(	'ajax', 'bearer', 'bugs', 'cache', 'chtml_ui', 'css', 'display', 'drm', 'flash_lite', 'image_format', 
				'j2me', 'markup', 'mms', 'object_download', 'pdf', 'playback', 'product_info', 'rss', 'security', 
				'sms', 'sound_format', 'storage', 'streaming', 'transcoding', 'wap_push', 'wml_ui', 'wta', 'xhtml_ui'	) as $class) {

$modversion['templates'][$i]['file'] = 'wurfl_cpanel_list_'.$class.'.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wurfl_cpanel_create_'.$class.'.html';
$modversion['templates'][$i]['description'] = '';
$i++;
}

// Menu
$modversion['hasMain'] = 0;

$modversion['config'] = array();

$modversion['config'][]=array(
	'name' => 'postloader',
	'title' => '_WURFL_MI_POSTLOADER',
	'description' => '_WURFL_MI_POSTLOADER_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

require_once XOOPS_ROOT_PATH . '/class/xoopslists.php';
$dirlist = XoopsLists::getThemesList();
$themelist = array(_WURFL_MI_NONE => '');
if (!empty($dirlist)) {
	asort($dirlist);
	foreach($dirlist as $themedir) {
		$themelist[$themedir] = $themedir;
	}
}

$modversion['config'][]=array(
	'name' => 'mob_useragent_android',
	'title' => '_WURFL_MI_MOBILE_USERAGENT_ANDROID_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_USERAGENT_ANDROID_SUPPORT_DESC',
	'formtype' => 'textarea',
	'valuetype' => 'text',
	'default' => 'Android 2.1|Android 2.2|Android 2.2.1|Android 1.0.3|Android 2.2.1|Android 1.6|Android');

$modversion['config'][]=array(
	'name' => 'mob_android',
	'title' => '_WURFL_MI_MOBILE_ANDROID_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_ANDROID_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'mob_useragent_apple',
	'title' => '_WURFL_MI_MOBILE_USERAGENT_APPLE_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_USERAGENT_APPLE_SUPPORT_DESC',
	'formtype' => 'textarea',
	'valuetype' => 'text',
	'default' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A405 Safari/7534.48.3|Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; es-es) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405|Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; es-es) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B405 Safari/531.21.10|Mozilla/5.0 (iPad; U; CPU OS 3_2_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B500 Safari/531.21.10|Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B367 Safari/531.21.10|Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B367 Safari/531.21.10|Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16|Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16|Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1A543a Safari/419.3');

$modversion['config'][]=array(
	'name' => 'mob_apple',
	'title' => '_WURFL_MI_MOBILE_APPLE_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_APPLE_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'mob_ajaxflashhtmlcss',
	'title' => '_WURFL_MI_MOBILE_AJAXFLASHHTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_AJAXFLASHHTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'mob_ajaxhtmlcss',
	'title' => '_WURFL_MI_MOBILE_AJAXHTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_AJAXHTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'mob_flashhtmlcss',
	'title' => '_WURFL_MI_MOBILE_FLASHHTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_FLASHHTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'mob_htmlcss',
	'title' => '_WURFL_MI_MOBILE_HTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_HTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'mob_html',
	'title' => '_WURFL_MI_MOBILE_HTML_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_HTML_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'mob_wap_push',
	'title' => '_WURFL_MI_MOBILE_WAP_PUSH_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_WAP_PUSH_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_wml',
	'title' => '_WURFL_MI_MOBILE_WML_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_WML_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_min_width',
	'title' => '_WURFL_MI_PAD_MINIMUM_WIDTH',
	'description' => '_WURFL_MI_PAD_MINIMUM_WIDTH_DESC',
	'formtype' => 'text',
	'valuetype' => 'int',
	'default' => '1024');	

$modversion['config'][]=array(
	'name' => 'pad_min_height',
	'title' => '_WURFL_MI_PAD_MINIMUM_HEIGHT',
	'description' => '_WURFL_MI_PAD_MINIMUM_HEIGHT_DESC',
	'formtype' => 'text',
	'valuetype' => 'int',
	'default' => '720');

$modversion['config'][]=array(
	'name' => 'pad_useragent_android',
	'title' => '_WURFL_MI_PAD_USERAGENT_ANDROID_SUPPORT',
	'description' => '_WURFL_MI_PAD_USERAGENT_ANDROID_SUPPORT_DESC',
	'formtype' => 'textarea',
	'valuetype' => 'text',
	'default' => 'Mozilla/5.0 (Linux; U; Android 2.2; de-de; U0101HA Build/FRF85B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1|Mozilla/5.0 (Linux; U; Android 2.2.1; de-de; SP-60 Build/MASTER) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1|Mozilla/5.0 (Linux; U; Android 2.1-2010.11.4; de-de; XST2 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17|Mozilla/5.0 (Linux; U; Android 1.0.3; de-de; A80KSC Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17|Mozilla/5.0 (Linux; U; Android 1.6; en-us; xpndr_ihome Build/DRD35) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1|Mozilla/5.0 (Linux; U; Android 2.2.1; de-de; X2 Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');

$modversion['config'][]=array(
	'name' => 'pad_android',
	'title' => '_WURFL_MI_PAD_ANDROID_SUPPORT',
	'description' => '_WURFL_MI_PAD_ANDROID_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_useragent_apple',
	'title' => '_WURFL_MI_PAD_USERAGENT_APPLE_SUPPORT',
	'description' => '_WURFL_MI_PAD_USERAGENT_APPLE_SUPPORT_DESC',
	'formtype' => 'textarea',
	'valuetype' => 'text',
	'default' => 'Mozilla/5.0 (iPad; U; CPU OS 4_3 like Mac OS X; de-de) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F191 Safari/6533.18.5|Mozilla/5.0 (iPad; U; CPU OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8G4 Safari/6533.18.5|Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.10|Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-us) AppleWebKit/531.9 (KHTML, like Gecko) Version/4.0.3 Safari/531.9|Mozilla/5.0(iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 Safari/531.21.10|Mozilla/5.0 (iPad; U; CPU OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F190 Safari/6533.18.5|Mozilla/5.0 (iPad; CPU OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.0.2 Mobile/9A5248d Safari/6533.18.5');

$modversion['config'][]=array(
	'name' => 'pad_apple',
	'title' => '_WURFL_MI_PAD_APPLE_SUPPORT',
	'description' => '_WURFL_MI_PAD_APPLE_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_ajaxflashhtmlcss',
	'title' => '_WURFL_MI_PAD_AJAXFLASHHTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_PAD_AJAXFLASHHTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_ajaxhtmlcss',
	'title' => '_WURFL_MI_PAD_AJAXHTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_PAD_AJAXHTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_flashhtmlcss',
	'title' => '_WURFL_MI_PAD_FLASHHTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_PAD_FLASHHTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_htmlcss',
	'title' => '_WURFL_MI_PAD_HTMLCSS_SUPPORT',
	'description' => '_WURFL_MI_PAD_HTMLCSS_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_html',
	'title' => '_WURFL_MI_PAD_HTML_SUPPORT',
	'description' => '_WURFL_MI_PAD_HTML_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'var_chtml_support',
	'title' => '_WURFL_MI_VAR_CHTML_SUPPORT',
	'description' => '_WURFL_MI_VAR_CHTML_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_html');

$modversion['config'][]=array(
	'name' => 'var_xhtml_support',
	'title' => '_WURFL_MI_VAR_XHTML_SUPPORT',
	'description' => '_WURFL_MI_VAR_XHTML_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_xhtml');

$modversion['config'][]=array(
	'name' => 'var_wap_support',
	'title' => '_WURFL_MI_VAR_WAP_SUPPORT',
	'description' => '_WURFL_MI_VAR_WAP_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_wap');

$modversion['config'][]=array(
	'name' => 'var_wml_support',
	'title' => '_WURFL_MI_VAR_WML_SUPPORT',
	'description' => '_WURFL_MI_VAR_WML_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_wml');

$modversion['config'][]=array(
	'name' => 'var_css_support',
	'title' => '_WURFL_MI_VAR_CSS_SUPPORT',
	'description' => '_WURFL_MI_VAR_CSS_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_css');

$modversion['config'][]=array(
	'name' => 'var_ajax_support',
	'title' => '_WURFL_MI_VAR_AJAX_SUPPORT',
	'description' => '_WURFL_MI_VAR_AJAX_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_ajax');

$modversion['config'][]=array(
	'name' => 'var_flash_support',
	'title' => '_WURFL_MI_VAR_FLASH_SUPPORT',
	'description' => '_WURFL_MI_VAR_FLASH_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_flash');

$modversion['config'][]=array(
	'name' => 'var_j2me_support',
	'title' => '_WURFL_MI_VAR_J2ME_SUPPORT',
	'description' => '_WURFL_MI_VAR_J2ME_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_j2em');

$modversion['config'][]=array(
	'name' => 'var_wbmp_support',
	'title' => '_WURFL_MI_VAR_WBMP_SUPPORT',
	'description' => '_WURFL_MI_VAR_WBMP_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_wbmp');

$modversion['config'][]=array(
	'name' => 'var_jpeg_support',
	'title' => '_WURFL_MI_VAR_JPEG_SUPPORT',
	'description' => '_WURFL_MI_VAR_JPEG_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_jpeg');

$modversion['config'][]=array(
	'name' => 'var_png_support',
	'title' => '_WURFL_MI_VAR_PNG_SUPPORT',
	'description' => '_WURFL_MI_VAR_PNG_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_png');

$modversion['config'][]=array(
	'name' => 'var_gif_support',
	'title' => '_WURFL_MI_VAR_GIF_SUPPORT',
	'description' => '_WURFL_MI_VAR_GIF_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_gif');

$modversion['config'][]=array(
	'name' => 'var_tiff_support',
	'title' => '_WURFL_MI_VAR_TIFF_SUPPORT',
	'description' => '_WURFL_MI_VAR_TIFF_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_tiff');

$modversion['config'][]=array(
	'name' => 'var_pdf_support',
	'title' => '_WURFL_MI_VAR_PDF_SUPPORT',
	'description' => '_WURFL_MI_VAR_PDF_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_pdf');

$modversion['config'][]=array(
	'name' => 'var_rss_support',
	'title' => '_WURFL_MI_VAR_RSS_SUPPORT',
	'description' => '_WURFL_MI_VAR_RSS_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_rss');

$modversion['config'][]=array(
	'name' => 'var_wav_support',
	'title' => '_WURFL_MI_VAR_WAV_SUPPORT',
	'description' => '_WURFL_MI_VAR_WAV_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_wav');

$modversion['config'][]=array(
	'name' => 'var_mp3_support',
	'title' => '_WURFL_MI_VAR_MP3_SUPPORT',
	'description' => '_WURFL_MI_VAR_MP3_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_mp3');

$modversion['config'][]=array(
	'name' => 'var_gsm_support',
	'title' => '_WURFL_MI_VAR_GSM_SUPPORT',
	'description' => '_WURFL_MI_VAR_GSM_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_gsm');

$modversion['config'][]=array(
	'name' => 'var_m4a_support',
	'title' => '_WURFL_MI_VAR_M4A_SUPPORT',
	'description' => '_WURFL_MI_VAR_M4A_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_m4a');

$modversion['config'][]=array(
	'name' => 'var_stream_support',
	'title' => '_WURFL_MI_VAR_STREAM_SUPPORT',
	'description' => '_WURFL_MI_VAR_STREAM_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_stream');

$modversion['config'][]=array(
	'name' => 'var_mobile_support',
	'title' => '_WURFL_MI_VAR_MOBILE_SUPPORT',
	'description' => '_WURFL_MI_VAR_MOBILE_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_mobile');

$modversion['config'][]=array(
	'name' => 'var_pad_support',
	'title' => '_WURFL_MI_VAR_TABLET_SUPPORT',
	'description' => '_WURFL_MI_VAR_TABLET_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf_pad');

$modversion['config'][]=array(
	'name' => 'var_associative',
	'title' => '_WURFL_MI_VAR_ASSOCIATIVE_ARRAY_SUPPORT',
	'description' => '_WURFL_MI_VAR_ASSOCIATIVE_ARRAY_SUPPORT_DESC',
	'formtype' => 'text',
	'valuetype' => 'text',
	'default' => 'wurlf');

$modversion['config'][]=array(
	'name' => 'provider',
	'title' => '_WURFL_MI_PROVIDER',
	'description' => '_WURFL_MI_PROVIDER_DESC',
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
	'name' => 		 'cloud',
	'title' => 		 '_WURFL_MI_WURFL_CLOUD',
	'description' => '_WURFL_MI_WURFL_CLOUD_DESC',
	'formtype' => 	 'yesno',
	'valuetype' => 	 'int',
	'default' => 	 false,
	'options' => 	 array());

$modversion['config'][]=array(
	'name' => 'mob_cloud',
	'title' => '_WURFL_MI_MOBILE_CLOUD_SUPPORT',
	'description' => '_WURFL_MI_MOBILE_CLOUD_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 'pad_cloud',
	'title' => '_WURFL_MI_PAD_CLOUD_SUPPORT',
	'description' => '_WURFL_MI_PAD_CLOUD_SUPPORT_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'default' => 'default',
	'options' => $themelist);

$modversion['config'][]=array(
	'name' => 		 'api_key',
	'title' => 		 '_WURFL_MI_API_KEY',
	'description' => '_WURFL_MI_API_KEY_DESC',
	'formtype' => 	 'text',
	'valuetype' => 	 'text',
	'default' => 	 '',
	'options' => 	 array());

$modversion['config'][]=array(
	'name' => 		 'http_method',
	'title' => 		 '_WURFL_MI_HTTP_METHOD',
	'description' => '_WURFL_MI_HTTP_METHOD_DESC',
	'formtype' => 	 'select',
	'valuetype' => 	 'text',
	'default' => 	 'WurflCloud_HttpClient_Fsock',
	'options' => 	 array(	_WURFL_MI_HTTP_METHOD_FSOCK=>'WurflCloud_HttpClient_Fsock',
							_WURFL_MI_HTTP_METHOD_CURL=>'WurflCloud_HttpClient_Curl'));
							
$modversion['config'][]=array(
	'name' => 		 'cache_method',
	'title' => 		 '_WURFL_MI_CACHE_METHOD',
	'description' => '_WURFL_MI_CACHE_METHOD_DESC',
	'formtype' => 	 'select',
	'valuetype' => 	 'text',
	'default' => 	 'WurflCloud_Cache_Xoopscache',
	'options' => 	 array(	_WURFL_MI_CACHE_METHOD_XOOPSCACHE=>'WurflCloud_Cache_Xoopscache',
							_WURFL_MI_CACHE_METHOD_COOKIE=>'WurflCloud_Cache_Cookie',
							_WURFL_MI_CACHE_METHOD_NULL=>'WurflCloud_Cache_Null'));
							
$modversion['config'][]=array(
	'name' => 		 'http_timeout',
	'title' => 		 '_WURFL_MI_HTTP_TIMEOUT',
	'description' => '_WURFL_MI_HTTP_TIMEOUT_DESC',
	'formtype' => 	 'text',
	'valuetype' => 	 'int',
	'default' => 	 '1000',
	'options' => 	 array());
							
?>