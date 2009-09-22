<?php
	
	include 'header.php';
	include_once '../include/form.wurfl.php';
	include_once '../include/functions.php';
	xoops_cp_header();
	
	$op = isset($_REQUEST['op'])?(string)($_REQUEST['op']):'import';
	
	switch ($op) {
	default:
	case 'import':
		
		
		switch ($_REQUEST['fct']) {
		case "go":
			$linenum = isset($_REQUEST['linenum'])?intval($_REQUEST['linenum']):0;
			$xmlfile = isset($_REQUEST['xmlfile'])?(string)($_REQUEST['xmlfile']):'';
			$rnum = isset($_REQUEST['rnum'])?(string)($_REQUEST['rnum']):0;
			
			if ($linenum=0&&$rnum==0) {
			
				$tbl[1] = "wurfl_devices_xhtml_ui";
				$tbl[2] = "wurfl_devices_wta";
				$tbl[3] = "wurfl_devices_wml_ui";
				$tbl[4] = "wurfl_devices_wap_push";
				$tbl[5] = "wurfl_devices_transcoding";
				$tbl[6] = "wurfl_devices_streaming";
				$tbl[7] = "wurfl_devices_storage";
				$tbl[8] = "wurfl_devices_sound_format";
				$tbl[9] = "wurfl_devices_sms";
				$tbl[10] = "wurfl_devices_security";
				$tbl[11] = "wurfl_devices_rss";
				$tbl[12] = "wurfl_devices_product_info";
				$tbl[13] = "wurfl_devices_playback";
				$tbl[14] = "wurfl_devices_pdf";
				$tbl[15] = "wurfl_devices_rss";
				$tbl[16] = "wurfl_devices_object_download";
				$tbl[17] = "wurfl_devices_mms";
				$tbl[18] = "wurfl_devices_markup";
				$tbl[19] = "wurfl_devices_j2me";
				$tbl[20] = "wurfl_devices_image_format";
				$tbl[21] = "wurfl_devices_flash_lite";
				$tbl[22] = "wurfl_devices_drm";
				$tbl[23] = "wurfl_devices_display";
				$tbl[24] = "wurfl_devices_css";
				$tbl[25] = "wurfl_devices_chtml_ui";
				$tbl[26] = "wurfl_devices_cache";
				$tbl[27] = "wurfl_devices_bugs";
				$tbl[26] = "wurfl_devices_bearer";
				$tbl[27] = "wurfl_devices_ajax";
				$tbl[28] = "wurfl_devices";
				
				foreach($tbl as $id => $table) 
					@$GLOBALS['xoopsDB']->queryF("TRUNCATE TABLES ".$GLOBALS['xoopsDB']->prefix($table));
				
			}
			set_time_limit(3600);
			$timer['start'] = time();
			if (file_exists($xmlfile)) {
				$handle = @fopen($xmlfile, "r");
				if ($handle) {
					if ($linenum>0) {
						for($ii=0;$i<$linenum;$ii++) {
							if (!feof($handle)) {
								$skip = fgets($handle, 4096);
							}
						}
					}
					while (!feof($handle)) {
						if (time()-$timer['start']>120) {
							$rnum++;
							redirect_header("admin.php?op=$op&fct=go&xmlfile=$xmlfile&linenum=$linenum&rnum=$rnum", 3, sprintf(_WURFL_TIMEREDIRECT, $linenum, $rnum));
							exit(0);
						}
							
						$buffer = fgets($handle, 4096);
						$linenum++;
						if (strpos($buffer, '<device ')>0) 
							$device = array(0=>'<?xml version="1.0" encoding="UTF-8"?>',
											1=>'<wurlf>');
						$device[] = $buffer;
						if (strpos($buffer, '</device>')>0) 
							{
								$device[] = '</wurlf>';
								$xml = xml2array(implode("\n",$device), 1, 'tag');
								foreach($xml as $key => $ele) {
									switch($ele['tag']) {
									case "device":
										if ($ele['type']=='open'){
											$deviceHandler =& xoops_getmodulehandler('devices', 'wurfl');
											$wdevice = $deviceHandler->create();
											foreach($ele['attributes'] as $field => $value)
												$wdevice->setVar($field, $value);
											@$deviceHandler->insert($wdevice);
											$did = $GLOBALS['xoopsDB']->getInsertId();
										}
										break;
									case "group":
										if ($ele['type']=='open'){
											if (file_exists(XOOPS_ROOT_PATH."/modules/wurfl/class/".$ele['attributes']['id'].".php")) {
												$skip_group = false;
												$groupHandler =& xoops_getmodulehandler($ele['attributes']['id'], 'wurfl');
												$group = $groupHandler->create();
												$group->setVar('did', $did);
											} else {
												$skip_group = true;
											}
										} else {
											if ($skip_group==false) {
												$groupHandler->insert($group);
												unset($group);
												unset($groupHandler);
											}
										}
										break;
									case "capability":
										if ($ele['type']=='complete'&&$skip_group==false){
											if (is_numeric($ele['attributes']['value']))
												$value = intval($ele['attributes']['value']);
											elseif ($ele['attributes']['value']=='true')
												$value = true;
											elseif ($ele['attributes']['value']=='false')
												$value = false;
											else
												$value = $ele['attributes']['value'];
												
											$group->setVar($ele['attributes']['name'], $value);
										}		
										break;
									}
								}
							}
					}
					fclose($handle);
				}
			} else 
				redirect_header('admin.php', 10, _WURFL_FILENOTFOUND);
			
		
		default:
			echo function_exists("loadModuleAdminMenu") ? loadModuleAdminMenu(1) : "";
			echo formImport();
			break;

		}

		break;		
	}
	
	xoops_cp_footer();
?>

