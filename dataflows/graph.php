<?php
namespace Telemetry\DataFlows;

class Graph {
	public $renderer = "line";
	public $series = array();
	public $min_scale;
	public $unstack;
	public $stoke;

	function addSeries(Series $s) {
		$this->series[] = $s;
	}
}


class Series {
	public $values = array();
	public $color = "#FF0000";
	public $x_labels = array();
	public $label;
}
?>