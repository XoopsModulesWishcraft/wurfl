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
class WurflFlash_lite extends XoopsObject
{

    function WurflFlash_lite($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);	
		$this->initVar('flash_lite_version', XOBJ_DTYPE_TXTBOX, null, false, 64);
		$this->initVar('fl_wallpaper', XOBJ_DTYPE_INT, null, false);
		$this->initVar('fl_browser', XOBJ_DTYPE_INT, null, false);
		$this->initVar('fl_screensaver', XOBJ_DTYPE_INT, null, false);
		$this->initVar('fl_standalone', XOBJ_DTYPE_INT, null, false);
		$this->initVar('fl_sub_lcd', XOBJ_DTYPE_INT, null, false);
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
class WurflFlash_liteHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_flash_lite", 'WurflFlash_lite');
    }
}

?>