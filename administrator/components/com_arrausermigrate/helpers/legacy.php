<?php
defined( '_JEXEC' ) or die;
// Allow Legacy for J!1.5, J!1.6, J!1.7, J!2.5 < 2.5.6
if(version_compare(JVERSION, '3.0.0', 'ge')){
	jimport('joomla.application.component.controller');
	jimport('joomla.application.component.view');
	jimport('joomla.aplication.component.model');
	class JController extends JControllerLegacy{};
	class JView extends JViewLegacy{};
	class JModel extends JModelLegacy{};
}
?>