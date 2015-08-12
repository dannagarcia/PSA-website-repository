<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!--
<?php
	$test  = array();
	$ctr = 0;
	$blah = array();
	$myfile = fopen("names.txt", "r") or die("Unable to open file!");
	while(!feof($myfile)) {
	 $test = fgets($myfile);
	$blah = explode("	", $test);
	echo "<table>";
		echo "<tr>";
			echo "<td>";
			echo count($blah);
			echo "</td>";
		echo "</tr>";
	echo "</table>";

	}
		
	fclose($myfile);
?>
<?php
	$myfile = fopen("names.txt", "r") or die("Unable to open file!");
	$count = explode("	",fgets($myfile));
	$ctr = count($count);
	echo $ctr;
	fclose($myfile);

	$a =1;
	//while (a!=$ctr) {

	//}
?>-->
<?php
$array = file('names.txt');

$new_array = array();

foreach ($array as $line) {
    $line_array = explode("\t", $line);
    $first[] = $line_array[0];
    $second[] = $line_array[1];
}

	echo "<table>";
		echo "<tr>";
			echo "<td>";
			echo(implode($first));
			echo "</td>";
		echo "</tr>";
	echo "</table>";
?>

</body>
</html>