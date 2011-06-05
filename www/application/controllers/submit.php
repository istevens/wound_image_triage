<?php

class Submit extends CI_Controller {

	protected static $expected_input = array(
					"image" => null,
					"topx" => null,
					"topy" => null,
					"bottomx" => null,
					"bottomy" => null,
					"leftx" => null,
					"lefty" => null,
					"rightx" => null,
					"righty" => null,
					"name" => null,
					"gender" => null,
					"age" => null,
					"refAx" => null, // x1_ref
					"refAy" => null, // y1_ref
					"refBx" => null, // x2_ref
					"refBy" => null, // y2_ref
					"refH" => null,
					"part" => null,
					"gps"
				);


	public function index() {
		$input = self::$expected_input;
		foreach ($input as $key => $val)  {
			if(array_key_exists($val, $this->input->post())) {
				unset($input[$key]);
				$input[$val] = $this->input->post($val);
			}
		}

		// Calculate the dimensions
		$refAx = $this->input->post("refAx");
		$refBx = $this->input->post("refBx");
		$refAy = $this->input->post("refAy");
		$refBy = $this->input->post("refBy");
		$topx = $this->input->post("topx");
		$bottomx = $this->input->post("bottomx");
		$topy = $this->input->post("topy");
		$bottomy = $this->input->post("bottomy");
		$rightx = $this->input->post("rightx");
		$righty = $this->input->post("righty");
		$leftx = $this->input->post("leftx");
		$lefty = $this->input->post("lefty");
		$scale = $this->input->post("refH");

		$ref = sqrt(pow($refAx - $refBx, 2) + pow($refAy - $refBy, 2));
		$first_dim = sqrt(pow($topx - $bottomx, 2) + pow($topy - $bottomy, 2));
		$first_dim = $first_dim * $scale / $ref;
		$second_dim = sqrt(pow($leftx - $rightx, 2) + pow($lefty - $righty,2));
		$second_dim = $second_dim * $scale / $ref;

		//echo print_r($input,1) . "\n";
		echo "$first_dim, $second_dim"; 
		
		$insert_fields = array(
					"name" => $this->input->post("name"),
					"age" => $this->input->post("age"),
					"sex" => $this->input->post("gendeR"),
					"wound_location" => $this->input->post("location"),
					"stitches" => null,
					"time_to_heal" => null,
					"width" => $first_dim,
					"height" => $second_dim,
					"comments" => null,
					"followup_completed" => null,
					"creation_date" => null,
					"attended_date" => null,
					"followup_data" => null,
					"image_fn" => null
		);

		
		$db = sqlite3_open("/Users/Lori/server/wound/pr.db");
		if(!$db) die ("fuck");

		$ret = sqlite3_exec($db, "INSERT INTO patient VALUES(" . implode(",", $insert_fields) . ")";
	}

}

?>
