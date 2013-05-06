<?php
namespace Telemetry\DataFlows;

class UpTime {
	public $up = array();
	public $down = array();
	public $uptime;

	public function addUpHost($host) {
		$this->up[] = $host;
	}

	public function addDownHost($host) {
		$this->down[] = $host;
	}
}

?>