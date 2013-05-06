<?php
namespace Telemetry\DataFlows;

class MultiGauge {
	public $gauges = array();

	public function addGauge(Gauge $gauge) {
		$this->gauges[] = $gauge;
	}
}

?>