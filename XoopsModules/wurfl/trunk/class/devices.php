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
}

?>