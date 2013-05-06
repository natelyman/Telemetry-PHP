<?php
namespace Telemetry\DataFlows;

class Table {
	public $colors = array();
	public $headers = array();
	public $table = array();

	function addRow(array $value) {
		$this->table[] = $value;
	}
}

?>