<?php
namespace Telemetry\DataFlows;

class TickerTape {
	public $messages = array();

	public function addMessage($message) {
		$this->messages[] = $message;
	}
}

?>