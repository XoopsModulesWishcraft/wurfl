<?php

require_once dirname(dirname(dirname(__DIR__))) . '/include/cp_header.php';

if (!defined('_CHARSET')) {
    define("_CHARSET", "UTF-8");
}
if (!defined('_CHARSET_ISO')) {
    define("_CHARSET_ISO", "ISO-8859-1");
}

$GLOBALS['myts'] = MyTextSanitizer::getInstance();

$moduleHandler                = xoops_getHandler('module');
$configHandler                = xoops_getHandler('config');
$GLOBALS['wurflModule']       = $moduleHandler->getByDirname('wurfl');
$GLOBALS['wurflModuleConfig'] = $configHandler->getConfigList($GLOBALS['wurflModule']->getVar('mid'));

xoops_load('pagenav');
xoops_load('xoopslists');
xoops_load('xoopsformloader');

include_once $GLOBALS['xoops']->path('class' . DS . 'xoopsmailer.php');
include_once $GLOBALS['xoops']->path('class' . DS . 'xoopstree.php');

if (file_exists($GLOBALS['xoops']->path('/Frameworks/moduleclasses/moduleadmin/moduleadmin.php'))) {
    include_once $GLOBALS['xoops']->path('/Frameworks/moduleclasses/moduleadmin/moduleadmin.php');
} else {
    echo xoops_error("Error: You don't use the Frameworks \"admin module\". Please install this Frameworks");
}

$GLOBALS['wurflImageIcon']  = XOOPS_URL . '/' . $GLOBALS['wurflModule']->getInfo('icons16');
$GLOBALS['wurflImageAdmin'] = XOOPS_URL . '/' . $GLOBALS['wurflModule']->getInfo('icons32');

if ($GLOBALS['xoopsUser']) {
    $modulepermHandler = xoops_getHandler('groupperm');
    if (!$modulepermHandler->checkRight('module_admin', $GLOBALS['wurflModule']->getVar('mid'), $GLOBALS['xoopsUser']->getGroups())) {
        redirect_header(XOOPS_URL, 1, _NOPERM);
        exit();
    }
} else {
    redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
    exit();
}

if (!isset($GLOBALS['xoopsTpl']) || !is_object($GLOBALS['xoopsTpl'])) {
    include_once XOOPS_ROOT_PATH . "/class/template.php";
    $GLOBALS['xoopsTpl'] = new XoopsTpl();
}

$GLOBALS['xoopsTpl']->assign('pathImageIcon', $GLOBALS['wurflImageIcon']);
$GLOBALS['xoopsTpl']->assign('pathImageAdmin', $GLOBALS['wurflImageAdmin']);

include dirname(__DIR__) . '/include/functions.php';

include dirname(__DIR__) . '/include/form.objects.php';

include dirname(__DIR__) . '/include/form.wurfl.php';

xoops_loadLanguage('admin', 'wurfl');
xoops_loadLanguage('forms', 'wurfl');

$parts = explode('.', strtolower(basename($_SERVER['PHP_SELF'])));
unset($parts[count($parts) - 1]);
$GLOBALS['op']     = isset($_REQUEST['op']) ? $_REQUEST['op'] : implode('.', $parts);
$GLOBALS['fct']    = isset($_REQUEST['fct']) ? $_REQUEST['fct'] : "list";
$GLOBALS['limit']  = !empty($_REQUEST['limit']) ? (int)$_REQUEST['limit'] : 30;
$GLOBALS['start']  = !empty($_REQUEST['start']) ? (int)$_REQUEST['start'] : 0;
$GLOBALS['order']  = !empty($_REQUEST['order']) ? $_REQUEST['order'] : 'DESC';
$GLOBALS['sort']   = !empty($_REQUEST['sort']) ? '' . $_REQUEST['sort'] . '' : 'created';
$GLOBALS['filter'] = !empty($_REQUEST['filter']) ? '' . $_REQUEST['filter'] . '' : '1,1';
