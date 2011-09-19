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
class WurflWap_push extends XoopsObject
{

    function WurflWap_push($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('expiration_date', XOBJ_DTYPE_INT, null, false);
		$this->initVar('utf8_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionless_cache_operation', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionless_service_load', XOBJ_DTYPE_INT, null, false);
		$this->initVar('iso8859_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionoriented_confirmed_service_indication', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionless_service_indication', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ascii_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionoriented_confirmed_cache_operation', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionoriented_confirmed_service_load', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wap_push_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionoriented_unconfirmed_cache_operation', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionoriented_unconfirmed_service_load', XOBJ_DTYPE_INT, null, false);
		$this->initVar('connectionoriented_unconfirmed_service_indication', XOBJ_DTYPE_INT, null, false);
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
class WurflWap_pushHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_wap_push", 'WurflWap_push');
    }
}

?>