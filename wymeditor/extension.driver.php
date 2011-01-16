<?php


Class extension_wymeditor extends Extension {

	public function about() {
		return array(
			'name' => 'WYM Editor',
			'version' => '0.1',
			'release-date' => '2011-01-16',
			'author' => array('name' => '<a href="http://designoslo.com">Moquan Chen</a>'),
			'description' => 'Includes WYM editor plugin for jQuery. Enable it by changing the text formatter.'
		);
	}
	
	public function uninstall() {
		
	}

	public function getSubscribedDelegates() {
		return array(				
			array(
				'page' => '/backend/',
				'delegate' => 'ModifyTextareaFieldPublishWidget',
				'callback' => 'applyEditor'),
			      
			array(
				'page' => '/backend/',
				'delegate' => 'ModifyTextBoxFullFieldPublishWidget',
				'callback' => 'applyEditor'),
			/*array(
				'page' => '/backend/',
				'delegate' => 'InitaliseAdminPageHead',
				'callback' => 'applyEditor'
			),*/
		);
	}
	
	
	/**
	 * Inject scripts to the backend interface
	 */
	private $editorAssetsAdded = false;
	
	public function applyEditor($context) {
		
		if(strtolower($context['field']->get('formatter')) != 'wymeditor') return;
		
		if($this->editorAssetsAdded) return;
		
		$page = Administration::instance()->Page;
		$urlBase = URL . '/extensions/wymeditor/assets/';
		
		$page->addScriptToHead($urlBase . 'wymeditor/jquery.wymeditor.min.js', 200, false);
//		$page->addScriptToHead($urlBase . 'jquery/jquery.ui.js', 200, false);
//		$page->addScriptToHead($urlBase . 'jquery/jquery.ui.resizable.js', 200, false);
//		$page->addScriptToHead($urlBase . 'wymeditor/plugins/resizable/jquery.wymeditor.resizable.js', 200, false);
		$page->addScriptToHead($urlBase . 'jquery.wymeditor.trigger.js', 200, false);
		
		$this->editorAssetsAdded = true;
	}
}