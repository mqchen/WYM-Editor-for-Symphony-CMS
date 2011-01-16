<?php

class formatterwymeditor extends TextFormatter {
	
	public function about() {
		return array(
			'name' => 'WYM Editor',
			'version' => '0.1',
			'release-date' => '2011-01-16',
			'author' => array(
				'name' => 'Moquan Chen',
				'website' => 'http://designoslo.com',
				'email' => 'mq.chen@gmail.com'
			),
			'description' => 'Includes the WYM editor.'
		);
	}
	
	public function run($string) {
		return $string;
	}
}