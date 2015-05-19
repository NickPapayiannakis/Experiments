<?php

/*************************************
*                                   *
*                                   *
*  Name Grabber 2000 Instructions   *
*                                   *
*                                   *
*                                   *
*************************************

This mini-program scans a text file, locates every instance of a pre-determined name 
and appends the title "Dynamite Web Designer" to it.  The location for every instance 
of the name is logged in a file called Name Repository.txt.

Instructions for use:

1. Ensure that NameGrabber2000.php is in the same folder as hiddenName.txt
2. Run NameGrabber2000.php using the method of your choice.
3. Once finished, the program will have created two additional text files: hiddenNameModified.txt and Name Repository.txt

This code makes use of file reading and writing, arrays, and string replacement.
*/

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