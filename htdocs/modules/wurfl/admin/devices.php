<?php

require 'header.php';

xoops_cp_header();

$op     = isset($_REQUEST['op']) ? $_REQUEST['op'] : "devices";
$fct    = isset($_REQUEST['fct']) ? $_REQUEST['fct'] : "list";
$limit  = !empty($_REQUEST['limit']) ? (int)$_REQUEST['limit'] : 30;
$start  = !empty($_REQUEST['start']) ? (int)$_REQUEST['start'] : 0;
$order  = !empty($_REQUEST['order']) ? $_REQUEST['order'] : 'ASC';
$sort   = !empty($_REQUEST['sort']) ? '' . $_REQUEST['sort'] . '' : 'did';
$filter = !empty($_REQUEST['filter']) ? '' . $_REQUEST['filter'] . '' : '1,1';

switch ($op) {
    case "devices":
        $op = 'devices';
        switch ($fct) {
            default:
            case "list":
                wurfl_adminMenu(2, 'devices.php');

                include_once $GLOBALS['xoops']->path("/class/pagenav.php");

                $devicesHandler = xoops_getModuleHandler('devices', 'wurfl');

                $criteria = $devicesHandler->getFilterCriteria($filter);
                $ttl      = $devicesHandler->getCount($criteria);
                $sort     = !empty($_REQUEST['sort']) ? '' . $_REQUEST['sort'] . '' : 'did';

                $pagenav = new XoopsPageNav($ttl, $limit, $start, 'start',
                                            'limit=' . $limit . '&sort=' . $sort . '&order=' . $order . '&op=' . $op . '&fct=' . $fct . '&filter=' . $filter . '&fct=' . $fct . '&filter=' . $filter);
                $GLOBALS['xoopsTpl']->assign('pagenav', $pagenav->renderNav());

                foreach (array('did', 'id', 'user_agent', 'fallback', 'manufacture', 'model', 'series') as $id => $key) {
                    $GLOBALS['xoopsTpl']->assign(strtolower(str_replace('-', '_', $key) . '_th'),
                                                 '<a href="'
                                                 . $_SERVER['PHP_SELF']
                                                 . '?start='
                                                 . $start
                                                 . '&limit='
                                                 . $limit
                                                 . '&sort='
                                                 . str_replace('_', '-', $key)
                                                 . '&order='
                                                 . ((str_replace('_', '-', $key)
                                                     == $sort) ? ($order
                                                                  === 'DESC' ? 'ASC' : 'DESC') : $order)
                                                 . '&op='
                                                 . $op
                                                 . '&filter='
                                                 . $filter
                                                 . '">'
                                                 . (defined('_WURLF_AM_TH_' . strtoupper(str_replace('-', '_', $key))) ? constant('_WURLF_AM_TH_' . strtoupper(str_replace('-', '_',
                                                                                                                                                                           $key))) : '_WURLF_AM_TH_'
                                                                                                                                                                                     . strtoupper(str_replace('-',
                                                                                                                                                                                                              '_',
                                                                                                                                                                                                              $key)))
                                                 . '</a>');
                    $GLOBALS['xoopsTpl']->assign('filter_' . strtolower(str_replace('-', '_', $key)) . '_th', $devicesHandler->getFilterForm($filter, $key, $sort, $op, $fct));
                }

                $GLOBALS['xoopsTpl']->assign('limit', $limit);
                $GLOBALS['xoopsTpl']->assign('start', $start);
                $GLOBALS['xoopsTpl']->assign('order', $order);
                $GLOBALS['xoopsTpl']->assign('sort', $sort);
                $GLOBALS['xoopsTpl']->assign('filter', $filter);
                $GLOBALS['xoopsTpl']->assign('xoConfig', $GLOBALS['wurflModuleConfig']);

                $criteria->setStart($start);
                $criteria->setLimit($limit);
                $criteria->setSort('`' . $sort . '`');
                $criteria->setOrder($order);

                $devicess = $devicesHandler->getObjects($criteria, true);
                foreach ($devicess as $did => $devices) {
                    $GLOBALS['xoopsTpl']->append('devices', $devices->toArray());
                }
                $GLOBALS['xoopsTpl']->assign('form', wurfl_devices_form(false));
                $GLOBALS['xoopsTpl']->assign('php_self', $_SERVER['PHP_SELF']);
                $GLOBALS['xoopsTpl']->display('db:wurfl_cpanel_devices_list.html');
                break;

            case "new":
            case "edit":

                wurfl_adminMenu(2, 'devices.php');

                $devicesHandler = xoops_getModuleHandler('devices', 'wurfl');
                if (isset($_REQUEST['did'])) {
                    $devices = $devicesHandler->get((int)$_REQUEST['did']);
                } else {
                    $devices = $devicesHandler->create();
                }

                $GLOBALS['xoopsTpl']->assign('form', $devices->getForm());
                $GLOBALS['xoopsTpl']->assign('php_self', $_SERVER['PHP_SELF']);
                $GLOBALS['xoopsTpl']->display('db:wurfl_cpanel_devices_edit.html');
                break;
            case "save":

                $devicesHandler = xoops_getModuleHandler('devices', 'wurfl');
                $id             = 0;
                if ($id = (int)$_REQUEST['did']) {
                    $devices = $devicesHandler->get($id);
                } else {
                    $devices = $devicesHandler->create();
                }
                $devices->setVars($_POST[$id]);

                if (!$id = $devicesHandler->insert($devices)) {
                    redirect_header('devices.php?op=' . $op . '&fct=list&limit=' . $limit . '&start=' . $start . '&order=' . $order . '&sort=' . $sort . '&filter=' . $filter, 10,
                                    _WURFL_AM_MSG_DEVICES_FAILEDTOSAVE);
                    exit(0);
                } else {
                    redirect_header('devices.php?op=' . $op . '&fct=edit&did=' . $id . '&limit=' . $limit . '&start=' . $start . '&order=' . $order . '&sort=' . $sort . '&filter=' . $filter, 10,
                                    _WURFL_AM_MSG_DEVICES_SAVEDOKEY);
                    exit(0);
                }
                break;
            case "savelist":

                $devicesHandler = xoops_getModuleHandler('devices', 'wurfl');
                foreach ($_REQUEST['did'] as $id) {
                    $devices = $devicesHandler->get($id);
                    $devices->setVars($_POST[$id]);
                    if (!$devicesHandler->insert($devices)) {
                        redirect_header('devices.php?op=' . $op . '&fct=list&limit=' . $limit . '&start=' . $start . '&order=' . $order . '&sort=' . $sort . '&filter=' . $filter, 10,
                                        _WURFL_AM_MSG_DEVICES_FAILEDTOSAVE);
                        exit(0);
                    }
                }
                redirect_header('devices.php?op=' . $op . '&fct=list&limit=' . $limit . '&start=' . $start . '&order=' . $order . '&sort=' . $sort . '&filter=' . $filter, 10,
                                _WURFL_AM_MSG_DEVICES_SAVEDOKEY);
                exit(0);
                break;
            case "delete":

                $devicesHandler = xoops_getModuleHandler('devices', 'wurfl');
                $id             = 0;
                if (isset($_POST['did']) && $id = (int)$_POST['did']) {
                    $devices = $devicesHandler->get($id);
                    if (!$devicesHandler->delete($devices)) {
                        redirect_header('devices.php?op=' . $op . '&fct=list&limit=' . $limit . '&start=' . $start . '&order=' . $order . '&sort=' . $sort . '&filter=' . $filter, 10,
                                        _WURFL_AM_MSG_DEVICES_FAILEDTODELETE);
                        exit(0);
                    } else {
                        redirect_header('devices.php?op=' . $op . '&fct=list&limit=' . $limit . '&start=' . $start . '&order=' . $order . '&sort=' . $sort . '&filter=' . $filter, 10,
                                        _WURFL_AM_MSG_DEVICES_DELETED);
                        exit(0);
                    }
                } else {
                    $devices = $devicesHandler->get((int)$_REQUEST['did']);
                    xoops_confirm(array('did'    => $_REQUEST['did'],
                                        'op'     => $_REQUEST['op'],
                                        'fct'    => $_REQUEST['fct'],
                                        'limit'  => $_REQUEST['limit'],
                                        'start'  => $_REQUEST['start'],
                                        'order'  => $_REQUEST['order'],
                                        'sort'   => $_REQUEST['sort'],
                                        'filter' => $_REQUEST['filter']
                                  ), 'devices.php', sprintf(_WURFL_AM_MSG_DEVICES_DELETE, $devices->getTitle()));
                }
                break;
        }
        break;
}

xoops_cp_footer();
