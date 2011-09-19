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
class WurflBearer extends XoopsObject
{

    function WurflBearer($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sdio', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wifi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_data_rate', XOBJ_DTYPE_INT, null, false);
		$this->initVar('vpn', XOBJ_DTYPE_INT, null, false);
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
class WurflBearerHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_bearer", 'WurflBearer');
    }
}

?>