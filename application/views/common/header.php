<?php
require "application/libraries/lessc.inc.php";
$less = new lessc;
$less->checkedCompile("application/assets/styles/input.less", "application/assets/styles/output.css");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Feunac | {page_title}</title>
        <link rel="stylesheet" media="screen" href="<?php echo css_url('output'); ?>">
    </head>
    <body>
