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
class WurflMarkup extends XoopsObject
{

    function WurflMarkup($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('html_web_3_2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_htmlx_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_html_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_oma_xhtmlmp_1_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_html_2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_w3_xhtmlbasic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_compact_generic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_html_3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wml_1_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_html_4', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wml_1_2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_html_5', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wml_1_3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('preferred_markup', XOBJ_DTYPE_TXTBOX, null, false, 128);
		$this->initVar('xhtml_support_level', XOBJ_DTYPE_INT, null, false);
		$this->initVar('voicexml', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_wi_imode_htmlx_1_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('multipart_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('html_web_4_0', XOBJ_DTYPE_INT, null, false);		
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
class WurflMarkupHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_markup", 'WurflMarkup');
    }
}

?>