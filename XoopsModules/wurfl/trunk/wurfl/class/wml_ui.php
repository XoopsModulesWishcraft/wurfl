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
class WurflWml_ui extends XoopsObject
{

    function WurflWml_ui($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('icons_on_menu_items_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('opwv_wml_extensions_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('built_in_back_button_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('proportional_font', XOBJ_DTYPE_INT, null, false);
		$this->initVar('insert_br_element_after_widget_recommended', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wizards_recommended', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wml_can_display_images_and_text_on_same_line', XOBJ_DTYPE_INT, null, false);
		$this->initVar('softkey_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wml_make_phone_call_string', XOBJ_DTYPE_TXTBOX, null, false, 128);
		$this->initVar('deck_prefetch_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('menu_with_select_element_recommended', XOBJ_DTYPE_INT, null, false);
		$this->initVar('numbered_menus', XOBJ_DTYPE_INT, null, false);
		$this->initVar('card_title_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('image_as_link_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wrap_mode_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('table_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('access_key_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wml_displays_image_in_center', XOBJ_DTYPE_INT, null, false);
		$this->initVar('elective_forms_recommended', XOBJ_DTYPE_INT, null, false);
		$this->initVar('times_square_mode_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('break_list_of_links_with_br_element_recommended', XOBJ_DTYPE_INT, null, false);
		$this->initVar('menu_with_list_of_links_recommended', XOBJ_DTYPE_INT, null, false);		
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
class WurflWml_uiHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_wml_ui", 'WurflWml_ui');
    }
}

?>