<?php
namespace Telemetry\DataFlows\Log;

class Message {
	public $timestamp;
	public $text;
	public $color;

	function __construct() {
		$this->timestamp = time();
	}
}
?>