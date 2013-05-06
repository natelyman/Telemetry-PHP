<?php
namespace Telemetry\DataFlows;
require_once("servers.server.php");

class Servers {
	public $servers = array();
	public $orange = 75;
	public $red = 90;

	public function addServer(Servers\Server $server) {
		$this->servers[] = $server;
	}

}

?>