<?php
if (!function_exists("wurfl_xml2array")) {
    function wurfl_xml2array($contents, $get_attributes = 1, $priority = 'tag')
    {
        if (!$contents) {
            return array();
        }
        if (!function_exists('xml_parser_create')) {
            return array();
        }
        $parser = xml_parser_create('');
        xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8");
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_parse_into_struct($parser, trim($contents), $xml_values);
        xml_parser_free($parser);
        if (!$xml_values) {
            return;
        }

        return $xml_values;
    }
}

if (!function_exists('wurfl_text_field_subsets')) {
    function wurfl_text_field_subsets()
    {
        return array(
            'code',
            'length',
            'size',
            'no_of',
            'byte',
            'width',
            'height',
            'rate',
            'column',
            'row',
            'user_agent',
            'fallback',
            'manufacture',
            'model',
            'code',
            'type',
            'ua',
            'string',
            'charset',
            'color',
            'file_upload'
        );
    }
}

if (!function_exists("wurfl_adminMenu")) {
    function wurfl_adminMenu($currentoption = 0, $page = 'dashboard.php')
    {
        $moduleHandler          = xoops_getHandler('module');
        $GLOBALS['wurflModule'] = $moduleHandler->getByDirname('wurfl');
        $GLOBALS['myts']        = MyTextSanitizer::getInstance();
        xoops_loadLanguage('modinfo', 'wurfl');
        echo "<table width=\"100%\" border='0'><tr><td>";
        $indexAdmin = new ModuleAdmin();
        echo $indexAdmin->addNavigation(strtolower($page));
        echo "</td></tr>";
        echo "<tr><td><div id='wurflControlPanel'>";
    }

    function wurfl_footer_adminMenu()
    {
        echo "</div></td></tr>";
        echo "</table>";
        echo "<div align=\"center\"><a href=\"http://www.xoops.org\" target=\"_blank\"><img src="
             . XOOPS_URL
             . '/'
             . $GLOBALS['wurflModule']->getInfo('icons32')
             . '/xoopsmicrobutton.gif'
             . ' '
             . " alt='XOOPS' title='XOOPS'></a></div>";
        echo "<div class='center smallsmall italic pad5'><strong>"
             . $GLOBALS['wurflModule']->getVar("name")
             . "</strong> is maintained by the <a class='tooltip' rel='external' href='http://www.xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a> and <a class='tooltip' rel='external' href='http://www.chronolabs.coop/' title='Visit Chronolabs Co-op'>Chronolabs Co-op</a></div>";
    }
}

if (!function_exists('wurfl_getFilterElement')) {
    function wurfl_getFilterElement($filter, $field, $sort = 'did', $op = '', $fct = '')
    {
        $components = wurfl_getFilterURLComponents($filter, $field, $sort);
        include_once __DIR__ . '/form.objects.php';
        switch ($field) {
            case 'id':
            case 'user_agent':
            case 'fallback':
            case 'manufacture':
            case 'model':
            case 'series':
                $ele = new XoopsFormElementTray('');
                $ele->addElement(new XoopsFormText('', 'filter_' . $field . '', 11, 40, $components['value']));
                $button = new XoopsFormButton('', 'button_' . $field . '', '[+]');
                $button->setExtra('onclick="window.open(\''
                                  . $_SERVER['PHP_SELF']
                                  . '?'
                                  . $components['extra']
                                  . '&filter='
                                  . $components['filter']
                                  . (!empty($components['filter']) ? '|' : '')
                                  . $field
                                  . ',\'+$(\'#filter_'
                                  . $field
                                  . '\').val()'
                                  . (!empty($components['operator']) ? '+\',' . $components['operator'] . '\'' : '')
                                  . ',\'_self\')"');
                $ele->addElement($button);
                break;

        }

        return (isset($ele) ? $ele : '');
    }
}

if (!function_exists('wurfl_getFilterURLComponents')) {
    function wurfl_getFilterURLComponents($filter, $field, $sort = 'did')
    {
        $parts = explode('|', $filter);
        $ret   = array();
        $value = '';
        foreach ($parts as $part) {
            $var = explode(',', $part);
            if (count($var) > 1) {
                if ($var[0] == $field) {
                    $ele_value = $var[1];
                    if (isset($var[2])) {
                        $operator = $var[2];
                    }
                } elseif ($var[0] != 1) {
                    $ret[] = implode(',', $var);
                }
            }
        }
        $pagenav          = array();
        $pagenav['op']    = isset($_REQUEST['op']) ? $_REQUEST['op'] : "campaign";
        $pagenav['fct']   = isset($_REQUEST['fct']) ? $_REQUEST['fct'] : "list";
        $pagenav['limit'] = !empty($_REQUEST['limit']) ? (int)$_REQUEST['limit'] : 30;
        $pagenav['start'] = 0;
        $pagenav['order'] = !empty($_REQUEST['order']) ? $_REQUEST['order'] : 'DESC';
        $pagenav['sort']  = !empty($_REQUEST['sort']) ? '' . $_REQUEST['sort'] . '' : $sort;
        $retb             = array();
        foreach ($pagenav as $key => $value) {
            $retb[] = "$key=$value";
        }

        return array('value'    => isset($ele_value) ? $ele_value : '',
                     'field'    => isset($field) ? $field : '',
                     'operator' => isset($operator) ? $operator : '',
                     'filter'   => count($ret) ? implode('|', $ret) : '',
                     'extra'    => count($retb) ? implode('&', $retb) : ''
        );
    }
}
