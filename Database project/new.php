<?php
$combinedCode = '';
foreach (glob("*.php") as $filename) {
    $combinedCode .= file_get_contents("./$filename");
}
file_put_contents("./combined.php", $combinedCode);
?>