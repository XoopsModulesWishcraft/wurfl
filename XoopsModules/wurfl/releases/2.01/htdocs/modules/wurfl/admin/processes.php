<?php

	if (!defined('XOOPS_ROOT_PATH')) die(_NOPERM);
	
	if (!in_array($GLOBALS['op'], array(	'ajax', 'bearer', 'bugs', 'cache', 'chtml_ui', 'css', 'display', 'drm', 'flash_lite', 'image_format', 
							'j2me', 'markup', 'mms', 'object_download', 'pdf', 'playback', 'product_info', 'rss', 'security', 
							'sms', 'sound_format', 'storage', 'streaming', 'transcoding', 'wap_push', 'wml_ui', 'wta', 'xhtml_ui'	))) {
		redirect_header('dashboard.php', 10, _NOPERM);
		exit;
	}
	
	$handler = xoops_getmodulehandler($GLOBALS['op'], 'wurfl');
	switch($GLOBALS['fct']) {
		case 'list':
			$object = $handler->get($_REQUEST['did']);
			xoops_cp_header();
			wurfl_adminMenu(3, 'devices.php');
			$GLOBALS['xoopsTpl']->assign('form', wurfl_form_general($object, $GLOBALS['op'], false));
			$GLOBALS['xoopsTpl']->display('db:wurfl_cpanel_list_'.$GLOBALS['op'].'.html');
			echo wurfl_footer_adminMenu(false);
			xoops_cp_footer();
			exit;
			break;
		case 'create':
			$object = $handler->create();
			xoops_cp_header();
			wurfl_adminMenu(3, 'devices.php');
			$GLOBALS['xoopsTpl']->assign('form', wurfl_form_general($object, $GLOBALS['op'], true));
			$GLOBALS['xoopsTpl']->display('db:wurfl_cpanel_create_'.$GLOBALS['op'].'.html');
			echo wurfl_footer_adminMenu(false);
			xoops_cp_footer();
			exit;
			break;
		case 'new':
			$object = $handler->create();
			$object->setVars($_POST);
			if ($handler->insert($object)) {
				redirect_header('devices.php?limit='.$_REQUEST['limit']."&start=".$_REQUEST['start']."&sort=".$_REQUEST['sort']."&order=".$_REQUEST['order']."&filter=".$_REQUEST['filter'], 10, _WURFL_AM_MSG_CREATEWENTOK);
			} else {
				redirect_header('devices.php?limit='.$_REQUEST['limit']."&start=".$_REQUEST['start']."&sort=".$_REQUEST['sort']."&order=".$_REQUEST['order']."&filter=".$_REQUEST['filter'], 10, _WURFL_AM_MSG_CREATEFAILED);
			}
			exit;
		case 'save':
			$object = $handler->get($_REQUEST['did']);
			$object->setVars($_POST);
			if ($handler->insert($object)) {
				redirect_header('devices.php?limit='.$_REQUEST['limit']."&start=".$_REQUEST['start']."&sort=".$_REQUEST['sort']."&order=".$_REQUEST['order']."&filter=".$_REQUEST['filter'], 10, _WURFL_AM_MSG_SAVEWENTOK);
			} else {
				redirect_header('devices.php?limit='.$_REQUEST['limit']."&start=".$_REQUEST['start']."&sort=".$_REQUEST['sort']."&order=".$_REQUEST['order']."&filter=".$_REQUEST['filter'], 10, _WURFL_AM_MSG_SAVEFAILED);
			}	
			exit;
	}
	
?>