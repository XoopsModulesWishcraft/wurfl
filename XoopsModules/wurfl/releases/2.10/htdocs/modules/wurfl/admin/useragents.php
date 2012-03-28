<?php
	
	include('header.php');
		
	xoops_loadLanguage('admin', 'wurfl');
	
	xoops_cp_header();
	
	$op = isset($_REQUEST['op'])?$_REQUEST['op']:"useragents";
	$fct = isset($_REQUEST['fct'])?$_REQUEST['fct']:"";
	$limit = !empty($_REQUEST['limit'])?intval($_REQUEST['limit']):30;
	$start = !empty($_REQUEST['start'])?intval($_REQUEST['start']):0;
	$order = !empty($_REQUEST['order'])?$_REQUEST['order']:'DESC';
	$sort = !empty($_REQUEST['sort'])?''.$_REQUEST['sort'].'':'created';
	$filter = !empty($_REQUEST['filter'])?''.$_REQUEST['filter'].'':'1,1';
	
	switch($op) {
	default:
	case "agents":	
		wurfl_adminMenu(4, 'useragents.php');
		
		include_once $GLOBALS['xoops']->path( "/class/pagenav.php" );
		xoops_load('XoopsCache');
		$ret = XoopsCache::read('wurfl_user_agents');
		asort($ret, SORT_DESC);
		$ttl = count($ret);
		$pagenav = new XoopsPageNav($ttl, $limit, $start, 'start', 'limit='.$limit.'&sort='.$sort.'&order='.$order.'&op='.$op.'&fct='.$fct.'&filter='.$filter.'&fct='.$fct.'&filter='.$filter);
		$GLOBALS['xoopsTpl']->assign('pagenav', $pagenav->renderNav());
		foreach (array(	'time','theme','agents','user') as $id => $key) {
			$GLOBALS['xoopsTpl']->assign(strtolower(str_replace('-','_',$key).'_th'), '<a href="#">'.(defined('_WURFL_AM_TH_'.strtoupper(str_replace('-','_',$key)))?constant('_WURFL_AM_TH_'.strtoupper(str_replace('-','_',$key))):'_WURFL_AM_TH_'.strtoupper(str_replace('-','_',$key))).'</a>');
		}
		$GLOBALS['xoopsTpl']->assign('limit', $limit);
		$GLOBALS['xoopsTpl']->assign('start', $start);
		$GLOBALS['xoopsTpl']->assign('order', $order);
		$GLOBALS['xoopsTpl']->assign('sort', $sort);
		$GLOBALS['xoopsTpl']->assign('filter', $filter);
		$GLOBALS['xoopsTpl']->assign('xoConfig', $GLOBALS['wurflModuleConfig']);
		$s=0;
		$i=0;
		foreach($ret as $time => $agent) {
			if (is_array($agent)&&$s>=$start&&$i<=$limit) {
				$GLOBALS['xoopsTpl']->append('useragents', array('time'=>date(_DATESTRING, $time), 'theme'=>$agent['theme'], 'user'=>$agent['user'], 'useragent'=>$agent['useragent']));
				$i++;
			}
			$s++;
		}
		$GLOBALS['xoopsTpl']->assign('php_self', $_SERVER['PHP_SELF']);
		$GLOBALS['xoopsTpl']->display('db:wurfl_cpanel_list_useragents.html');
		break;		
		
		
	}
	
	wurfl_footer_adminMenu();
	xoops_cp_footer();
?>