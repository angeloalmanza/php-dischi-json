<?php
$json_text = file_get_contents('./dischi.json');

$dischi = json_decode($json_text, true);
?>
