<?php

require_once('hd3.php');

class Hd3Test extends PHPUnit_Framework_TestCase {
	
	protected $hd3;
	var $config = array ( 
		'username' => '',
		'secret' => ''
	);

	protected function setup() {
		$this->hd3 = new HD3($this->config);	
	}
	
	public function testsiteDetect() {
		$this->assertTrue($this->hd3->siteDetect());
	}
	
		
} 

?>
