<?php
//Funktion ohne Parameter
function start_table(){
	echo "<table border='1'><tr><td>eine Spalte</td></tr></table>";
}

//Funktion mit Parameter
function start_table2($spalten, $zeilen){
	echo "<table border='1'>";
	for($i = 1; $i <= $zeilen; $i++){
		echo "<tr>";
		for ($j = 1; $j <= $spalten; $j++){
			echo"<td>";
			echo"Spalte:" . $j . " Zeile:" . $i;
			echo"</td>";
		}
		echo"</tr>";
	}
	echo"</table>";
}

//Funktion mit Standardwerten
function start_table3($spalten = 2, $zeilen = 2){
	echo "<table border='1'>";
	for($i = 1; $i <= $zeilen; $i++){
		echo "<tr>";
		for ($j = 1; $j <= $spalten; $j++){
			echo"<td>";
			echo"Spalte:" . $j . " Zeile:" . $i;
			echo"</td>";
		}
		echo"</tr>";
	}
	echo"</table>";
}

//Funktion mit Rückgabewert
function addiere($summand1, $summand2){
	$ergebnis = $summand1 + $summand2;
	return $ergebnis;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<title>Funktionen</title>
<meta name="author" content="Helene Deutsch" />
<meta http-equiv="content-type" content="text/xhtml; charset=ISO-8859-1" />
</head>
<body>
<h2>Funktionen ohne Parameter</h2>
<?php start_table(); ?>
<h2>Funktionen mit Parameter</h2>
<?php start_table2(3,3); ?>
<h2>Funktionen mit Standardwerten</h2>
<?php start_table3(); ?>
<br />
<?php start_table3(5,5);?>
<h2>Funktionen mit Rückgabewert</h2>
<?php echo addiere(2,4); ?>
</body>
</html>