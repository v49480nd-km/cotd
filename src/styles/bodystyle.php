<?php
header("Content-type: text/css");

$text = "hsl(0, 0%, 85%)";
$link = "hsl(210, 100%, 60%)";
$secondText = "hsl(0, 0%, 50%)";
$secondGround = "hsl(0, 0%, 25%)";
$background = "hsl(0, 0%, 5%)";
?>

.greeting {
    padding: 0 2rem;
}

.greeting article {
    padding: 0 4rem;
    font-size: 1.5rem;
    margin: 2rem 0;
}

ul {
    list-style-position: inside;
}

ul li {
    padding: 1rem 0;
}

a {
    text-decoration: none;
    color: <?=$link?>;
    padding: 1rem 0;
}

footer {
    font-size: 1.25rem;
    font-weight: 500;
    font-style: italic;
    height: 4rem;
}

.footer {
    padding: 0 2rem;
}
