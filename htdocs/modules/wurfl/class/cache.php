<?php
// $Autho: wishcraft $

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

/**
 * Class for wurfl
 * @author    Simon Roberts <simon@xoops.org>
 * @copyright copyright (c) 2009-2003 XOOPS.org
 * @package   kernel
 */
class WurflCache extends XoopsObject
{
    public function __construct($id = null)
    {
        $this->initVar('did', XOBJ_DTYPE_INT, null, false);
        $this->initVar('time_to_live_support', XOBJ_DTYPE_INT, null, false);
        $this->initVar('total_cache_disable_support', XOBJ_DTYPE_INT, null, false);
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
class WurflCacheHandler extends XoopsPersistableObjectHandler
{
    public function __construct($db)
    {
        $this->db = $db;
        parent::__construct($db, "wurfl_devices_cache", 'WurflCache', 'did');
    }
}
