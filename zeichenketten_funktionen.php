<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<title>PHP-eigene Funktionen</title>
<meta name="author" content="Helene Deutsch" />
<meta http-equiv="content-type" content="text/xhtml; charset=ISO-8859-1" />
</head>
<body>
<h2>Informative Funktionen</h2>
<?php 
//Übersicht über: Server, Betriebssystem, PHP-Version, PHP-Einstellungen etc.
//phpinfo();
?>
<h2>Variablen-Funktionen</h2>
<?php
$zahl1 = 123;
$zahl2 = 123.55;
$text = "Zeichenkette";
$leer = "";
$nix = 0; 		//0, "0" = Zeichenkette ist leer aber vorhanden, 
//$nix = null; 	//Schlüsselwort null = Zeichenkette nicht vorhanden

echo "Datentyp von \$zahl1: " . gettype($zahl1) . "<br />";
echo "Datentyp von \$zahl2: " . gettype($zahl2) . "<br />";
echo "Datentyp von \$text: " . gettype($text) . "<br />";
echo "Datentyp von \$leer: " . gettype($leer) . "<br />";
?>
<p>Funktion isset() prüft ob eine Variable vorhanden ist, empty() ob diese leer ist oder nicht:</p>
<?php
echo (empty($leer)) ? "\$leer ist leer <br />" : "\$leer ist nicht leer <br />";
echo (isset($leer)) ? "\$leer ist vorhanden <br />" : "\$leer ist nicht vorhanden <br />";
echo (empty($nix)) ? "\$nix ist leer <br />" : "\$nix nicht leer <br />";
echo (isset($nix)) ? "\$nix ist vorhanden <br />" : "\$nix ist nicht vorhanden <br />";
?>
<h3>Typumwandlung</h3>
<?php
$string1 = "10";
$string2 = "10.5 ist kleiner als 20";
$string3 = "Zahl 15";
?>
<p>Dynamische Typumwandlung:</p>
<?php
echo $string1 * $string2;  //um Berechnung durchzuführen, wird Datentyp erzwungen
?>
<p>Typumwandlung mittels Funktionen:</p>
<?php
echo intval($string1) . "<br />";
//Steht die Zahl am Anfang, wird der Rest verworfen
echo floatval($string2) . "<br />";
echo intval($string2) . "<br />";
/*eine Zeichenkette, die nicht mit einer Zahl beginnt, ergibt nach der 
Typumwandlung 0*/
echo intval($string3);
?>
<h2>Zeichenkettenfunktionen: chop, trim, ltrim</h2>
<?php
$leerzeichen = " Am Anfang und am Ende ";
//Entfernt Leerzeichen am Ende
echo "#" . chop($leerzeichen) . "#<br />"; 
//Entfernt Leerzeichen am Anfang	
echo "#" . ltrim($leerzeichen) . "#<br />";	
//Entfernt Leerzeichen am Anfang und am Ende
echo "#" . trim($leerzeichen) . "#<br />";	
?>
<h2>Zeichenkettenfunktionen: strlen, strrev, strtolower, strtoupper, ucfirst, ucwords</h2>
<?php
$str = "dies ist eine Zeichenkette";
echo $str . "<br />";
//Anzahl der Zeichen einer Zeichenkette
echo "strlen: " . strlen($str) . "<br />"; 	
//Gibt Zeichenkette Rückwärts aus		
echo "strrev: " . strrev($str) . "<br />"; 	
//Wandelt in Kleinbuchstaben um		
echo "strtolower: " . strtolower($str) . "<br />"; 
//Wandelt alle Buchstaben in Großbuchstaben um	
echo "strtoupper: " . strtoupper($str) . "<br />"; 
//Wandelt den ersten Buchstaben des erstem Wortes in Großbuchstaben um	
echo "ucfirst: " . ucfirst($str) . "<br />"; 
//Wandelt den ersten Buchstaben aller Wörter in Großbuchstaben um 		
echo "ucwords: " . ucwords($str) . "<br />"; 
?>
<h2>Zeichenkettenfunktionen: strpos, strrpos, substr, strstr, strrchr</h2>
<?php
$zeichenkette = "Heide; Jörg; Uwe; Katrin; Clemens; Janine";
echo $zeichenkette . "<br />";
//Gibt Position des ersten Auftretens von J (des übergebenen Zeichens) 
echo "Erste Position von J: " . strpos($zeichenkette,"J") . "<br />"; 
//Gibt Position des letzten Auftretens von J (des übergebenen Zeichens)
echo "Letzte Position von J: " . strrpos($zeichenkette,"J") . "<br />";
//Liefert String ab der siebten Position mit genau 4 Zeichen
echo "Teil einer Zeichenkette: " . substr($zeichenkette,7,4) . "<br />"; 
//Gibt alle Zeichen ab dem ersten Vorkommen von J aus
echo "Alles ab erstem Vorkommen von J: " . strstr($zeichenkette,"J") . "<br />";
//Gibt alle Zeichen ab dem letzten Vorkommen von J aus	 
echo "Alles ab letztem Vorkommen von J: " . strrchr($zeichenkette,"J") . "<br />"; 
//Zeichenketten verschachteln
//Liefert String ab der von strpos zurückgelieferten Position mit genau 4 Zeichen
echo "substr und strpos verschachtelt: " . substr($zeichenkette,strpos($zeichenkette,"J"),4) . "<br />"; 
?>
<h2>Zeichenkettenfunktionen: str_replace, substr_replace</h2>
<?php
$zeichenkette = "Hund, Katze, Maus, Schwein, Hund, Katze";
echo $zeichenkette . "<br />";
//Ersetzt alle vorkommenden Zeichen
echo "Alle vorkommenden Zeichen ersetzt: " . str_replace("Hund", "Affe",$zeichenkette) . "<br />"; 	
//Ersetzt ab dem sechsten Zeichen genau 5 Zeichen aus der Zeichenkette
echo "Einen Teil ersetzen: " . substr_replace($zeichenkette,"Fisch",6,5) . "<br />"; 	
?>
<h2>Zeichenkettenfunktionen: htmlentities</h2>
<?php
echo $zeichenkette = "Zeichen wie ä, ö, ü und auch <, >, oder & und andere werden in <b>HTML-Code</b> umgewandelt";
echo "<br />";
echo htmlentities($zeichenkette);
?>
<h2>Zeichenkettenfunktionen: explode, implode</h2>
<?php
echo $zeichenkette = "Heide; Jörg; Uwe; Katrin; Clemens; Janine";
echo "<br />";
//Wandelt eine Zeichenkette in ein Array um
$zeichenkette = explode(";", $zeichenkette);	
echo $zeichenkette . "<br />";
//Wandelt ein Array in eine Zeichenkette um
$zeichenkette = implode(", ", $zeichenkette);	
echo $zeichenkette . "<br />"; 
?>
<h2>Datums- und Zeitfunktionen</h2>
<?php
//Liefert aktuellen Unix-Timestamp seit 1.1.1970 in Sekunden
echo time() . "<br />";
//Datum 11.09.2010 15:49:3 wird in Unix-Timestamp umgewandelt
echo mktime(15,49,3,9,11,2010) . "<br />";
//Formatierte Ausgabe des Datums
echo date("d.M.Y H:i:s",time());
?>
</body>
</html>