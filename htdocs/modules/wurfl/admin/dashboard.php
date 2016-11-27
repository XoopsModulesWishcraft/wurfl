<?php
include 'header.php';

xoops_loadLanguage('forms', 'wurfl');
$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : "default";
switch ($op) {
    case "default":
    default:
        xoops_cp_header();
        wurfl_adminMenu(1, 'dashboard.php');
        $indexAdmin = new ModuleAdmin();
        $indexAdmin->addInfoBox(_WURFL_FRM_RECORDS);
        foreach (array(
                     'devices',
                     'ajax',
                     'bearer',
                     'bugs',
                     'cache',
                     'chtml_ui',
                     'css',
                     'display',
                     'drm',
                     'flash_lite',
                     'image_format',
                     'j2me',
                     'markup',
                     'mms',
                     'object_download',
                     'pdf',
                     'playback',
                     'product_info',
                     'rss',
                     'security',
                     'sms',
                     'sound_format',
                     'storage',
                     'streaming',
                     'transcoding',
                     'wap_push',
                     'wml_ui',
                     'wta',
                     'xhtml_ui'
                 ) as $class) {
            $classHandler = xoops_getModuleHandler($class, 'wurfl');
            $indexAdmin->addInfoBoxLine(_WURFL_FRM_RECORDS,
                                        "<label>" . defined('_WURFL_FRM_RECORDS_COUNT_' . strtoupper($class)) ? constant('_WURFL_FRM_RECORDS_COUNT_' . strtoupper($class)) : '_WURFL_FRM_RECORDS_COUNT_'
                                                                                                                                                                             . strtoupper($class)
                                                                                                                                                                             . "</label>",
                                        $classHandler->getCount(), ($classHandler->getCount() > 0) ? 'Green' : 'Red');
        }
        echo $indexAdmin->renderIndex();
        echo wurfl_footer_adminMenu(false);
        xoops_cp_footer();
        break;
}
