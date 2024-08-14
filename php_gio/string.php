<?php 

$development_server = "XAMPP";

/* Spacing matters in Heredoc and Nowdoc */

// Heredoc
$text =<<<TEXT 
Line 1
Line 2
Line 3
TEXT;

echo nl2br($text);



// Nowdoc

$text =<<<'TEXT'
Line 1
Line 2
Line 3
TEXT;

echo nl2br($text);



 ?>