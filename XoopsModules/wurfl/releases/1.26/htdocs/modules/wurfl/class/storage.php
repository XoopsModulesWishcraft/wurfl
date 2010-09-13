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
class WurflStorage extends XoopsObject
{

    function WurflStorage($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_length_of_username', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_url_length_bookmark', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_no_of_bookmarks', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_deck_size', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_url_length_cached_page', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_length_of_password', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_no_of_connection_settings', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_url_length_in_requests', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_object_size', XOBJ_DTYPE_INT, null, false);
		$this->initVar('max_url_length_homepage', XOBJ_DTYPE_INT, null, false);				
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
class WurflStorageHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_storage", 'WurflStorage');
    }
}

?>