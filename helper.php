<?php defined( '_JEXEC' ) or die( 'Restricted access' );

class ModMultiCampusHelper {

	public $params;
	public $module;

	function __construct(&$params,&$module) {

		$this->params =& $params;
		$this->module =& $module;
	}

	public function display() {
		
		$app = JFactory::getApplication();
		$dispatcher = JEventDispatcher::getInstance();
		$user = JFactory::getUser();
		
		$currentcampus = $app->input->cookie->getString('multicampus');
		
		$campuses = $dispatcher->trigger('getCampusConfig');
		if (empty($campuses[0])&&$user->authorise('core.admin')) {
			$app->enqueueMessage('Please publish the Multi Campus system plugin','error');
		}
		
		require JModuleHelper::getLayoutPath('mod_multicampus',$this->params->get('layout', 'default'));
	}
}
