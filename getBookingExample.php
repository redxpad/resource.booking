<?php
require_once('crest.php');
$res = CRest::call('calendar.resource.booking.list', [
    'filter' => [
        'resourceTypeIdList' => [25],
        'from' => '2022-11-01',
        'to' => '2022-11-05',
    ]
]);