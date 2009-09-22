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
class WurflProduct_info extends XoopsObject
{

    function WurflProduct_info($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('playback_oma_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_acodec_aac', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('playback_vcodec_h263_3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_vcodec_mpeg4_asp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_mp4', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_3gpp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_df_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_acodec_amr', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('playback_mov', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_wmv', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('playback_acodec_qcelp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('progressive_download', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_directdownload_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_real_media', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('playback_3g2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_vcodec_mpeg4_sp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_vcodec_h263_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_inline_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('playback_vcodec_h264_bp', XOBJ_DTYPE_INT, null, false);		
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
class WurflProduct_infoHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_product_info", 'WurflProduct_info');
    }
}

?>