<?php
require_once('crest.php');
$res = batch('crm.deal.update', [
    'ID' => 333, 
    'FIELDS' => [
        'UF_CRM_1667457142525' => [
            "resource|25|20.03.2020 15:00:00|3600|Примерка"
        ]
    ]     
]);