<?php
namespace Telemetry\DataFlows;

class BarChart {
	public $bars = array();


	public function addBar(Bar $bar) {
		$this->bars[] = $bar;
	}
}

class Bar {
	public $value;
	public $label;
	public $color = "#FF0000";
}

?>