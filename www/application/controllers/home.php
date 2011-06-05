<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$patient_list = $this->parser->parse('patient_list', array(), 1);
		$patient_info = $this->parser->parse("patient_info", array(), 1);
		$this->parser->parse("template", array("patient_list" => $patient_list, "patient_info" => $patient_info));
		
	}

}
