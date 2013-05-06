<?php
namespace Telemetry\DataFlows;

class TimeSeries {
	public $value;
	public $type; // hour, day, or month - Whether to chart 60 minutes, 24 hours or 30 days.
	public $label;
	public $color;
	public $smoothing;
	public $value_type; // percent, dollar, euro, pound or a suffix
}

?>