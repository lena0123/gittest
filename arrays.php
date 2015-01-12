<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<title>Arrays</title>
<meta name="author" content="Helene Deutsch" />
<meta http-equiv="content-type" content="text/xhtml; charset=ISO-8859-1" />
</head>
<body>
<h2>Indizierte Array</h2>
<?php
$fussballvereine[] = "Bayern München";
$fussballvereine[] = "Bayer Leverkusen";
$fussballvereine[] = "Eintracht Frankfurt";
echo $fussballvereine[1] . "<br />"; //gibt Bayer Leverkusen aus
//oder so
$vereine = array("Bayern München", "Bayer Leverkusen", "Eintracht Frankfurt");
echo $vereine[0]; //gibt Bayern München aus
?>
<h2>Assoziative Array</h2>
<?php
$sortiment["holzart"] = "Buche";
$sortiment["typ"] = "Tisch";
echo $sortiment["holzart"] . "<br />"; //gibt Buche aus
//oder so
$sortiment = array("holzart" => "Buche", "typ" => "Tisch");
echo $sortiment["typ"]; //gibt Tisch aus
?>
<h2>Mehrdimensionale Array</h2>
<h3>mehrdimensionales indiziert Array</h3>
<?php
$adressen = array (
    array("Vorname" => "Clara", "Nachname" => "Klein", "Anschrift" => "irgendwo"),
    array("Vorname" => "Ilse", "Nachname" => "Bilse", "Anschrift" => "nirgendwo"),
    array("Vorname" => "Ingo", "Nachname" => "Bingo", "Anschrift" => "hier")
);

echo $adressen[1]["Vorname"];
echo " wohnt ";
echo $adressen[1]["Anschrift"];        // Ausgabe: Ilse wohnt nirgendwo
?>
<h3>mehrdimensionales assoziatives Array</h3>
<?php
$adressen_mitarbeiter = array (
    "MA1" => array("Vorname" => "Clara", "Nachname" => "Klein", "Anschrift" => "irgendwo"),
    "MA2" => array("Vorname" => "Ilse", "Nachname" => "Bilse", "Anschrift" => "nirgendwo"),
    "MA3" => array("Vorname" => "Ingo", "Nachname" => "Bingo", "Anschrift" => "hier")
);
echo $adressen_mitarbeiter["MA3"]["Vorname"];
echo " wohnt ";
echo $adressen_mitarbeiter["MA3"]["Anschrift"]; // Ausgabe: Ingo wohnt hier
?>
<h3>Ausgabe aller eindimensionalen Array Elemente</h3>
<h4>Mit der while-Schleife</h4>
<?php
//indizierte Array
$i = 0;
while($i < count($fussballvereine)){
    echo $fussballvereine[$i] . "<br />";
	$i ++;
}
?>
<h4>Mit der for-Schleife</h4>
<?php
//indizierte Array
for($i = 0; $i < count($fussballvereine); $i++){
    echo $fussballvereine[$i] . "<br />";
}
?>
<h4>Mit der foreach-Schleife</h4>
<?php
//indiziertes und assoziatives Array
foreach ($fussballvereine as $schluessel => $wert){
    echo "$schluessel: $wert <br />";
}
?>
<h3>Ausgabe aller mehrdimensionalen Array Elemente</h3>
<h4>Mit der foreach-Schleife</h4>
<?php
foreach ($adressen_mitarbeiter as $schluessel => $wert){  
    echo "<b>$schluessel</b>: <br />";
        foreach($wert as $schluessel2 => $inhalt){        
            echo "$schluessel2: $inhalt <br />";
        }
}



//dreidimensionales Array
$adressen_dreid = array (
    array("Vorname" => "Clara", "Nachname" => "Klein", "Anschrift" => array("irgendwo", "nirgendwo", "hier und dort")),
    array("Vorname" => "Ilse", "Nachname" => "Bilse", "Anschrift" => array("nirgendwo", "dort")),
    array("Vorname" => "Ingo", "Nachname" => "Bingo", "Anschrift" => array("hier"))
);
echo "<br />";
foreach ($adressen_dreid as $mitarbeiter){  
    echo $mitarbeiter["Vorname"] . " " . $mitarbeiter["Nachname"] . "<br />";
        foreach($mitarbeiter["Anschrift"] as $anschriften){        
            echo "Anschrift: $anschriften <br />";
        }
}
?>
</body>
</html>