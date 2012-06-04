<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buttons extends CI_Model {
	
    function __construct() {
        parent::__construct();
    }
	
	function checkDB(){
		$result = $this->redis->command('PING');
		if($result == 'PONG'){
			return true;
		} else {
			return false;
		}
	}
	
	function getFields(){
		$data = array();
		$data['orange_click'] = $this->redis->get('orange_click');
		$data['orange_show'] = $this->redis->get('orange_show');
		$data['green_click'] = $this->redis->get('green_click');
		$data['green_show'] = $this->redis->get('green_show');
		$data['white_click'] = $this->redis->get('white_click');
		$data['white_show'] = $this->redis->get('white_show');
		return $data;
	}
	
	function increaseShow($colour){
		$this->redis->incr($colour.'_show');
	}
	
	function increaseClick($colour){
		$this->redis->incr($colour.'_click');
	}
	
	function resetDB(){
		$this->redis->set('orange_click','1');
		$this->redis->set('orange_show','1');
		$this->redis->set('green_click','1');
		$this->redis->set('green_show','1');
		$this->redis->set('white_click','1');
		$this->redis->set('white_show','1');
	}

}