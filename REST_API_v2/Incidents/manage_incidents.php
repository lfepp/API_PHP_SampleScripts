<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$REQUESTER_EMAIL = 'lucas@pagerduty.com';
$PAYLOAD = array(
  'incidents' => array(
    array(
      'id' => 'PH0Y86A',
      'type' => 'incident_reference',
      'status' => 'acknowledged'
    )
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/incidents';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY,
    'From: ' . $REQUESTER_EMAIL
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, "PUT");
$output = curl_exec($session);
?>
