
<h2>To instantiate Telemetry-PHP, pass in your API token.</h2>
```php
	$tel = new Telemetry(YOUR_TELEMETRY_TOKEN);
```

<h1>Data Flows Supported</h1>

<h2>Bar Chart</h2>
```php
	$barchart = new Telemetry\DataFlows\BarChart();
	$bar = new Telemetry\DataFlows\Bar();
	$bar->value = 10000;
	$bar->label = "Max";
	$bar->color = "#FF0000";
	$barchart->addBar($bar);
	
	$bar2 = new Telemetry\DataFlows\Bar();
	$bar2->value = 800;
	$bar2->label = "B";
	$bar2->color = "#00FF00";
	$barchart->addBar($bar2);

	$tel->addDataFlow("test_bar_chart",$barchart);
```
<h2>Countdown</h2>
```php
	$countdown = new Telemetry\DataFlows\Countdown();
	$countdown->time = strtotime("tomorrow");
	$countdown->message = "Until tomorrow";

	$tel->addDataFlow("test_countdown",$countdown);
```
<h2>Gauge</h2>
```php
	$gauge = new Telemetry\DataFlows\Gauge();
	$gauge->value = 78;
	$gauge->label = "Awesome";

	$tel->addDataFlow("test_gauge",$gauge);
```
<h2>Graph</h2>
```php
	$graph = new Telemetry\DataFlows\Graph();
	$s = new Telemetry\DataFlows\Series();
	$s->values = array(1,2,3,4,5,6,7);

	$graph->addSeries($s);
	$tel->addDataFlow("test_graph",$graph);
```
<h2>Icons</h2>
```php
	$icons = new Telemetry\DataFlows\Icons();
	$icon = new Telemetry\DataFlows\Icons\Icon();
	$icon->type = "icon-barcode";
	$icon->label = "Scans";
	$icon->color = "#FF1100";
	$icons->addIcon($icon);

	$tel->addDataFlow("test_icon",$icons);
```
<h2>iFrame</h2>
```php
	$iframe = new Telemetry\DataFlows\Iframe();
	$iframe->url = "http://m.wikipedia.com/";

	$tel->addDataFlow("test_iframe",$iframe);
```
<h2>Log</h2>
```php
	$log = new Telemetry\DataFlows\Log();
	$msg = new Telemetry\DataFlows\Log\Message();
	$msg->text = "Test Test tesT";
	$msg->timestamp = time();
	$log->addMessage($msg);

	$tel->addDataFlow("test_log",$log);
```
<h2>Multi-Gauge</h2>
```php
	$gauge = new Telemetry\DataFlows\Gauge();
	$gauge->value = 78;
	$gauge->label = "Awesome";

	$multigauge = new Telemetry\DataFlows\MultiGauge();
	$multigauge->addGauge($gauge);

	$tel->addDataFlow("test_multiguage",$multigauge);

```
<h2>Servers</h2>
```php
	$servers = new Telemetry\DataFlows\Servers();
	$server = new Telemetry\DataFlows\Servers\Server();
	$server->label = "Mac Pro";
	$server->cpu = 79;
	$server->mem = 91;
	$server->disk = 24;

	$servers->addServer($server);

	$tel->addDataFlow("test_servers",$servers);
```
<h2>Table</h2>
```php
	$table = new Telemetry\DataFlows\Table();
	$table->colors = array("#FF0000","#00FF00");
	$table->header = array("Name","Value");
	$table->addRow(array("Test","Test"));
	$table->addRow(array("Test","Test"));
	$table->addRow(array("Test","Test"));
	$table->addRow(array("Test","Test"));

	$tel->addDataFlow("test_table",$table);
```
<h2>Text</h2>
```php
	$text = new Telemetry\DataFlows\Text();
	$text->text = "Test Test Test";
	$text->alignment = "center";

	$tel->addDataFlow("test_text",$text);
```
<h2>Ticker-Tape</h2>
```php
	$tt = new Telemetry\DataFlows\TickerTape();
	$tt->addMessage("Add Message 1");
	$tt->addMessage("Add Message 2");

	$tel->addDataFlow("test_tickertape",$tt);
```
<h2>Timeline</h2>
```php
	$timeline = new Telemetry\DataFlows\Timeline();
	$message = new Telemetry\DataFlows\Timeline\Message();
	$message->timestamp = time();
	$message->from = "Nate Lyman";
	$message->icon_url = "https://si0.twimg.com/profile_images/2979429882/c83a41423251748ae1791aade10b2a7b.jpeg";
	$message->text = "This is a test timeline post";
	$timeline->addMessage($message);

	$tel->addDataFlow("test_timeline",$timeline);
```
<h2>Timeseries</h2>
```php
	$ts = new Telemetry\DataFlows\TimeSeries();
	$ts->value = rand(0,100);
	$ts->type = "hour";
	$ts->label = "Bars";

	$tel->addDataFlow("test_timeseries",$ts);
```
<h2>Up-Time</h2>
```php
	$up = new Telemetry\DataFlows\UpTime();
	$up->addUpHost("api.google.com");
	$up->addDownHost("api.amazon.com");
	$up->uptime = 99.98;

	$tel->addDataFlow("test_up",$up);
```
<h2>Value</h2>
```php
	$value = new Telemetry\DataFlows\Value();
	$value->value = 19.99;
	$value->color = "#CCCCCC";
	$value->delta = 1.2;
	$value->value_type = "dollar";
	$value->delta_type = "absolute";

	$tel->addDataFlow("test_value",$value);
```