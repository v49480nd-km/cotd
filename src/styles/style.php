<?php
header("Content-type: text/css");

$text = "hsl(0, 0%, 85%)";
$link = "hsl(210, 100%, 60%)";
$secondText = "hsl(0, 0%, 50%)";
$secondGround = "hsl(0, 0%, 25%)";
$background = "hsl(0, 0%, 5%)";
?>

* {
    margin: 0;
    padding: 0;
    font-family: Helvetica, sans-serif;
    box-sizing: border-box;
}

html {
    background-color: <?=$background?>;
    color: <?=$text?>;
    height: 100%;
}

body {
    min-height: 100%;
    border: 6px double <?=$secondGround?>;
}
