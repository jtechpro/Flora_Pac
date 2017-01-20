<?php
$file = file_get_contents('no_ads_compresssed.pac');

header('Content-Type: application/x-ns-proxy-autoconfig; charset=UTF-8');
header('Content-Disposition: attachment; filename="no_ads_compressed.pac"');

echo $file;
