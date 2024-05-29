<?php
header("Content-type: text/css");

// variables
$white = "hsl(45, 29%, 97%)";
$gray = "hsl(0, 0%, 36%)";
$darkgray = "hsl(0, 0%, 18%)";
$black = "hsl(11, 3%, 3%)";
?>

* {
    margin: 0;
    padding: 0;
    font-family: Helvetica, sans-serif;
}

html, body {
    background-color: <?=$black?>;
    color: <?=$white?>;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

body {
    width: 50%;
    margin: auto;
    border: 3px dashed <?=$darkgray?>;
}

.title {
    font-size: 3rem;
    font-weight: 700;
    padding: 1rem 1rem 0 1rem;
}

.titles .title {
    padding: 3rem 1rem 0 1rem;
}

.subtitle {
    font-size: 1.5rem;
    font-style: italic;
    color: <?=$gray?>;
    padding: 0 1rem;
}

.nav {
    height: 4rem;
}

ul, li {
    display: flex;
    justify-content: flex-start;
    align-content: center;
    flex-flow: row wrap;
    height: 100%;
    text-align: center;
    list-style-type: none;
}

ul li a {
    align-content: center;
    height: 100%;
    padding: 0 1rem;
    color: <?=$white?>;
    text-decoration: none;
    font-size: 1.25rem;
    transition: 0.1s;
}

ul, li a:hover {
    font-size: 1.35rem;
    transition: 0.1s;
}

main {
    flex-grow: 4;
}

.greeting {
    padding: 0 1rem;
}

.greeting article {
    padding: 0 2rem;
    font-size: 1.5rem;
    margin: 2rem 0;
}

footer {
    display: flex;
    align-items: center;
    font-size: 1.25rem;
    font-weight: 500;
    font-style: italic;
    height: 4rem;
}

.footer {
    padding: 0 1rem;
}
