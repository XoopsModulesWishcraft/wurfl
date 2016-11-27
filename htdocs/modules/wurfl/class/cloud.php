<?php
// $Autho: wishcraft $

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

include_once __DIR__ . '/Cache/CacheInterface.php';
include_once __DIR__ . '/Cache/Cookie.php';
include_once __DIR__ . '/Cache/Null.php';
include_once __DIR__ . '/Cache/Xoopscache.php';
include_once __DIR__ . '/Client/Client.php';
include_once __DIR__ . '/Client/Config.php';
include_once __DIR__ . '/Client/Exception.php';
include_once __DIR__ . '/HttpClient/AbstractHttpClient.php';
include_once __DIR__ . '/HttpClient/Curl.php';
include_once __DIR__ . '/HttpClient/Factory.php';
include_once __DIR__ . '/HttpClient/Fsock.php';

/**
 * Class for wurfl
 * @author    Simon Roberts <simon@xoops.org>
 * @copyright copyright (c) 2009-2003 XOOPS.org
 * @package   kernel
 */
class WurflCloud extends XoopsObject
{
    public function __construct($id = null)
    {
        $this->initVar('is_tablet', XOBJ_DTYPE_INT, null, false);
        $this->initVar('is_wireless_device', XOBJ_DTYPE_INT, null, false);
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
class WurflCloudHandler extends XoopsPersistableObjectHandler
{
    public $errors = array();

    /**
     * The HTTP Headers that will be examined to find the best User Agent, if one is not specified
     * @var array
     */
    private $user_agent_headers = array(
        'HTTP_X_DEVICE_USER_AGENT',
        'HTTP_X_ORIGINAL_USER_AGENT',
        'HTTP_X_OPERAMINI_PHONE_UA',
        'HTTP_X_SKYFIRE_PHONE',
        'HTTP_X_BOLT_PHONE_UA',
        'HTTP_USER_AGENT'
    );

    public function __construct($db)
    {
        $this->db = $db;
        parent::__construct($db, "", 'WurflCloud', '', '');
    }

    public function getUserAgent($source = null)
    {
        if (is_null($source) || !is_array($source)) {
            $source = $_SERVER;
        }
        $user_agent = '';
        if (isset($_GET['UA'])) {
            $user_agent = $_GET['UA'];
        } else {
            foreach ($this->user_agent_headers as $header) {
                if (array_key_exists($header, $source) && $source[$header]) {
                    $user_agent = $source[$header];
                    break;
                }
            }
        }
        if (strlen($user_agent) > 255) {
            return substr($user_agent, 0, 255);
        }

        return $user_agent;
    }

    public function testUserAgentForTheme()
    {
        if ($object = $this->testUserAgent(false)) {
            if ($object->getVar('is_tablet') == true) {
                return $GLOBALS['wurflModuleConfig']['pad_cloud'];
            } elseif ($object->getVar('is_wireless_device') == true) {
                return $GLOBALS['wurflModuleConfig']['mob_cloud'];
            }
        }

        return false;
    }

    public function testUserAgent($as_array = false)
    {
        $this->errors[] = array();
        try {
            // Create a WURFL Cloud Config
            $config = new WurflCloud_Client_Config();

            // Set API Key here
            $config->api_key = $GLOBALS['wurflModuleConfig']['api_key'];

            // Set API Key here
            $config->http_method = $GLOBALS['wurflModuleConfig']['http_method'];

            // Set API Key here
            $config->http_timeout = $GLOBALS['wurflModuleConfig']['http_timeout'];

            // Create a WURFL Cloud Client
            $client = new WurflCloud_Client_Client($config, new $GLOBALS['wurflModuleConfig']['cache_method']);

            // Detect the visitor's device
            $client->detectDevice($_SERVER, array('is_tablet', 'is_wireless_device'));

            // Set Object with the capabilities returned by the WURFL Cloud Service
            $object = new WurflCloud();
            foreach ($client->capabilities as $name => $value) {
                $object->assignVar($name, $value);
            }

            if ($as_array === false) {
                return $object;
            } else {
                return $object->toArray();
            }
        }
        catch (Exception $e) {
            // Show any errors
            $this->errors[] = $e->getMessage();
        }

        return false;
    }
}
