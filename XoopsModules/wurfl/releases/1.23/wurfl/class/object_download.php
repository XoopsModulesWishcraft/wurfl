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
class WurflObject_download extends XoopsObject
{

    function WurflObject_download($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('video', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_bmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_df_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_preferred_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_oma_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_greyscale', XOBJ_DTYPE_INT, null, false);
		$this->initVar('inline_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_qcelp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_oma_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_wbmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_resize', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('picture_preferred_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_rmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_wbmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_jpg', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_bmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_max_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_inline_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_colors', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_midi_polyphonic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_midi_monophonic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_preferred_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_voices', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_3gpp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('oma_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_inline_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_preferred_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_greyscale', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_preferred_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_preferred_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_max_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_jpg', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_aac', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_oma_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_directdownload_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_inline_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_xmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_max_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_max_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_mp3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_png', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_jpg', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_directdownload_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_max_width', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_max_height', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_wav', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_gif', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_directdownload_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_df_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_tiff', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_df_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_awb', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_inline_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_directdownload_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_png', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_bmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_wbmp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_df_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_oma_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('picture_gif', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_png', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper_resize', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('screensaver_greyscale', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_mmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_amr', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wallpaper', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_digiplug', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_spmidi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_compactmidi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('ringtone_imelody', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_resize', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('wallpaper_colors', XOBJ_DTYPE_INT, null, false);
		$this->initVar('directdownload_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('downloadfun_support', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_colors', XOBJ_DTYPE_INT, null, false);
		$this->initVar('screensaver_gif', XOBJ_DTYPE_INT, null, false);		
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
class WurflObject_downloadHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_object_download", 'WurflObject_download');
    }
}

?>