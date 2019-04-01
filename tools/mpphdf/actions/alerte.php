<?php
if (!defined("WIKINI_VERSION")) {
    die("acc&egrave;s direct interdit");
}

$couleur = $this->getParameter('couleur');

$file = 'themes/mpphdf/images/alerte.svg';
print("<img class='alerte' src='$file' />");
