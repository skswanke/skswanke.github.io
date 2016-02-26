<?php
$file = fopen("data/experience.csv", "r");

$header = fgetcsv($file);

while (!feof($file)) {
	$records[]=fgetcsv($file);
}

fclose($file);

print "<ul class=\"exp\">";
foreach ($records as $record) {
	if($record[0]!=""){
		print "<li><h4>" . $record[0] . "</h4><p>";
		print $header[1] . ": " . $record[1] . ".<br>";
		print $header[2] . ": " . $record[2] . ".<br>";
		print $header[3] . ": " . $record[3] . ".<br>";
		print $header[4] . ": <a href=\"" . $record[4] . "\">" . $record[4] . "</a><br>";
		print "</p></li>";
	}
}
print "</ul>";
?>