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
class WurflAjax extends XoopsObject
{

    function WurflAjax($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);	
		$this->initVar('ajax_xhr_type', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('ajax_support_getelementbyid', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ajax_support_event_listener', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ajax_manipulate_dom', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ajax_support_javascript', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ajax_support_inner_html', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ajax_manipulate_css', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ajax_support_events', XOBJ_DTYPE_INT, null, false);
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
class WurflAjaxHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_ajax", 'WurflAjax');
    }
}

?>