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
class WurflJ2me extends XoopsObject
{

    function WurflJ2me($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);	
		$this->initVar('doja_1_5', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_datefield_broken', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_clear_key_code', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_right_softkey_code', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_heap_size', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_canvas_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_motorola_lwt', XOBJ_DTYPE_INT, null, false);
		$this->initVar('doja_3_5', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_wbmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_rmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_wma', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_left_softkey_code', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_jtwi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_jpg', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_return_key_code', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_real8', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_max_record_store_size', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_realmedia', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_midp_1_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_bmp3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_midi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_btapi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_locapi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_siemens_extension', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_h263', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_audio_capture_enabled', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_midp_2_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_datefield_no_accepts_null_date', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_aac', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_capture_image_formats', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('j2me_select_key_code', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_xmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_photo_capture_enabled', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_realaudio', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_realvideo', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_mp3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_png', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_au', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_screen_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_mp4', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_mmapi_1_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_http', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_imelody', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_socket', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_3dapi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_bits_per_pixel', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_mmapi_1_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_udp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_wav', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_middle_softkey_code', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_svgt', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_gif', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_siemens_color_game', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_max_jar_size', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_wmapi_1_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_nokia_ui', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_screen_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_wmapi_1_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_wmapi_2_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('doja_1_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_serial', XOBJ_DTYPE_INT, null, false);
		$this->initVar('doja_2_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_bmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_amr', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_gif89a', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_cldc_1_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('doja_2_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('doja_3_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_cldc_1_1', XOBJ_DTYPE_INT, null, false);
		$this->initVar('doja_2_2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('doja_4_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_3gpp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_video_capture_enabled', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_canvas_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_https', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_mpeg4', XOBJ_DTYPE_INT, null, false);
		$this->initVar('j2me_storage_size', XOBJ_DTYPE_INT, null, false);		
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
class WurflJ2meHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_j2me", 'WurflJ2me');
    }
}

?>