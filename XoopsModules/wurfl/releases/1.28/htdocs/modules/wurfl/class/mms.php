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
class WurflMms extends XoopsObject
{

    function WurflMms($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('mms_3gpp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_wbxml', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_symbian_install', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_png', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_max_size', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_rmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_nokia_operatorlogo', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_max_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_max_frame_rate', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_wml', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_evrc', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_spmidi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_gif_static', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_max_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sender', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_video', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_vcard', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_nokia_3dscreensaver', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_qcelp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_midi_polyphonic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_wav', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_jpeg_progressive', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_jad', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_nokia_ringingtone', XOBJ_DTYPE_INT, null, false);
		$this->initVar('built_in_recorder', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_midi_monophonic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_3gpp2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_wmlc', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_nokia_wallpaper', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_bmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_vcalendar', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_jar', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_ota_bitmap', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_mp3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_mmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_amr', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_wbmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('built_in_camera', XOBJ_DTYPE_INT, null, false);
		$this->initVar('receiver', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_mp4', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_xmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_jpeg_baseline', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_midi_polyphonic_voices', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mms_gif_animated', XOBJ_DTYPE_INT, null, false);		
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
class WurflMmsHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_mms", 'WurflMms');
    }
}

?>