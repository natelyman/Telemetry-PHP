<?php 
namespace Telemetry;

require_once("dataflows/dataflows.php");

define("TELEMETRY_DEBUG",1);

class Telemetry {
	private $host = "https://data.telemetryapp.com/v1/data";
	private $token = false;
	private $dataFlows = array();

	public function __construct($token) {
		$this->token = $token;
	}

	public function addDataFlow($key, $dataFlow) {
		$this->dataFlows[$key] = $dataFlow;
	}

	public function publish() {
		
		$data = new \stdClass();
		foreach($this->dataFlows as $key => $flow) {
			$data->{$key} = $flow;
		}

		$payload->data = $data;
		$jsonPayload = json_encode($payload);

		if(defined("TELEMETRY_DEBUG") && TELEMETRY_DEBUG == 1) {
			var_dump($jsonPayload);
		}

		if($this->token === false) {
			throw new \Exception("Token not passed in.");
		}

		$additionalHeaders = "";
		$process = curl_init($this->host);
		curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $additionalHeaders));
		curl_setopt($process, CURLOPT_HEADER, 1);
		curl_setopt($process, CURLOPT_USERPWD, $this->token);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_POST, 1);
		curl_setopt($process, CURLOPT_POSTFIELDS, $jsonPayload);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		$return = curl_exec($process);
		curl_close($process);

		if(defined("TELEMETRY_DEBUG") && TELEMETRY_DEBUG == 1) {
			var_dump($return);
		}
	}
}

?>