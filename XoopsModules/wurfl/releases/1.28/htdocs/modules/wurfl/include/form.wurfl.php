<?php
	
	include_once( 'form.objects.php' );
	
	function formImport(){
		$cform = new XoopsThemeForm(_WURFL_FRM_FILEIMPORT_FORM, 'import');

		$cform->addElement(new XoopsFormText(_WURFL_FRM_FILEIMPORT, 'xmlfile', 70, 255, XOOPS_ROOT_PATH.'/modules/wurfl/wurfl.xml'));
		$cform->addElement(new XoopsFormButton('', 'checkout_submit', _WURFL_FRM_FILEIMPORT_BTTN, "submit"));
		$cform->addElement(new XoopsFormHidden('op', 'import'));
		$cform->addElement(new XoopsFormHidden('fct', 'go'));		
		
		return $cform->render();
	}
	
?>
