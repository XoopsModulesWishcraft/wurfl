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
class WurflSound_format extends XoopsObject
{

    function WurflSound_format($id = null)
    {
		$this->initVar('did', XOBJ_DTYPE_INT, null, false);		
		$this->initVar('rmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('qcelp', XOBJ_DTYPE_INT, null, false);
		$this->initVar('awb', XOBJ_DTYPE_INT, null, false);
		$this->initVar('smf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('wav', XOBJ_DTYPE_INT, null, false);
		$this->initVar('nokia_ringtone', XOBJ_DTYPE_INT, null, false);
		$this->initVar('aac', XOBJ_DTYPE_INT, null, false);
		$this->initVar('digiplug', XOBJ_DTYPE_INT, null, false);
		$this->initVar('sp_midi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('compactmidi', XOBJ_DTYPE_INT, null, false);
		$this->initVar('voices', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mp3', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mld', XOBJ_DTYPE_INT, null, false);
		$this->initVar('evrc', XOBJ_DTYPE_INT, null, false);
		$this->initVar('amr', XOBJ_DTYPE_INT, null, false);
		$this->initVar('xmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('mmf', XOBJ_DTYPE_INT, null, false);
		$this->initVar('imelody', XOBJ_DTYPE_INT, null, false);
		$this->initVar('midi_monophonic', XOBJ_DTYPE_INT, null, false);
		$this->initVar('au', XOBJ_DTYPE_INT, null, false);
		$this->initVar('midi_polyphonic', XOBJ_DTYPE_INT, null, false);	
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
class WurflSound_formatHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, "wurfl_devices_sound_format", 'WurflSound_format');
    }
}

?>