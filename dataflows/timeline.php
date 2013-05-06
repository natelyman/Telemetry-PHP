<?php
namespace Telemetry\DataFlows;

class Timeline {
	public $messages = array();

	public function addMessage(Message $message) {
		$this->messages[] = $message;
	}
}

class Message {
	public $timestamp;
	public $from;
	public $icon_url;
	public $text;
}

?>