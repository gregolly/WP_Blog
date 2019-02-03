<?php
    $file = 'image404.jpg';
    $type = 'image/jpeg';
    header("HTTP/1.0 404 Not Found");
    header('Content-Type:'.$type);
    header('Content-Length: ' . filesize($file));
    readfile($file);
?>