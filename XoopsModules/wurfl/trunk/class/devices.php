<?php
// $Autho: wishcraft $

if (!defined('XOOPS_ROOT_PATH')) {
	exit();
}
/**
 * Class for wurfl
 * @author Simon Roberts <simon@xoops.org>
 * @copyright copyright (c) 2009-2003 XOOPS.org
 * @package kernel
 */
class WurflDevices extends XoopsObject
{

    function WurflDevices($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('id', XOBJ_DTYPE_TXTBOX, null, false, 255);	
		$this->initVar('user_agent', XOBJ_DTYPE_TXTBOX, null, false, 128);
		$this->initVar('fallback', XOBJ_DTYPE_TXTBOX, null, false, 128);
    }
}


/**
* XOOPS wurfl handler class.
* This class is responsible for providing data access mechanisms to the data source
* of XOOPS user class objects.
*
* @author  Simon Roberts <simon@chronolabs.org.au>
* @package kernel
*/
class WurflDevicesHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices", 'WurflDevices', 'did', 'user-agent');
    }
	
	function testUserAgent($user_agent, $as_array = false){
		if (!isset($user_agent))
			$user_agent = $_SERVER['HTTP_USER_AGENT'];
			
		$criteria = new Criteria('user_agent', $user_agent);
		if ($this->getCount($criteria)) {
			$device = $this->getObjects($criteria);
			if (is_array($device))
				$device = $device[0];
			if (is_object($device))
				if ($as_array==false)
					return $device;
				else
					return $device->getValues();
			else
				return false;
		} else
			return false;
		
	}
	
	function getProviders($did) {
		$module_handler =& xoops_gethandler('module');
		$xoModule = $module_handler->getByDirname('wurfl');
		$config_handler =& xoops_gethandler('config');
		$xoConfigs = $config_handler->getConfigList($xoModule->getVar('mid'));		
		$ret = array();
		foreach($xoConfigs['provider'] as $id => $prov) {
			$providerHandler =& xoops_getmodulehandler($prov, 'wurfl');
			$criteria = new Criteria('did', $did);
			if ($providerHandler->getCount($criteria)>0) {
				$provider = $providerHandler->getObjects($criteria);
				if (is_array($provider))
					$provider = $provider[0];
				if (is_object($provider)) {
					$ret[$prov] = $provider->getValues();
				}
			}
		}
		return $ret;
	}
}

?>