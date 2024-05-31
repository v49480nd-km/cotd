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

.title {
    font-size: 3rem;
    font-weight: 700;
    padding: 1rem 1rem 0 2rem;
}

.titles .title {
    padding: 3rem 1rem 0 2rem;
}

.subtitle {
    font-size: 1.5rem;
    font-style: italic;
    color: <?=$secondText?>;
    padding: 0 2rem;
}

.nav {
    height: 4rem;
    padding: 2rem 0 0 1rem;
    margin-bottom: 1rem;
}

.nav ul,.nav ul li {
    display: inline;
    float: left;
    height: 100%;
    text-align: center;
    list-style-type: none;
}

.navlink {
    display: block;
    height: 100%;
    padding: 0 1rem;
    color: <?=$secondText?>;
    text-decoration: none;
    font-size: 1.25rem;
}

.navlink:hover {
    font-weight: 600;
}

.active {
    font-weight: 800;
    color: <?=$text?>;
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

.greeting {
    padding: 0 2rem;
}

.greeting article {
    padding: 0 4rem;
    font-size: 1.5rem;
    margin: 2rem 0;
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
