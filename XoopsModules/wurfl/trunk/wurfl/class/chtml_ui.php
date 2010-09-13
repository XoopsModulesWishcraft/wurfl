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
class WurflChtml_ui extends XoopsObject
{

    function WurflChtml_ui($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('imode_region', XOBJ_DTYPE_TXTBOX, null, false, 32);	
		$this->initVar('chtml_can_display_images_and_text_on_same_line', XOBJ_DTYPE_INT, null, false);
		$this->initVar('chtml_displays_image_in_center', XOBJ_DTYPE_INT, null, false);
		$this->initVar('chtml_make_phone_call_string', XOBJ_DTYPE_INT, null, false);
		$this->initVar('chtml_table_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('chtml_display_accesskey', XOBJ_DTYPE_INT, null, false);
		$this->initVar('emoji', XOBJ_DTYPE_INT, null, false);
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
class WurflChtml_uiHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_chtml_ui", 'WurflChtml_ui');
    }
}

?>