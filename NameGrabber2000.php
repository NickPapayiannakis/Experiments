<?php
$hiddenName = file("hiddenName.txt");
$replace = fopen ("hiddenNameModified.txt", "w");
$nameRepository = fopen ("Name Repository.txt", "w");
$name = "Nicholas Papayiannakis";

fputs($nameRepository, "Position of the name:\r\n\r\n");

foreach($hiddenName as $elementName => $elementValue) {
    $pos = strpos($elementValue, $name);
    if ($pos) {
        $register = "line: " . $elementName . " position: " . $pos . "\r\n";
        $elementValue = str_replace($name, $name . ", Dynamite Web Designer", $elementValue);
        fputs($replace, $elementValue);
        fputs($nameRepository, $register);
    }
}
?>
