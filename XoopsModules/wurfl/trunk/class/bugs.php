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
class WurflBugs extends XoopsObject
{

    function WurflBugs($id = null)
    {
	
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('emptyok', XOBJ_DTYPE_INT, null, false);
		$this->initVar('empty_option_value_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('basic_authentication_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('post_method_support', XOBJ_DTYPE_INT, null, false);	
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
class WurflBugsHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_bugs", 'WurflBugs');
    }
}

?>