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
class WurflStreaming extends XoopsObject
{

    function WurflStreaming($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_vcodec_mpeg4_asp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_video_size_limit', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_mov', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_wmv', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('streaming_acodec_aac', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('streaming_vcodec_h263_0', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_real_media', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('streaming_3g2', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_3gpp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_acodec_amr', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('streaming_vcodec_h264_bp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_vcodec_h263_3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_preferred_protocol', XOBJ_DTYPE_TXTBOX, null, false, 32);
		$this->initVar('streaming_vcodec_mpeg4_sp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_flv', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_video', XOBJ_DTYPE_INT, null, false);
		$this->initVar('streaming_mp4', XOBJ_DTYPE_INT, null, false);		
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
class WurflStreamingHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_streaming", 'WurflStreaming');
    }
}

?>