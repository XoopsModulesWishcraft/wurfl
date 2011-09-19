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
class WurflDisplay extends XoopsObject
{

    function WurflDisplay($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('physical_screen_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('columns', XOBJ_DTYPE_INT, null, false);
		$this->initVar('physical_screen_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('rows', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_image_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('resolution_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('resolution_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_image_height', XOBJ_DTYPE_INT, null, false);		
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
class WurflDisplayHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_display", 'WurflDisplay');
    }
}

?>