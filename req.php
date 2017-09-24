<?php
    header('Content-type: application/x-apple-aspen-config; charset=utf-8');

echo file_get_contents('http://zameer.us/certsign/api.php?url=https://zameer.us/certsign/demo/build.php?name='.$_GET['name']);