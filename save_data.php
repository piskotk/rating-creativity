<?php
$filename = "data/".$_POST['filename'];
$data = $_POST['filedata'];
file_put_contents($filename, $data);
?>
