<?php
if (!defined("WIKINI_VERSION")) {
    die("acc&egrave;s direct interdit");
}

$couleur = $this->getParameter('couleur');
$text = $this->getParameter('texte');

$file = 'themes/mpphdf/images/bonhomme_vert.svg';
if (file_exists("themes/mpphdf/images/bonhomme_$couleur.svg")) {
  $file = "themes/mpphdf/images/bonhomme_$couleur.svg";
}

$bulle = "";
if (!empty($text)) {
  $bulle = "<div class='bulle'>$text</div>";
}

print("
<div class='bonhomme'>
  <img src='$file' />
  $bulle
</div>
");
