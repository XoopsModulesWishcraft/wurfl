<?php

defined('XOOPS_ROOT_PATH') or die('Restricted access');

class WurflCorePreload extends XoopsPreloadItem
{
    public static function eventCoreHeaderStart($args)
    {
        $moduleHandler                = xoops_getHandler('module');
        $GLOBALS['wurflModule']       = $moduleHandler->getByDirname('wurfl');
        $configHandler                = xoops_getHandler('config');
        $GLOBALS['wurflModuleConfig'] = $configHandler->getConfigList($GLOBALS['wurflModule']->getVar('mid'));
        if ($GLOBALS['wurflModuleConfig']['postloader'] == true) {
            $wurlf_devices = xoops_getModuleHandler('devices', 'wurfl');
            $user_agent    = $wurlf_devices->getUserAgent();
            $theme         = $wurlf_devices->testUserAgentForTheme($user_agent, true);
            if ($theme != false) {
                $GLOBALS['xoopsConfig']['theme_set'] = $theme;
            }
        }
        if (isset($user_agent)) {
            xoops_load('XoopsCache');
            $ret = XoopsCache::read('wurfl_user_agents');
            $out = array();
            if (is_object($GLOBALS['xoopsUser'])) {
                $out[microtime(true)] = array(
                    'useragent' => $user_agent,
                    'theme'     => $GLOBALS['xoopsConfig']['theme_set'],
                    'user'      => '<a href="'
                                   . XOOPS_URL
                                   . '/userinfo.php?uid='
                                   . $GLOBALS['xoopsUser']->getVar('uid')
                                   . '">'
                                   . $GLOBALS['xoopsUser']->getVar('uname')
                                   . '</a>'
                );
            } else {
                $out[microtime(true)] = array('useragent' => $user_agent, 'theme' => $GLOBALS['xoopsConfig']['theme_set'], 'user' => _GUESTS);
            }
            foreach ($ret as $time => $agent) {
                if (is_array($agent)) {
                    if ($agent['useragent'] != $user_agent) {
                        $out[$time] = $agent;
                    }
                }
            }
            asort($out, SORT_DESC);
            XoopsCache::write('wurfl_user_agents', $out, 3600 * 24 * 7 * 4);
        }
    }

    public static function eventCoreHeaderAddmeta($args)
    {
        if ($GLOBALS['wurflModuleConfig']['postloader'] == true) {
            $wurlf_devices = xoops_getModuleHandler('devices', 'wurfl');
            $wurfl_device  = $wurlf_devices->testUserAgent($user_agent, false);
            if (is_object($wurfl_device) && is_a($wurfl_device, 'WurflDevices')) {
                foreach ($wurlf_devices->getProviderVariables($wurfl_device->getVar('did')) as $key => $data) {
                    $GLOBALS['xoopsTpl']->assign($key, $data);
                }
                $GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_associative'], $wurlf_devices->getProviders($wurfl_device['did']));
            } elseif (is_object($wurfl_device) && is_a($wurfl_device, 'WurflCloud')) {
                if ($wurlf_device->getVar('is_tablet') == false && $wurlf_device->getVar('is_wireless_device') == true) {
                    $GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_mobile_support'], true);
                } else {
                    $GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_mobile_support'], false);
                }
                if ($wurlf_device->getVar('is_tablet') == true) {
                    $GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_pad_support'], true);
                } else {
                    $GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_pad_support'], true);
                }
            } else {
                $GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_mobile_support'], false);
                $GLOBALS['xoopsTpl']->assign($GLOBALS['wurflModuleConfig']['var_pad_support'], false);
            }
        }
    }
}
