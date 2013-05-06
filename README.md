
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