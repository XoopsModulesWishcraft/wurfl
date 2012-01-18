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
class WurflWta extends XoopsObject
{

    function WurflWta($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('nokia_voice_call', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wta_pdc', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wta_voice_call', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wta_misc', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wta_phonebook', XOBJ_DTYPE_INT, null, false);		
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
class WurflWtaHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_wta", 'WurflWta', 'did');
    }
}

?>