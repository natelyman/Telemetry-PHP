<?php
namespace Telemetry\DataFlows;
require_once("log.message.php");

class Log {
	public $messages = array();

	public function addMessage(Log\Message $message) {
		$this->messages[] = $message;
	}
}

?>