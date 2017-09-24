<?php
    header('Content-type: application/x-apple-aspen-config; charset=utf-8');
//GET API KEY FROM http://zameer.us/certsign/createkey.php
$apiKey="";
echo file_get_contents('http://zameer.us/certsign/api.php?key='.$apiKey.'&url=https://Link/To/build.php?name='.$_GET['name']);
