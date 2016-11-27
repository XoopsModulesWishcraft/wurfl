<?php
/**
 * This software is the Copyright of Chronolabs Co-op.
 *
 * Please refer to the LICENSE.txt file distributed with the software for licensing information.
 *
 * @package    WurflCloud_Client
 * @subpackage Cache
 */

// Includes XOOPS Cache
include_once $GLOBALS['xoops']->path('class/cache/xoopscache.php');

/**
 * Cookie cache provider
 * @package    WurflCloud_Client
 * @subpackage Cache
 */
class WurflCloud_Cache_Xoopscache implements WurflCloud_Cache_CacheInterface
{
    public  $cache_prefix     = 'WurflCloud_';
    public  $cache_expiration = 86400;
    private $cache_saved      = false;

    public function getDevice($user_agent)
    {
        if (!$cache_data = XoopsCache::read($this->cache_prefix . md5($user_agent))) {
            return false;
        }
        if (!is_array($cache_data) || empty($cache_data)) {
            return false;
        }
        if (!isset($cache_data['date_set']) || ((int)$cache_data['date_set'] + $this->cache_expiration) < time()) {
            return false;
        }
        if (!isset($cache_data['capabilities']) || !is_array($cache_data['capabilities']) || empty($cache_data['capabilities'])) {
            return false;
        }

        return $cache_data['capabilities'];
    }

    public function getDeviceFromID($device_id)
    {
        return false;
    }

    public function setDevice($user_agent, $capabilities)
    {
        if ($this->cache_saved == true) {
            return true;
        }
        $cache_data = array(
            'date_set'     => time(),
            'capabilities' => $capabilities,
        );
        XoopsCache::write($this->cache_prefix . md5($user_agent), $cache_data, $this->cache_expiration);
        $this->cache_saved = true;
    }

    // Required by interface but not used for this provider
    public function setDeviceFromID($device_id, $capabilities)
    {
        return true;
    }

    public function getMtime()
    {
        return 0;
    }

    public function setMtime($server_mtime)
    {
        return true;
    }

    public function purge()
    {
        return true;
    }

    public function incrementHit()
    {
    }

    public function incrementMiss()
    {
    }

    public function incrementError()
    {
    }

    public function getCounters()
    {
        $counters = array(
            'hit'   => 0,
            'miss'  => 0,
            'error' => 0,
            'age'   => 0,
        );

        return $counters;
    }

    public function resetCounters()
    {
    }

    public function resetReportAge()
    {
    }

    public function getReportAge()
    {
        return 0;
    }

    public function stats()
    {
        return array();
    }

    public function close()
    {
    }
}
