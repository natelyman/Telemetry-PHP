<?php

	namespace Telemetry;

	require_once("telemetry.php");

	$tel = new Telemetry("ff0485d73bcce6f1721db63ec02ef115");

	$graph = new DataFlows\Graph();
	$s = new DataFlows\Series();
	$s->values = array(1,2,3,4,5,6,7);

	$graph->addSeries($s);
	$tel->addDataFlow("test_graph",$graph);


	$table = new DataFlows\Table();
	$table->colors = array("#FF0000","#00FF00");
	$table->header = array("Name","Value");
	$table->addRow(array("Test","Test"));
	$table->addRow(array("Test","Test"));
	$table->addRow(array("Test","Test"));
	$table->addRow(array("Test","Test"));

	$tel->addDataFlow("test_table",$table);

	$guage = new DataFlows\Guage();
	$guage->value = 78;

	$tel->addDataFlow("test_guage",$guage);

	$timeline = new DataFlows\Timeline();
	$message = new DataFlows\Message();
	$message->timestamp = time();
	$message->from = "Nate Lyman";
	$message->icon_url = "https://si0.twimg.com/profile_images/2979429882/c83a41423251748ae1791aade10b2a7b.jpeg";
	$message->text = "This is a test timeline post";
	$timeline->addMessage($message);

	$tel->addDataFlow("test_timeline",$timeline);

	$tel->publish();

?>