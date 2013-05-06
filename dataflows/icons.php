<?php
namespace Telemetry\DataFlows;

require_once("icons.icon.php");

class Icons {
	public $icons = array();

	public function addIcon(Icons\Icon $icon) {
		$this->icons[] = $icon;
	}
}

?>