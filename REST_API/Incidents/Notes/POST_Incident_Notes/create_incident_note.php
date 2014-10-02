<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$REQUESTER_ID='PJR28TQ';
$INCIDENT_ID = 'P2ZHQB7';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/incidents/' . urlencode($INCIDENT_ID) . '/notes';
$session = curl_init();

$json_payload = array(
        "requester_id"=> $REQUESTER_ID,
        "note" => array(
            "content"=>"yabadaba"
            )
        );
curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
