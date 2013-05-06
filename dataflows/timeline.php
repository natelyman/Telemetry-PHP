<?php
namespace Telemetry\DataFlows;
require_once("timeline.message.php");

class Timeline {
	public $messages = array();

	public function addMessage(Timeline\Message $message) {
		$this->messages[] = $message;
	}
}


?>