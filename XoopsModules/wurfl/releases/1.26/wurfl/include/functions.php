<?php

function xml2array($contents, $get_attributes=1, $priority = 'tag') {
    if(!$contents) return array();

    if(!function_exists('xml_parser_create')) {
        return array();
    }

    $parser = xml_parser_create('');
    xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); 
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, trim($contents), $xml_values);
    xml_parser_free($parser);

    if(!$xml_values) return;

	return $xml_values;
}  

function chronolabs_inline($flash = false)
{

	$ret = '<div style="clear:both; height 10px;">&nbsp;</div>
<div style="clear:both; height 10px;"><center><img src="http://www.chronolabs.org.au/images/banners/loader/supportimage.php?flash=false" /></center></div>
<div style="clear:both;">Chronolabs offer limited free support should you want some development work done please contact us <a href="http://www.chronolabs.org.au/liaise/">on the question for a quote form.</a> We offer a wide range of XOOPS Professional Solution and have options for Basic SEO and marketing of your site as well as Search Engine Optimization for <a href="http://www.xoops.org/">XOOPS</a>. If you are looking for work done with this module/application or are looking for development on your site please contact us.</div>';
	return $ret;
}
?>