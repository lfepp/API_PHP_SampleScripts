<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$MAINTENANCE_WINDOW_ID = 'P7CF8WN';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/maintenance_windows/' . $MAINTENANCE_WINDOW_ID;
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
