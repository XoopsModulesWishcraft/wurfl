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
class WurflXhtml_ui extends XoopsObject
{

    function WurflXhtml_ui($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_preferred_charset', XOBJ_DTYPE_TXTBOX, null, false, 16);
		$this->initVar('xhtml_supports_css_cell_table_coloring', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_select_as_radiobutton', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_autoexpand_select', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_avoid_accesskeys', XOBJ_DTYPE_INT, null, false);
		$this->initVar('accept_third_party_cookie', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_make_phone_call_string', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('xhtml_allows_disabled_form_elements', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_supports_invisible_text', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_select_as_dropdown', XOBJ_DTYPE_INT, null, false);
		$this->initVar('cookie_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_send_mms_string', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('xhtml_table_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_display_accesskey', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_supports_iframe', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('xhtmlmp_preferred_mime_type', XOBJ_DTYPE_TXTBOX, null, false, 128);
		$this->initVar('xhtml_supports_monospace_font', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_supports_inline_input', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_supports_forms_in_table', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_document_title_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_support_wml2_namespace', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_readable_background_color1', XOBJ_DTYPE_TXTBOX, null, false, 7);
		$this->initVar('xhtml_format_as_attribute', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_supports_table_for_layout', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_readable_background_color2', XOBJ_DTYPE_TXTBOX, null, false, 7);
		$this->initVar('xhtml_select_as_popup', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_send_sms_string', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('xhtml_format_as_css_property', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_file_upload', XOBJ_DTYPE_TXTBOX, null, false, 128);
		$this->initVar('xhtml_honors_bgcolor', XOBJ_DTYPE_INT, null, false);
		$this->initVar('opwv_xhtml_extensions_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_marquee_as_css_property', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xhtml_nowrap_mode', XOBJ_DTYPE_INT, null, false);		
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
class WurflXhtml_uiHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_xhtml_ui", 'WurflXhtml_ui');
    }
}

?>