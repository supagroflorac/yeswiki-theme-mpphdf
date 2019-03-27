<?php
if (!defined("WIKINI_VERSION")) {
    die("acc&egrave;s direct interdit");
}

$couleur = $this->getParameter('couleur');

$file = 'themes/mpphdf/images/bonhomme_vert.svg';
if (file_exists("themes/mpphdf/images/bonhomme_$couleur.svg")) {
  $file = "themes/mpphdf/images/bonhomme_$couleur.svg";
}

print("<img class='bonhomme' src='$file' />");
