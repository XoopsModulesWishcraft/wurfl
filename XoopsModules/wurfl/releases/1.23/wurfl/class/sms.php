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
class WurflSms extends XoopsObject
{

    function WurflSms($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('ems', XOBJ_DTYPE_INT, null, false);
		$this->initVar('text_imelody', XOBJ_DTYPE_INT, null, false);
		$this->initVar('nokiaring', XOBJ_DTYPE_INT, null, false);
		$this->initVar('siemens_logo_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ems_variablesizedpictures', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sckl_groupgraphic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('siemens_ota', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sagem_v1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('largeoperatorlogo', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sagem_v2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ems_version', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ems_odi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('nokiavcal', XOBJ_DTYPE_INT, null, false);
		$this->initVar('operatorlogo', XOBJ_DTYPE_INT, null, false);
		$this->initVar('siemens_logo_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ems_imelody', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sckl_vcard', XOBJ_DTYPE_INT, null, false);
		$this->initVar('siemens_screensaver_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sckl_operatorlogo', XOBJ_DTYPE_INT, null, false);
		$this->initVar('panasonic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ems_upi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('nokiavcard', XOBJ_DTYPE_INT, null, false);
		$this->initVar('callericon', XOBJ_DTYPE_INT, null, false);
		$this->initVar('gprtf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('siemens_screensaver_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sckl_ringtone', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picturemessage', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sckl_vcalendar', XOBJ_DTYPE_INT, null, false);		
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
class WurflSmsHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_sms", 'WurflSms');
    }
}

?>