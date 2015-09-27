<?php
require "lessc.inc.php";

$less = new lessc;
$less->checkedCompile("input.less", "output.css");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="output.css" rel="stylesheet" media="screen">
        <title></title>
    </head>
    <body>
        <h1>Bonjour</h1>
        <h1>Bonjour</h1>
        <p>Cobalt</p>
    </body>
</html>
